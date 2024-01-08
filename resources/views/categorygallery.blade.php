@include('admin-side-nave')

<section class="home ">

    <div class="text table-nav ">
        <div class="overflow-menu">
            <div class="container-2">
                <div class="flex flex-nowrap items-center justify-between">
                    <div class="bord-head mr-2 whitespace-nowrap">Category Gallery Image</div>
                    <button class="add-btn px-2 rounded text-2xl" onclick="openPopup('addgallery')"><i
                            class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-menu">
        <div class="container-2">
            @if (session()->has('msg'))
                <div class="bg-green-500 py-2 text-white text-center text-2xl font-semibold " id="msg"
                    style="display: none;">
                    {{ session('msg') }}
                </div>
            @endif
            <table class="w-full border-collapse border border-slate-400 ">
                <thead>
                    <tr class="tablebody text-sm">
                        <th class="border border-slate-300 px-1 py-2  ">Id</th>
                        <th class="border border-slate-300 px-1 py-2   ">Left Image Path </th>
                        <th class="border border-slate-300 px-1 py-2  w-16">Left Image</th>
                        <th class="border border-slate-300 px-1 py-2  ">Right Image Path</th>
                        <th class="border border-slate-300 px-1 py-2 w-16 ">Right Image </th>
                        <th class="border border-slate-300 px-1 py-2  ">Bottomleft Image Path</th>
                        <th class="border border-slate-300 px-1 py-2 w-16 ">Bottomleft Image</th>
                        <th class="border border-slate-300 px-1 py-2  ">Bottomright Image Path</th>
                        <th class="border border-slate-300 px-1 py-2 w-16 ">Bottomright Image</th>
                        <th class="border border-slate-300 px-1 py-2  ">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($gallerydata as $galdata)
                        <tr class="text-xs">
                            <td class="border border-slate-300 text-center ">{{ $galdata->id }}</td>
                            <td class="border border-slate-300 text-center px-1">{{ $galdata->left_image_path }}</td>
                            <td class="border border-slate-300 text-center "><img
                                    src="{{ asset('storage/Gallery_4/' . $galdata->left_image) }}" alt=""></td>
                            <td class="border border-slate-300 text-center px-1">{{ $galdata->right_image_path }}</td>
                            <td class="border border-slate-300 text-center "><img
                                    src="{{ asset('storage/Gallery_4/' . $galdata->right_image) }}" alt=""></td>
                            <td class="border border-slate-300 text-center px-1">{{ $galdata->bottom_left_image_path }}</td>
                            <td class="border border-slate-300 text-center"><img
                                    src="{{ asset('storage/Gallery_4/' . $galdata->bottom_left_image) }}" alt=""></td>
                            <td class="border border-slate-300 text-center px-1">{{ $galdata->bottom_right_image_path }}</td>
                            <td class="border border-slate-300 text-center "><img
                                    src="{{ asset('storage/Gallery_4/' . $galdata->bottom_right_image) }}" alt=""></td>

                            <td class="border border-slate-300 text-right px-2">
                                <div class="flex justify-between items-center text-base">
                                    <button onclick="openPopup({{ $galdata->id }})"
                                        class="flex text-2xl  flex-nowrap items-center  edit-btn  my-1 mr-2 rounded">
                                        <i class="fa-regular fa-pen-to-square "></i>
                                    </button>
                                    <a onclick="return confirm('Are you sure you want to delete this {{ $galdata->id }} ?')"
                                        href="{{ asset('categorygallery/delete/' . $galdata->id) }}">
                                        <button
                                            class="flex text-2xl  flex-nowrap items-center  delete-btn  my-1 rounded">
                                            <i class="fa-solid fa-trash-can "></i>
                                        </button></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</section>




