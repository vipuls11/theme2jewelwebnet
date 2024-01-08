@include('admin-side-nave')

<style>
    .paginat a:hover {
        color: #fff;
        border-color: #06233d;
        background-color: #06233d;
    }
</style>

@php
    $Categories = \App\Models\Category::all();
@endphp
<section class="home ">
    <div class="text table-nav ">
        <div class="overflow-menu">
            <div class="container-2">
                <div class="flex  items-center justify-between">
                    <div class="bord-head mr-2 whitespace-nowrap">Subcategory </div>

                    <!-- Trigger/Open The Modal -->
                    <button class="add-btn px-2 rounded text-2xl" onclick="openPopup('addctype')"><i
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
                        <th class="border border-slate-300 px-2 py-2">Category </th>
                        <th class="border border-slate-300 px-2 py-2">Category Type</th>
                        <th class="border border-slate-300 px-2 py-2">Subcategory</th>
                        <th class="border border-slate-300 px-2 py-2 w-60">Subcategory Image Path</th>
                        <th class="border border-slate-300 px-2 py-2 ">Subcategory Image</th>
                        <th class="border border-slate-300 px-2 w-20 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subc_data as $subctdata)
                        <tr>
                            <td class="border border-slate-300 px-2  text-center ">{{ $subctdata->id }}</td>
                            <td class="border border-slate-300 px-2  text-center ">
                                {{ $subctdata->category->category_name ?? ' ' }}</td>
                            <td class="border border-slate-300 px-2  text-center">
                                {{ $subctdata->categorytype->category_type ?? ' ' }}</td>
                            <td class="border border-slate-300 px-2  text-center">{{ $subctdata->subcategory_name }}
                            </td>
                            <td class="border border-slate-300 px-2  text-center">
                                {{ $subctdata->subcategory_image_path }}</td>
                            <td class="border border-slate-300 text-center w-20"><img
                                    src="{{ asset('storage/files/' . $subctdata->subcategory_image) }}" alt=""
                                    style="width: 100%; height:100%;"></td>
                            <td class="border border-slate-300 px-2 text-right ">
                                <div class="flex justify-between items-center">
                                    <button onclick="openPopup({{ $subctdata->id }})"
                                        class="text-2xl flex flex-nowrap items-center  edit-btn px-2  my-1 mr-2 rounded">
                                        <i class="fa-regular fa-pen-to-square pr-1"></i>
                                    </button>
                                    <a onclick="return confirm('Are you sure you want to delete this {{ $subctdata->subcategory_name }} ?')"
                                        href="{{ asset('subcategory/delete/' . $subctdata->id) }}">
                                        <button
                                            class="text-2xl flex flex-nowrap items-center  delete-btn px-2  my-1 rounded">
                                            <i class="fa-solid fa-trash-can pr-1"></i>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="paginat">
                {{ $subc_data->links() }}
            </div>
        </div>
    </div>
</section>


