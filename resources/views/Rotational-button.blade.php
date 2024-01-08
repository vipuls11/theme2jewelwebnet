@include('admin-side-nave')

@php
    $Categories = \App\Models\Category::all();
@endphp
<section class="home ">

    <div class="text table-nav ">
        <div class="overflow-menu">
            <div class="container-2">
                <div class="flex flex-nowrap items-center justify-between">
                    <div class="bord-head mr-2 whitespace-nowrap">Rotational button</div>
                    <button class="add-btn px-2 rounded text-2xl" onclick="openPopup('addbutton')"><i
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
                    <tr class="tablebody ">
                        <th class="border border-slate-300 px-2 w-20 py-2  ">Id</th>
                        <th class="border border-slate-300 px-2 py-2  "> Image Path </th>
                        <th class="border border-slate-300 px-2 py-2  "> Image </th>
                        <th class="border border-slate-300 px-2 py-2  ">Category Name</th>
                        <th class="border border-slate-300 px-2 py-2">View Button Name</th>
                        <th class="border border-slate-300 px-2 w-20 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($Rotationaldata as $rotdata)
                        <tr>
                            <td class="border border-slate-300 px-2 text-center ">{{ $rotdata->id }}</td>
                            <td class="border border-slate-300 px-2 text-center ">{{ $rotdata->image_path }}</td>
                            <td class="border border-slate-300 text-center w-20"><img
                                    src="{{ asset('storage/files/' . $rotdata->image_name) }}" alt=""
                                    style="width: 100%; height:100%;"></td>
                            <td class="border border-slate-300 px-2 text-center ">
                                {{ $rotdata->category->category_name ?? '' }}</td>
                            <td class="border border-slate-300 px-2 text-center ">{{ $rotdata->button_name }}</td>
                            <td class="border border-slate-300 px-2 text-right ">
                                <div class="flex justify-between items-center text-base">
                                    <button onclick="openPopup({{ $rotdata->id }})"
                                        class="flex text-2xl  flex-nowrap items-center  edit-btn px-2  my-1 mr-2 rounded">
                                        <i class="fa-regular fa-pen-to-square pr-1"></i>
                                    </button>
                                    <a onclick="return confirm('Are you sure you want to delete this {{ $rotdata->category->category_name ?? ''  }} ?')"
                                        href="{{ asset('Rotational-button/delete/' . $rotdata->id) }}">
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




<div id="rotationalModal" class="modal absolute inset-0 bg-gray-600 bg-opacity-50 fixed
top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">


    <div class="modal-content rounded-lg w-11/12 md:w-1/2 lg:w-1/3 ">

        <div class="p-2 ">
            <div class="flex justify-between">
                <div class="ml-4 text-xl" id="add_title"><label>Add Rotational button</label></div>
                <div class="ml-4 text-xl hidden" id="up_title"><label>Update Rotational button</label></div>
                <div><span
                        class="close text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-2xl  px-2 ml-auto  "
                        onclick="closePopup('rotationalModal')">&times;</span></div>
            </div>

            <div class="w-full  ">
                <form action="{{ asset('Rotational-button/create') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="rot_id" name="rot_id">
                    @csrf
                    <div class="rounded-lg  border-slate-400 p-4">

                        <label for="">Product Image :</label>
                        <div class="flex my-2">
                            <input class="p-1 border border-slate-300 w-full rounded" type="file" name="image">
                            <sup class="text-red-500 text-2xl ">*</sup>
                        </div>
                        <img class="hidden border border-slate-300" id="image1" src="#" style="width: 80px;">
                        {{-- <div class="flex items-center flex-wrap">
                                        <label class=" mr-2" for="">Product Name :</label>
                                        <input id="category_id" class="py-1 rounded w-56 my-4 px-2 outline-0 border border-slate-300" type="text" name="category_id" placeholder="" required>
                                        <sup class="text-red-500 text-2xl ">*</sup>
                                    </div> --}}
                        <label class=" mr-2" for="">Product Name :</label>
                        <div class="flex my-2">
                            <select id="category_id" class="w-full  rounded p-2 border border-slate-300"
                                name="category_id">

                                @foreach ($Categories as $cate_data)
                                    <option value="{{ $cate_data->id }}">{{ $cate_data->category_name }}
                                    </option>
                                @endforeach
                            </select>
                            <sup class="text-red-500 text-2xl ">*</sup>
                        </div>
                        <label class=" mr-2" for="">Button Name :</label>
                        <div class="flex my-2">
                            <input id="button_name" class="py-1 rounded w-full px-2 outline-0 border border-slate-300 capitalize"
                                type="text" name="button_name" placeholder="" required>
                            <sup class="text-red-500 text-2xl ">*</sup>
                        </div>

                        <div class="flex mt-4">
                            <button id="submit" class="submit-btn px-4 py-1 mr-4 rounded">Save</button>
                            <button id="update" class="hidden submit-btn px-4 py-1 mr-4 rounded">Update</button>
                            {{-- <button class="cancel-btn px-2 py-1 rounded" onclick="closePopup('rotationalModal')">Cancel </button> --}}
                        </div>
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
    var modal = document.getElementById("rotationalModal");
    // Get the button that opens the modal

    function openPopup(id) {
        
            document.getElementById('image1').style.display = "none";
            document.getElementById('update').style.display = "none";
            document.getElementById('up_title').style.display = "none";
            document.getElementById('add_title').style.display = "none";
            document.getElementById('submit').style.display = "none";

        if (id != 'addbutton') {
            document.getElementById('image1').style.display = "block";
            document.getElementById('update').style.display = "block";
            document.getElementById('up_title').style.display = "block";
            document.getElementById('add_title').style.display = "none";
            document.getElementById('submit').style.display = "none";
            var url = $('#url').val();
            $.ajax({
                type: "GET",
                url: url + "Rotational-button/edit/" + id,
                rotdata: "",
                success: function(rotdata) {
                    $('#category_id').val(rotdata.category_id);
                    $('#button_name').val(rotdata.button_name);
                    $('#rot_id').val(rotdata.id);
                    $('#image1').attr('src', url + 'storage/files/' + rotdata.image_name);
                    console.log(rotdata);

                }
            });
        }
        else{
            $('#category_id').val("");

            $('#button_name').val("");

        document.getElementById('add_title').style.display = "block";
        document.getElementById('submit').style.display = "block";

        }
        document.getElementById('rotationalModal').style.display = "block";
    }

    function closePopup(id) {
        document.getElementById('rotationalModal').style.display = "none";
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
