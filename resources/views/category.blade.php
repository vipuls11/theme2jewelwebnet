@include('admin-side-nave')



<section class="home ">
    <div class="text table-nav ">
        <div class="overflow-menu">
            <div class="container-2">
                <div class="flex  items-center justify-between">
                    <div class="bord-head mr-2 whitespace-nowrap">Category</div>

                    <button class="add-btn px-2 rounded text-2xl" onclick="openPopup('addcat')"><i
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
                    <tr class="tablebody">
                        <th class="border border-slate-300 px-2 w-20 py-2  ">Id</th>
                        <th class="border border-slate-300 px-2 py-2">Category Name</th>
                        <th class="border border-slate-300 px-2 py-2">Image Frist Path</th>
                        <th class="border border-slate-300 px-2 py-2">Image Frist</th>
                        <th class="border border-slate-300 px-2 py-2">Image Title</th>
                        <th class="border border-slate-300 px-2 py-2">Image Second Path</th>
                        <th class="border border-slate-300 px-2 py-2">Image Second</th>
                        <th class="border border-slate-300 px-2 py-2">Image Tilte</th>
                        <th class="border border-slate-300 px-2 py-2">Category banner</th>
                        <th class="border border-slate-300 px-2 w-20 ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category_data as $cat_data)
                        <tr>
                            <td class="border border-slate-300 px-2 text-center ">{{ $cat_data->id }}</td>
                            <td class="border border-slate-300 px-2 text-center ">{{ $cat_data->category_name }}</td>
                            <td class="border border-slate-300 px-2 text-center">{{ $cat_data->man_image_path }}</td>
                            <td class="border border-slate-300 text-center w-20"><img
                                    src="{{ asset('storage/Categories/' . $cat_data->man_image) }}" alt=""
                                    style="width: 100%; height:100%;"></td>
                            <td class="border border-slate-300 px-2 text-center">{{ $cat_data->image_title }}</td>
                            <td class="border border-slate-300 px-2 text-center">{{ $cat_data->women_image_path }}</td>
                            <td class="border border-slate-300 text-center w-20"><img
                                    src="{{ asset('storage/Categories/' . $cat_data->women_image) }}" alt=""
                                    style="width: 100%; height:100%;"></td>
                            <td class="border border-slate-300 px-2 text-center">{{ $cat_data->image_titles }}</td>

                            <td class="border border-slate-300 text-center w-20"><img
                                src="{{ asset('storage/Categories/' . $cat_data->c_banner) }}" alt=""
                                style="width: 100%; height:100%;"></td>

                            <td class="border border-slate-300 px-2 text-right ">
                                <div class="flex justify-between items-center">
                                    <button onclick="openPopup({{ $cat_data->id }})"
                                        class="flex text-2xl  flex-nowrap items-center  edit-btn px-2  my-1 mr-2 rounded">
                                        <i class="fa-regular fa-pen-to-square pr-1"></i>
                                    </button>
                                    <a onclick="return confirm('Are you sure you want to delete this {{ $cat_data->category_name }} ?')"
                                        href="{{ asset('category/delete/' . $cat_data->id) }}">
                                        <button
                                            class="flex text-2xl  flex-nowrap items-center  delete-btn px-2  my-1 rounded">
                                            <i class="fa-solid fa-trash-can pr-1"></i>
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


<!-- The Modal -->
<div id="categoryModal"
    class="modal inset-0 bg-gray-600 bg-opacity-50 fixed
