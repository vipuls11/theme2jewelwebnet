
  @include('admin-side-nave')
  
  <section class="home ">
   
      <div class="text table-nav ">
        <div class="overflow-menu">
        <div class="container-2">
          <div class="flex flex-nowrap items-center justify-between">
              <div class="bord-head mr-2 whitespace-nowrap"> Home Page Heading and Content </div>
                 <!-- Trigger/Open The Modal -->
                 <button class="add-btn px-2 rounded ml-20 relative text-2xl" onclick="openPopup('add')" ><i class="fa-solid fa-plus"></i></button>
          </div>
        </div>
        </div>
      </div>
      
      
      <div class="overflow-menu">
      <div class="container-2">
        @if(session()->has('msg'))
        <div class="bg-green-500 py-2 text-white text-center text-2xl font-semibold " id="msg" style="display: none;" >
            {{session('msg')}}
        </div>
        @endif
          <table class="w-full border-collapse border border-slate-400 ">
              <thead >
                  <tr class="tablebody">
                      <th class="border border-slate-300 px-2py-2 w-20 ">Id</th>
                      <th class="border border-slate-300 px-2 py-2 w-60 ">Heading</th>
                      <th class="border border-slate-300 px-2 py-2  ">Content</th>
                      <th class="border border-slate-300 px-2 w-20 py-2">Action</th>
                  </tr>
              </thead>
             <tbody>
                @foreach($homeheadcontent_data as $hc_data)
                  <tr>
                      <td class="border border-slate-300 px-2 text-center " >{{$hc_data->id}}</td>
                      <td class="border border-slate-300 px-2 text-center " >{{$hc_data->heading}}</td>
                      <td class="border border-slate-300 px-2 text-center " >{{$hc_data->content}}</td>
                      <td class="border border-slate-300 px-2 text-right " >
                        <div class="flex justify-between items-center">
                           
                          
                            <button onclick="openPopup({{$hc_data->id}})" class="text-2xl flex flex-nowrap items-center  edit-btn px-2   my-1 mr-2 rounded" >
                                <i class="fa-regular fa-pen-to-square pr-1"></i>
                                
                            </button>
                            {{-- <a onclick="return confirm('Are you sure you want to delete this {{$hc_data->id}} ?')" href="{{asset('home_heading_content/delete/'.$hc_data->id)}}">
                                <button class="text-2xl flex flex-nowrap items-center  delete-btn px-2   my-1 rounded">
                                <i class="fa-solid fa-trash-can pr-1"></i>
                            </button></a> --}}
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
               <div id="myModal" class="modal absolute inset-0 bg-gray-600 bg-opacity-50 fixed
               top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full"> 

                    <!-- Modal content -->
                 <div class="modal-content rounded-lg w-11/12 md:w-1/2 lg:w-1/3 ">
                        
                        <div class="p-2 ">
                        <div class="flex justify-between">
                            <div class="ml-4 text-xl" id="ad_title"><label>Add Heading and Content</label></div>
                            <div class="ml-4 text-xl hidden" id="up_title"><label>Update Heading and Content</label></div>
                            <div><span class="close text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-2xl  px-2 ml-auto  " onclick="closePopup('myModal')" >&times;</span></div>
                        </div>
                        
                        <div class="w-full  ">
                        <form action="{{asset('home_heading_content/create')}}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <input type="hidden" id="hc_id" name="hc_id">
                                <div class="rounded-lg  border-slate-400 p-4">
                                    <label  for="">Heading :</label>
                                    <div class="flex my-2">
                                        <input id="heading" class="py-1 rounded w-full px-2 outline-0 border border-slate-300 capitalize" type="text" name="heading" placeholder="" required>
                                        <sup class="text-red-500 text-2xl ">*</sup>
                                    </div>
                            
                                    <div ><label class=" mr-2 " for="">Content :</label></div>
                                    <div class="py-2">
                                        <div class="flex">
                                            <textarea  name="content" id="content" cols="30" rows="2" class="py-1 rounded w-full  px-2 outline-0 border border-slate-300" required></textarea>
                                            <sup class="text-red-500 text-2xl ">*</sup>
                                        </div>
                                    </div>
                                        <div class="flex mt-4">
                                            <button id="submit" class="submit-btn px-4 py-1 mr-4 rounded">Save</button>
                                            <button id="update" class="hidden submit-btn px-4 py-1 mr-4 rounded">Update</button>
                                           
                                        </div>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
                </div> 


                

                
              

               


            <input type="hidden" value="{{asset('/')}}" id="url">        
  <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        // Get the button that opens the modal

        function openPopup(id){
            document.getElementById('update').style.display = "none";
                document.getElementById('submit').style.display = "none";
                document.getElementById('ad_title').style.display = "none";
                document.getElementById('up_title').style.display = "none";
            if(id!='add')
            {
                document.getElementById('up_title').style.display = "block";
                document.getElementById('update').style.display = "block";
                document.getElementById('submit').style.display = "none";
                var url=$('#url').val();
                $.ajax({
                type: "GET",
                url: url+"home_heading_content/edit/"+id,
                hc_data: "",
                success: function(hc_data) {
                    $('#heading').val(hc_data.heading);
                    $('#content').val(hc_data.content);
                    $('#hc_id').val(hc_data.id);
                }
        });
            }
            
        else{
            
            $('#heading').val("");
            $('#content').val("");
            document.getElementById('submit').style.display = "block";
            document.getElementById('ad_title').style.display = "block";

        }
        document.getElementById('myModal').style.display = "block";

        }

        function closePopup(id) {
            document.getElementById('myModal').style.display = "none";
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



