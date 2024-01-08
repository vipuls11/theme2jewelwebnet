
  @include('admin-side-nave')

  <section class="home ">
   
      <div class="text table-nav ">
        <div class="overflow-menu">
        <div class="container-2">
          <div class="flex flex-nowrap items-center justify-between">
              <div class="bord-head mr-2 whitespace-nowrap">Bottom Banner Image</div>
              <button class="add-btn px-2 rounded text-2xl" onclick="openPopup('addbottombanner')"><i class="fa-solid fa-plus"></i></button>
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
                      <th class="border border-slate-300 px-2 w-20 py-2  ">Id</th>
                      <th class="border border-slate-300 px-2 py-2  ">Desktop Image path</th>
                      <th class="border border-slate-300 px-2 py-2  ">Desktop Image</th>
                      <th class="border border-slate-300 px-2 py-2">Mobile Image Path</th>
                      <th class="border border-slate-300 px-2 py-2">Mobile Image</th>
                      <th class="border border-slate-300 px-2 w-20 py-2">Action</th>
                  </tr>
              </thead>
              <tbody>

                @foreach($bottombannerdata as $bobdata)
                  <tr>
                      <td class="border border-slate-300 px-2 text-center " >{{$bobdata->id}}</td>
                      <td class="border border-slate-300 px-2 text-center " >{{$bobdata->desktopimg_path}}</td>
                      <td class="border border-slate-300 text-center w-20" ><img src="{{asset('storage/bottombanners/'.$bobdata->desktop_image)}}" alt="" style="width: 100%"></td>
                      <td class="border border-slate-300 px-2 text-center " >{{$bobdata->mobileimg_path}}</td>
                      <td class="border border-slate-300 text-center w-20" ><img src="{{asset('storage/bottombanners/'.$bobdata->mobile_image)}}" alt="" style="width: 100%"></td>
                      <td class="border border-slate-300 px-2 text-right " >
                        <div class="flex justify-center items-center">
                            <button onclick="openPopup({{$bobdata->id}})" class="flex text-2xl  flex-nowrap items-center  edit-btn px-2  my-1 mr-2 rounded">
                                <i class="fa-regular fa-pen-to-square pr-1"></i>
                            </button>
                            <a onclick="return confirm('Are you sure you want to delete this {{$bobdata->id}} ?')" href="{{asset('bottom-banner/delete/'.$bobdata->id)}}"><button class="flex text-2xl  flex-nowrap items-center  delete-btn px-2  my-1 rounded">
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


            
          
                <div id="bottombannerModal" class="modal absolute inset-0 bg-gray-600 bg-opacity-50 fixed
                top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full"> 

              
                 <div class="modal-content rounded-lg w-11/12 md:w-1/2 lg:w-1/3 ">
                        
                        <div class="p-2 ">
                        <div class="flex justify-between">
                            <div class="ml-4 text-xl" id="add_title"><label>Add bottom banner Image</label></div>
                            <div class="ml-4 text-xl hidden" id="up_title"><label>Update bottom banner Image</label></div>
                            <div><span class="close text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-2xl  px-2 ml-auto  " onclick="closePopup('myModal')" >&times;</span></div>
                        </div>
                        
                        <div class="w-full  ">
                        <form action="{{asset('bottom-banner/create')}}" method="POST" enctype="multipart/form-data" >
                            <input type="hidden" id="botban_id" name="botban_id">
                            @csrf
                                <div class="rounded-lg  border-slate-400 p-4">
                                    
                                    <label  class=" mr-2" for="">Desktop Banner Image :</label>
                                    <div class="flex my-2">
                                        <input class="p-1 w-full my-1 outline-0 border border-slate-300 rounded" type="file" name="filedesktop" >
                                        <sup class="text-red-500 text-2xl ">*</sup>
                                    </div>
                                    <img class="hidden border border-slate-300" id="image1" src="#" style="width: 100px;">
                                    <label  class=" mr-2" for="">Mobile Banner Image :</label>
                                    <div class="flex my-2">
                                        <input class="p-1 w-full my-1 outline-0 border border-slate-300 rounded" type="file" name="filemobile" >
                                        <sup class="text-red-500 text-2xl ">*</sup>
                                    </div>
                                    <img class="hidden border border-slate-300" id="image2" src="#" style="width: 100px;">

                                
                                        <div class="flex mt-4">
                                            <button id="submit" class="submit-btn px-4 py-1 mr-4 rounded">Save</button>
                                            <button id="update" class="hidden submit-btn px-4 py-1 mr-4 rounded">Update</button>
                                            {{-- <button class="cancel-btn px-2 py-1 rounded" onclick="closePopup('myModal')">Cancel </button> --}}
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
                      var modal = document.getElementById("bottombannerModal");
                      // Get the button that opens the modal
              
                      function openPopup(id){
                             document.getElementById('add_title').style.display = "none";
                             document.getElementById('up_title').style.display = "none";
                             document.getElementById('image1').style.display = "none";
                             document.getElementById('image2').style.display = "none";
                             document.getElementById('update').style.display = "none";
                             document.getElementById('submit').style.display = "none";
                          if(id!='addbottombanner')
                          {
                            document.getElementById('up_title').style.display = "block";
                             document.getElementById('image1').style.display = "block";
                             document.getElementById('image2').style.display = "block";
                             document.getElementById('update').style.display = "block";
                             document.getElementById('submit').style.display = "none";
                              var url=$('#url').val();
                              $.ajax({
                              type: "GET",
                              url: url+"bottom-banner/edit/"+id,
                              bobdata: "",
                              success: function(bobdata) {
                                  $('#botban_id').val(bobdata.id);
                                  $('#image1').attr('src', url+'storage/bottombanners/'+bobdata.desktop_image);
                                  console.log(bobdata);
                                  $('#image2').attr('src', url+'storage/bottombanners/'+bobdata.mobile_image);
                                  console.log(bobdata);
                              }
                      });
                          }
                          else
                          {
                            document.getElementById('add_title').style.display = "block";
                            document.getElementById('submit').style.display = "block";
                          }
                          document.getElementById('bottombannerModal').style.display = "block";
                      }
                      function closePopup(id) {
                          document.getElementById('bottombannerModal').style.display = "none";
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
              
              
              
              



