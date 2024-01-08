@include('admin-side-nave')



<section class="home ">
    <div class="text table-nav ">
        <div class="overflow-menu">
            <div class="container-2">
                <div class="flex  items-center justify-between">
                    <div class="bord-head mr-2 whitespace-nowrap">Contct Details</div>

                    <button class="add-btn px-2 rounded text-2xl" onclick="openPopup('addcot')"><i
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
                        <th class="border border-slate-300 px-2 py-2">Contact No</th>
                        <th class="border border-slate-300 px-2 py-2">Whatsapp No</th>
                        <th class="border border-slate-300 px-2 py-2">Email Id</th>
                        <th class="border border-slate-300 px-2 w-20 ">Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($contacts as $ct_data)
                        <tr>
                            <td class="border border-slate-300 px-2 text-center ">{{ $ct_data->id }}</td>
                            <td class="border border-slate-300 px-2 text-center ">{{ $ct_data->contact_no }}</td>
                            <td class="border border-slate-300 px-2 text-center">{{ $ct_data->whatsapp_no }}</td>
                            <td class="border border-slate-300 px-2 text-center">{{ $ct_data->email_id }}</td>
                            <td class="border border-slate-300 px-2 text-right ">
                                <div class="flex justify-between items-center">
                                    <button onclick="openPopup({{ $ct_data->id }})"
                                        class="flex text-2xl  flex-nowrap items-center  edit-btn px-2  my-1 mr-2 rounded">
                                        <i class="fa-regular fa-pen-to-square pr-1"></i>
                                    </button>
                                    <a onclick="return confirm('Are you sure you want to delete this {{ $ct_data->id }} ?')"
                                        href="{{ asset('contact_details/delete/' . $ct_data->id) }}">
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
<div id="contactModal" class="modal inset-0 bg-gray-600 bg-opacity-50 fixed
top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">

    <!-- Modal content -->
    <div class="modal-content rounded-lg w-11/12 md:w-3/4 lg:w-1/2 ">

        <div class="p-2 ">
            <div class="flex justify-between">
                <div class="ml-4 text-xl" id="add_title"><label>Add Contact Details</label></div>
                <div class="ml-4 text-xl" id="up_title"><label>Update Contact Details</label></div>
                <div><span
                        class="close text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-2xl  px-2 ml-auto  "
                        onclick="closePopup()">&times;</span></div>
            </div>

            <div class="w-full  ">
                <form action="{{ asset('contact_details/create') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="ct_id" name="ct_id">
                    @csrf
                    <div class="rounded-lg  border-slate-400 p-4">
                        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4">

                            <div>
                                <label class=" mr-2 " for="">Contact No :</label>
                                <div class="flex my-2 ">
                                    <input id="contact_no"
                                        class="py-1.5 rounded w-full px-2 outline-0 border border-slate-300"
                                        type="number" placeholder="" name="contact_no" required>
                                    <sup class="text-red-500 text-2xl ">*</sup>
                                </div>
                            </div>
                            <div>
                                <label class=" mr-2 " for="">Whatsapp No :</label>
                                <div class="flex my-2 ">
                                    <input id="whatsapp_no"
                                        class="py-1.5 rounded w-full px-2 outline-0 border border-slate-300"
                                        type="number" placeholder="" name="whatsapp_no" required >
                                    <sup class="text-red-500 text-2xl ">*</sup>
                                </div>
                            </div>


                         
                            <div>
                                <label class=" mr-2" for="">Email Id :</label>
                                <div class="flex ">
                                    <input id="email_id"
                                        class="py-1.5 rounded w-full my-2 px-2 outline-0 border border-slate-300"
                                        type="email" placeholder="" name="email_id" required>
                                    <sup class="text-red-500 text-2xl ">*</sup>
                                </div>
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
    var modal = document.getElementById("contactModal");
    // Get the button that opens the modal

    function openPopup(id) {
            document.getElementById('add_title').style.display = "none";
            document.getElementById('up_title').style.display = "none";
            document.getElementById('update').style.display = "none";
            document.getElementById('submit').style.display = "none";
        if (id != 'addcot') {
            
            document.getElementById('up_title').style.display = "block";
            document.getElementById('update').style.display = "block";
            document.getElementById('submit').style.display = "none";
            var url = $('#url').val();
            $.ajax({
                type: "GET",
                url: url + "contact_details/edit/" + id,
                ct_data: "",
                success: function(ct_data) {
                    $('#contact_no').val(ct_data.contact_no);
                    $('#whatsapp_no').val(ct_data.whatsapp_no);
                    $('#email_id').val(ct_data.email_id);
                    $('#ct_id').val(ct_data.id);
                   

                }
            });
        }
        else{
            $('#contact_no').val("");
            $('#whatsapp_no').val("");
            $('#email_id').val("");

            document.getElementById('submit').style.display = "block";
            document.getElementById('add_title').style.display = "block";
        }
        document.getElementById('contactModal').style.display = "block";
    }

    function closePopup(id) {
        document.getElementById('contactModal').style.display = "none";
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