<div id="ctypeModal" class="modal absolute inset-0 bg-gray-600 bg-opacity-50 fixed
top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="modal-content rounded-lg w-11/12 md:w-1/2 lg:w-1/3">

        <div class="p-2 ">
            <div class="flex justify-between">
                <div class="ml-4 text-xl" id="add_title"><label>Add Subcategory</label></div>
                <div class="ml-4 text-xl hidden " id="up_title"><label>Update Subcategory</label></div>
                <div><span
                        class="close text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-2xl  px-2 ml-auto  "
                        onclick="closePopup('ctypeModal')">&times;</span></div>
            </div>

            <div class="w-full  ">
                <form action="{{ asset('subcategory/create') }}" method="POST" enctype="multipart/form-data">
                    <div class="rounded-lg p-4">
                        <input type="hidden" id="subctype_id" name="subctype_id">
                        @csrf
                        <label for="">Select Category :</label>
                        <div class="flex my-2">
                            <select id="category_name" class="w-full outline-0 rounded p-1.5 border border-slate-300"
                                name="category_name">
                                <option value="">None...</option>
                                @foreach ($Categories as $cate_data)
                                    <option value="{{ $cate_data->id }}">{{ $cate_data->category_name }}</option>
                                @endforeach
                            </select>
                            <sup class="text-red-500 text-2xl ">*</sup>
                        </div>

                        <label for="">Select Category Type :</label>
                        <div class="flex my-2">
                            <select id="category_type_id" class="w-full rounded p-1.5 border border-slate-300"
                                name="category_type_id">
                                <option value="">None...</option>
                            </select>
                            <sup class="text-red-500 text-2xl ">*</sup>
                        </div>
                        <input type="hidden" id="url" value="{{ asset('/') }}">
                        <script>
                            $('#category_name').change(function() {
                               
                                var catg = $(this).val();
                                var url = $('#url').val();
                                $.ajax({
                                    url: url + 'categorytype/' + catg,
                                    type: 'get',
                                    datatype: 'json',
                                    success: function(result) {
                                        $('#category_type_id').empty()
                                        $('#category_type_id').append($('<option>').val("").text("Select Category Type"));
                                        for (item in result) {
                                            $('#category_type_id').append($('<option>').val(result[item].id).text(result[
                                                    item]
                                                .category_type));

                                        }
                                    }
                                });

                            });
                        </script>

                        <label for="">Enter Subcategory :</label>
                        <div class="flex my-2">
                            <input id="subcategory_name"
                                class="py-1 rounded w-full px-2 outline-0 border border-slate-300 capitalize" type="text"
                                placeholder="" name="subcategory_name" >
                            <sup class="text-red-500 text-2xl ">*</sup>
                        </div>
                        <label for="">Subcategory Image :</label>
                        <div class="flex my-2   ">
                            <input class="p-1 outline-0 border border-slate-300 w-full rounded" type="file"
                                name="file" >
                            <sup class="text-red-500 text-2xl ">*</sup>
                        </div>
                        <img class="hidden border border-slate-300" id="image" src="#" style="width: 80px;">

                        <div class="flex mt-4">
                            <button id="submit" class="submit-btn px-4 py-1 my-1 mr-4 rounded">Save</button>
                            <button id="update" class="hidden submit-btn px-4 py-1 my-1 mr-4 rounded">Update</button>
                            {{-- <button class="cancel-btn px-2 py-1  my-1 rounded " onclick="closePopup('ctypeModal')"> Cancel </button> --}}
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
    var modal = document.getElementById("ctypeModal");
    // Get the button that opens the modal

    function openPopup(id) {
        
        document.getElementById('image').style.display = "none";
            document.getElementById('add_title').style.display = "none";
            document.getElementById('up_title').style.display = "none";
            document.getElementById('update').style.display = "none";
            document.getElementById('submit').style.display = "none";
        if (id != 'addctype') {
            document.getElementById('image').style.display = "block";
            document.getElementById('add_title').style.display = "none";
            document.getElementById('up_title').style.display = "block";
            document.getElementById('update').style.display = "block";
            document.getElementById('submit').style.display = "none";
            var url = $('#url').val();
            $.ajax({
                type: "GET",
                url: url + "subcategory/edit/" + id,
                subctdata: "",
                success: function(subctdata) {
                    $('#category_name').val(subctdata.category_id);
                    $('#category_type_id').val(subctdata.category_type_id);
                    $('#subcategory_name').val(subctdata.subcategory_name);
                    $('#subctype_id').val(subctdata.id);
                    $('#image').attr('src', url + 'storage/files/' + subctdata.subcategory_image);
                    console.log(subctdata);
                }
            });
        }
        else
        {
            $('#category_name').val("");
            $('#category_type_id').val("");
            $('#subcategory_name').val("");

        document.getElementById('add_title').style.display = "block";
        document.getElementById('submit').style.display = "block";

        }
        document.getElementById('ctypeModal').style.display = "block";
    }

    function closePopup(id) {
        document.getElementById('ctypeModal').style.display = "none";
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
