
@include('admin-side-nave')

<section class="home ">
 
    <div class="text table-nav ">
      <div class="overflow-menu">
      <div class="container-2">
        <div class="flex flex-nowrap items-center justify-between">
            <div class="bord-head mr-2 whitespace-nowrap">Swiper Slider</div>
            <button class="add-btn px-2 rounded text-2xl" onclick="openPopup('swiper')"><i class="fa-solid fa-plus"></i></button>
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
                    <th class="border border-slate-300 px-2 py-2  ">Swiper Image Name</th>
                    <th class="border border-slate-300 px-2 py-2  ">Image Path</th>
                    <th class="border border-slate-300 px-2 py-2 w-20">Image</th>
                    <th class="border border-slate-300 px-2 py-2 w-60">Swiper Content</th>
                    <th class="border border-slate-300 px-2 py-2 ">Price</th>
                    <th class="border border-slate-300 px-2 w-20 py-2">Action</th>
                </tr>
            </thead>
           <tbody>

             @foreach($swiperdata as $swipdata)
                <tr>
                    <td class="border border-slate-300 px-2 text-center " >{{$swipdata->id}}</td>
                    <td class="border border-slate-300 px-2 text-center " >{{$swipdata->image_name}}</td>
                    <td class="border border-slate-300 px-2 text-center " >{{$swipdata->image_path}}</td>
                    <td class="border border-slate-300 text-center " ><img src="{{asset('storage/Sliders/'.$swipdata->image_name)}}" alt="" style="width: 100%"></td>
                    <td class="border border-slate-300 px-2 text-center " >{{$swipdata->swiper_content}}</td>
                    <td class="border border-slate-300 px-2 text-center" >{{$swipdata->swiper_price}}</td>
                    <td class="border border-slate-300 px-2 text-right " >
                      <div class="flex justify-between items-center">
                          <button onclick="openPopup({{$swipdata->id}})" class="flex text-2xl  flex-nowrap items-center  edit-btn px-2  my-1 mr-2 rounded">
                              <i class="fa-regular fa-pen-to-square pr-1"></i>
                          </button>
                          <a onclick="return confirm('Are you sure you want to delete this {{$swipdata->id}} ?')" href="{{asset('swiper-slider/delete/'.$swipdata->id)}}">
                            <button class="flex text-2xl  flex-nowrap items-center  delete-btn px-2  my-1 rounded">
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


          

   
              <div id="Swipermodal" class="modal absolute inset-0 bg-gray-600 bg-opacity-50 fixed
              top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full"> 

           
               <div class="modal-content rounded-lg w-11/12 md:w-1/2 lg:w-1/3 ">
                      
                      <div class="p-2 ">
                      <div class="flex justify-between">
                          <div class="ml-4 text-xl" id="add_title"><label>Add Swiper Details </label></div>
                          <div class="ml-4 text-xl hidden" id="up_title"><label>Update Swiper Details </label></div>
                          <div><span class="close text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-2xl  px-2 ml-auto  " onclick="closePopup('Spotlightmodal')" >&times;</span></div>
                      </div>
                      
                      <div class="w-full  ">
                      <form action="{{asset('swiper-slider/create')}}" method="POST" enctype="multipart/form-data" >
                          @csrf
                          <input type="hidden" id="swip_id" name="swip_id">

                              <div class="rounded-lg  border-slate-400 p-4">
                                  
                                  <label  for="">Swiper Image :</label>
                                  <div class="flex my-2">
                                      <input class="p-1 w-full outline-0 border border-slate-300 rounded" type="file" name="file" >
                                      <sup class="text-red-500 text-2xl ">*</sup>
                                    </div>
                                    <img class="hidden border border-slate-300" id="image" src="#" style="width: 80px;">

                                    <label for="">Swiper Content :</label>
                                  <div class="flex my-2">
                                      <input id="swiper_content" class="py-1 rounded w-full px-2 outline-0 border border-slate-300 capitalize" type="text" name="swiper_content" placeholder="" required>
                                      <sup class="text-red-500 text-2xl ">*</sup>
                                  </div>

                                  <label for="">Price :</label>
                                  <div class="flex my-2">
                                    <input id="swiper_price" class="py-1 rounded w-full px-2 outline-0 border border-slate-300" type="text" name="swiper_price" placeholder="" required>
                                    <sup class="text-red-500 text-2xl ">*</sup>
                                </div>

                                      <div class="flex mt-4">
                                          <button id="submit" class="submit-btn px-4 py-1 mr-4 rounded">Save</button>
                                          <button id="update" class="hidden submit-btn px-4 py-1 mr-4 rounded">Update</button>
                                          {{-- <button class="delete-btn px-2 py-1 rounded" onclick="closePopup('Swipermodal')">Cancel </button> --}}
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
                    var modal = document.getElementById("Swipermodal");
                    // Get the button that opens the modal
            
                    function openPopup(id){
                        
                            document.getElementById('add_title').style.display = "none";
                            document.getElementById('up_title').style.display = "none";
                            document.getElementById('image').style.display = "none";
                            document.getElementById('update').style.display = "none";
                            document.getElementById('submit').style.display = "none";
                        if(id!='swiper')
                        {
                            document.getElementById('up_title').style.display = "block";
                            document.getElementById('image').style.display = "block";
                            document.getElementById('update').style.display = "block";
                            document.getElementById('submit').style.display = "none";
                            var url=$('#url').val();
                            $.ajax({
                            type: "GET",
                            url: url+"swiper-slider/edit/"+id,
                            swipdata: "",
                            success: function(swipdata) {
                                $('#swiper_content').val(swipdata.swiper_content);
                                $('#swiper_price').val(swipdata.swiper_price);
                                $('#swip_id').val(swipdata.id);
                                $('#image').attr('src', url+'storage/Sliders/'+swipdata.image_name);
                                console.log(swipdata);
                            }
                    });
                        }
                        else{
                                 $('#swiper_content').val("");
                                 $('#swiper_price').val("");

                            document.getElementById('submit').style.display = "block";
                            document.getElementById('add_title').style.display = "block";

                        }
                        document.getElementById('Swipermodal').style.display = "block";
                    }
                    function closePopup(id) {
                        document.getElementById('Swipermodal').style.display = "none";
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
            
            
            
            



