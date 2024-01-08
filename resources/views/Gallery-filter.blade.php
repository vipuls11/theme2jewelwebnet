@include('admin-side-nave')

@php
    $Categories = \App\Models\Category::all();
@endphp

<section class="home ">

    <div class="text table-nav ">
        <div class="overflow-menu">
            <div class="container-2">
                <div class="flex flex-nowrap items-center justify-between">
                    <div class="bord-head mr-2 whitespace-nowrap">Gallery Filter</div>
                    <button class="add-btn px-2 rounded text-2xl relative " onclick="openPopup('addfilter')"><i
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
                        <th class="border border-slate-300 px-2 w-20 py-2  ">Category Name</th>
                        <th class="border border-slate-300 px-2 py-2  "> Image Path </th>
                        <th class="border border-slate-300 px-2 py-2  "> Image </th>
                        <th class="border border-slate-300 px-2 py-2  ">Product Type Name</th>
                        <th class="border border-slate-300 px-2 w-20 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($gallerys as $galldata)
                        <tr>
                            <td class="border border-slate-300 px-2 text-center ">{{ $galldata->id }}</td>
                            {{-- <td class="border border-slate-300 px-2 text-center " >{{$galldata->category->category_name}}</td> --}}
                            <td class="border border-slate-300 px-2 text-center ">{{ $galldata->category_id }}</td>
                            <td class="border border-slate-300 px-2 text-center ">{{ $galldata->image_path }}</td>
                            <td class="border border-slate-300 text-center w-20"><img
                                    src="{{ asset('storage/Galler_filter/' . $galldata->image_name) }}" alt=""
                                    style="width: 100%; height:100%;"></td>
                            <td class="border border-slate-300 px-2 text-center ">{{ $galldata->product_type }}</td>


                            <td class="border border-slate-300 px-2 text-right ">
                                <div class="flex justify-between items-center text-base">
                                    <button onclick="openPopup({{ $galldata->id }})"
                                        class="flex text-2xl  flex-nowrap items-center  edit-btn px-2  my-1 mr-2 rounded">
                                        <i class="fa-regular fa-pen-to-square pr-1"></i>
                                    </button>
                                    <a onclick="return confirm('Are you sure you want to delete this {{ $galldata->product_type }} ?')"
                                        href="{{ asset('Gallery-filter/delete/' . $galldata->id) }}">
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




<div id="gfilterModal"
    class="modal  inset-0 bg-gray-600 bg-opacity-50 fixed
                 top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">


    <div class="modal-content rounded-lg w-11/12 md:w-1/2 lg:w-1/3  ">

        <div class="p-2 ">
            <div class="flex justify-between">
                <div class="ml-4 text-xl" id="add_title"><label>Add Product </label></div>
                <div class="ml-4 text-xl hidden" id="up_title"><label>Update Product </label></div>
                <div><span
                        class="close text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-2xl  px-2 ml-auto  "
                        onclick="closePopup('gfilterModal')">&times;</span></div>
            </div>

            <div class="w-full ">
                <form action="{{ asset('Gallery-filter/create') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="gf_id" name="gf_id">
                    @csrf
                    <div class="rounded-lg  border-slate-400 p-4">
                        <label for="">Category Name :</label>
                        <div class="flex my-2">
                            <input id="category_id" class="py-1 rounded w-full px-2 outline-0 border border-slate-300 capitalize"
                                type="text" name="category_id" placeholder="" required>
                            <sup class="text-red-500 text-2xl ">*</sup>
                        </div>
                        {{-- <div class="flex my-2">
                                        <div class="w-full">
                                            <select id="category_id" class="w-full  rounded p-2 border border-slate-300"
                                                name="category_id">
                                                <option value="">None...</option>
                                                @foreach ($Categories as $cate_data)
                                                    <option value="{{ $cate_data->id }}">{{ $cate_data->category_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <sup class="text-red-500 text-2xl ">*</sup>
                                    </div> --}}

                        <label for="">Product Image :</label>
                        <div class="flex my-2">
                            <input class="p-1 w-full rounded outline-0 border border-slate-300 " type="file"
                                name="image" >
                            <sup class="text-red-500 text-2xl ">*</sup>
                        </div>
                        <img class="hidden border border-slate-300" id="image1" src="#" style="width: 100px;">

                        <label for="">Product Type Name :</label>
                        <div class="flex my-2">
                            <input id="product_type" class="py-1 rounded w-full px-2 outline-0 border border-slate-300 capitalize"
                                type="text" name="product_type" placeholder="" required>
                            <sup class="text-red-500 text-2xl ">*</sup>
                        </div>


                        <div class="flex mt-4">
                            <button id="submit" class="submit-btn px-4 py-1 mr-4 rounded">Save</button>
                            <button id="update" class="hidden submit-btn px-4 py-1 mr-4 rounded">Update</button>
                            {{-- <button class="delete-btn px-2 py-1 rounded" onclick="closePopup('gfilterModal')">Cancel </button> --}}
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
    var modal = document.getElementById("gfilterModal");
    // Get the button that opens the modal

    function openPopup(id) {

        
            document.getElementById('image1').style.display = "none";
            document.getElementById('update').style.display = "none";
            document.getElementById('add_title').style.display = "none";
            document.getElementById('up_title').style.display = "none";
            document.getElementById('submit').style.display = "none";

        if (id != 'addfilter') {
            document.getElementById('image1').style.display = "block";
            document.getElementById('update').style.display = "block";
            document.getElementById('add_title').style.display = "none";
            document.getElementById('up_title').style.display = "block";
            document.getElementById('submit').style.display = "none";
            var url = $('#url').val();
            $.ajax({
                type: "GET",
                url: url + "Gallery-filter/edit/" + id,
                galldata: "",
                success: function(galldata) {
                    $('#product_type').val(galldata.product_type);
                    $('#category_id').val(galldata.category_id);
                    $('#gf_id').val(galldata.id);
                    $('#image1').attr('src', url + 'storage/Galler_filter/' + galldata.image_name);
                    console.log(galldata);

                }
            });
        }
        else{
            $('#product_type').val("");
            $('#category_id').val("");

        document.getElementById('add_title').style.display = "block";
        document.getElementById('submit').style.display = "block";

        }
        document.getElementById('gfilterModal').style.display = "block";
    }

    function closePopup(id) {
        document.getElementById('gfilterModal').style.display = "none";
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