top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">

    <!-- Modal content -->
    <div class="modal-content rounded-lg w-11/12 md:w-3/4 lg:w-1/2 ">

        <div class="p-2 ">
            <div class="flex justify-between">
                <div class="ml-4 text-xl" id="add_title"><label>Add Category</label></div>
                <div class="ml-4 text-xl hidden" id="up_title"><label>Update Category</label></div>
                <div><span
                        class="close text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-2xl  px-2 ml-auto  "
                        onclick="closePopup()">&times;</span></div>
            </div>

            <div class="w-full  ">
                <form action="{{ asset('category/create') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="cat_id" name="cat_id">
                    @csrf
                    <div class="rounded-lg  border-slate-400 p-4">
                        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4">

                            <div>
                                <label class=" mr-2 " for="">Category Name :</label>
                                <div class="flex my-2 ">
                                    <input id="category_name"
                                        class="py-1.5 rounded w-full px-2 outline-0 border border-slate-300 capitalize"
                                        type="text" placeholder="" name="category_name">
                                    <sup class="text-red-500 text-2xl ">*</sup>
                                </div>
                            </div>

                            <div>
                                <label class="mr-2" for="">Category First Image :</label>
                                <div class="flex  my-2 ">
                                    <input class="p-1 w-full outline-0 border border-slate-300  rounded" type="file"
                                        name="file1" >
                                    <sup class="text-red-500 text-2xl ">*</sup>
                                </div>
                                <img class="hidden border border-slate-300" id="image1" src="#"
                                    style="width: 80px;">

                            </div>
                            <div>
                                <label class=" mr-2" for="">Image Title :</label>
                                <div class="flex ">
                                    <input id="image_title"
                                        class="py-1.5 rounded w-full my-2 px-2 outline-0 border border-slate-300 capitalize"
                                        type="text" placeholder="" name="image_title">
                                    <sup class="text-red-500 text-2xl ">*</sup>
                                </div>
                            </div>

                            <div>
                                <label class=" mr-2" for="">Category Second Image :</label>
                                <div class="flex my-2">
                                    <input class="p-1 w-full outline-0 border border-slate-300  rounded" type="file"
                                        name="file2" >

                                    <sup class="text-red-500 text-2xl ">*</sup>
                                </div>
                                <img class="hidden border border-slate-300" id="image2" src="#"
                                    style="width: 80px;">

                            </div>
                            <div>
                                <label class=" mr-2" for="">Image Title :</label>

                                <div class="flex ">

                                    <input id="image_titles"
                                        class="py-1.5 rounded w-full my-2 px-2 outline-0 border border-slate-300 capitalize"
                                        type="text" placeholder="" name="image_titles">
                                    <sup class="text-red-500 text-2xl ">*</sup>
                                </div>
                            </div>

                            <div>
                                <label class=" mr-2" for="">Category banner Image :</label>
                                <div class="flex my-2">
                                    <input class="p-1 w-full outline-0 border border-slate-300  rounded" type="file"
                                        name="file3" >

                                    <sup class="text-red-500 text-2xl ">*</sup>
                                </div>
                                <img class="hidden border border-slate-300" id="image3" src="#"
                                    style="width: 80px;">

                            </div>
                        </div>

                        <button id="submit" class="submit-btn px-4 py-1 mt-4 mr-4 rounded">Save</button>
                        <button id="update" class="hidden submit-btn px-4 py-1 mt-4 mr-4 rounded">Update</button>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<input type="hidden" value="{{ asset('/') }}" id="url">
<script>
    // Get the modal
    var modal = document.getElementById("categoryModal");
    // Get the button that opens the modal

    function openPopup(id) {
            document.getElementById('up_title').style.display = "none";
            document.getElementById('add_title').style.display = "none";
            document.getElementById('image1').style.display = "none";
            document.getElementById('image2').style.display = "none";
            document.getElementById('image3').style.display = "none";
            document.getElementById('update').style.display = "none";
            document.getElementById('submit').style.display = "none";
        if (id != 'addcat') {
            document.getElementById('add_title').style.display = "none";
            document.getElementById('up_title').style.display = "block";
            document.getElementById('image1').style.display = "block";
            document.getElementById('image2').style.display = "block";
            document.getElementById('image3').style.display = "block";
            document.getElementById('update').style.display = "block";
            document.getElementById('submit').style.display = "none";
            var url = $('#url').val();
            $.ajax({
                type: "GET",
                url: url + "category/edit/" + id,
                cat_data: "",
                success: function(cat_data) {
                    $('#category_name').val(cat_data.category_name);
                    $('#image_title').val(cat_data.image_title);
                    $('#image_titles').val(cat_data.image_titles);
                    $('#cat_id').val(cat_data.id);
                    $('#image1').attr('src', url + 'storage/Categories/' + cat_data.man_image);
                    $('#image2').attr('src', url + 'storage/Categories/' + cat_data.women_image);
                    $('#image3').attr('src', url + 'storage/Categories/' + cat_data.c_banner);
                    console.log(cat_data);

                }
            });
        }
        else{
            $('#category_name').val("");
            $('#image_title').val("");
            $('#image_titles').val("");

            document.getElementById('add_title').style.display = "block";
            document.getElementById('submit').style.display = "block";
        }
        document.getElementById('categoryModal').style.display = "block";
    }

    function closePopup(id) {
        document.getElementById('categoryModal').style.display = "none";
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