<div id="galleryModal"
    class="modal absolute inset-0 bg-gray-600 bg-opacity-50 fixed
                top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">


    <div class="modal-content rounded-lg w-11/12 md:w-3/4 lg:w-1/2 ">

        <div class="p-2 ">
            <div class="flex justify-between">
                <div class="ml-4 text-xl" id="add_title"><label>Add Gallery Image</label></div>
                <div class="ml-4 text-xl hidden" id="up_title"><label>Update Gallery Image</label></div>
                <div><span
                        class="close text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-2xl  px-2 ml-auto  "
                        onclick="closePopup('addgallery')">&times;</span></div>
            </div>

            <div class="w-full  ">
                <form action="{{ asset('categorygallery/create') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="gal_id" name="gal_id">
                    @csrf
                    <div class="rounded-lg  border-slate-400 p-4">
                        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4">

                            <div>
                                <label for="">Gallery left Image :</label>
                                <div class="flex my-2">
                                    <input class="p-1 my-1 w-full rounded outline-0 border border-slate-300"
                                        type="file" name="fileleft" >
                                    <sup class="text-red-500 text-2xl ">*</sup>
                                </div>
                                <img class="hidden border border-slate-300" id="image1" src="#"
                                    style="width: 80px;">
                            </div>

                            <div>
                                <label for="">Gallery right Image :</label>
                                <div class="flex my-2">
                                    <input class="p-1 my-1 w-full rounded outline-0 border border-slate-300"
                                        type="file" name="fileright" >
                                    <sup class="text-red-500 text-2xl ">*</sup>
                                </div>
                                <img class="hidden border border-slate-300" id="image2" src="#"
                                    style="width: 80px;">
                            </div>
                            <div>
                                <label for="">Rightbottom Right Image :</label>
                                <div class="flex my-2">
                                    <input class="p-1 my-1 w-full rounded outline-0 border border-slate-300"
                                        type="file" name="filebotleft" >
                                    <sup class="text-red-500 text-2xl ">*</sup>
                                </div>
                                <img class="hidden border border-slate-300" id="image3" src="#"
                                    style="width: 80px;">
                            </div>
                            <div>
                                <label for="">Rightbottom left Image :</label>
                                <div class="flex my-2">
                                    <input class="p-1 my-1 w-full rounded outline-0 border border-slate-300"
                                        type="file" name="filebotright" >
                                    <sup class="text-red-500 text-2xl ">*</sup>
                                </div>
                                <img class="hidden border border-slate-300" id="image4" src="#"
                                    style="width: 80px;">
                            </div>
                        </div>


                        <div class="flex mt-4">
                            <button id="submit" class="submit-btn px-4 py-1 mr-4 rounded">Save</button>
                            <button id="update" class="hidden submit-btn px-4 py-1 mr-4 rounded">Update</button>
                            {{-- <button class="cancel-btn px-2 py-1 rounded" onclick="closePopup('addgallery')">Cancel </button> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>







<input type="hidden" value="{{ asset('/') }}" id="url">
<script>
    // Get the modal
    var modal = document.getElementById("galleryModal");
    // Get the button that opens the modal

    function openPopup(id) {
        
            document.getElementById('image1').style.display = "none";
            document.getElementById('image2').style.display = "none";
            document.getElementById('image3').style.display = "none";
            document.getElementById('image4').style.display = "none";
            document.getElementById('update').style.display = "none";
            document.getElementById('submit').style.display = "none";
            document.getElementById('add_title').style.display = "none";
            document.getElementById('up_title').style.display = "none";

        if (id != 'addgallery') {
            document.getElementById('image1').style.display = "block";
            document.getElementById('image2').style.display = "block";
            document.getElementById('image3').style.display = "block";
            document.getElementById('image4').style.display = "block";
            document.getElementById('update').style.display = "block";
            document.getElementById('up_title').style.display = "block";
            document.getElementById('submit').style.display = "none";
            document.getElementById('add_title').style.display = "none";
            var url = $('#url').val();
            $.ajax({
                type: "GET",
                url: url + "categorygallery/edit/" + id,
                galdata: "",
                success: function(galdata) {
                    $('#gal_id').val(galdata.id);
                    $('#image1').attr('src', url + 'storage/Gallery_4/' + galdata.left_image);
                    console.log(galdata);
                    $('#image2').attr('src', url + 'storage/Gallery_4/' + galdata.right_image);
                    console.log(galdata);
                    $('#image3').attr('src', url + 'storage/Gallery_4/' + galdata.bottom_left_image);
                    console.log(galdata);
                    $('#image4').attr('src', url + 'storage/Gallery_4/' + galdata.bottom_right_image);
                    console.log(galdata);
                }
            });
        }
        else{
        document.getElementById('add_title').style.display = "block";
        document.getElementById('submit').style.display = "block";

        }
        document.getElementById('galleryModal').style.display = "block";
    }

    function closePopup(id) {
        document.getElementById('galleryModal').style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    $(document).ready(function() {
        $("#msg").slideUp(0).delay(1000).slideDown('slow');
        $("#msg").slideDown(1).delay(2000).slideUp('slow');
    });
</script>
