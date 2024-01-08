
  @include('admin-side-nave')

  <section class="home ">
      <div class="text table-nav ">
        <div class="overflow-menu">
            <div class="container-2">
              <div class="flex  items-center justify-between">
                  <div class="bord-head mr-2 whitespace-nowrap">Category Product</div>
                   <!-- Trigger/Open The Modal -->
                   <button class="add-btn px-2 rounded ml-20 relative text-2xl" id="myBtn" ><i class="fa-solid fa-plus"></i></button>
              </div>
            </div>
        </div>
      </div>
    <div class="overflow-menu">
      <div class="container-2">
          <table class="w-full border-collapse border border-slate-400 ">
              <thead >
                  <tr class="tablebody">
                      <th class="border border-slate-300 px-2 w-20 py-2  ">Id</th>
                      <th class="border border-slate-300 px-2 py-2">Category </th>
                      <th class="border border-slate-300 px-2 py-2">Category Type</th>
                      <th class="border border-slate-300 px-2 py-2">Subcategory Name</th>
                      <th class="border border-slate-300 px-2 py-2">Product</th>
                      <th class="border border-slate-300 px-2 w-20 py-2">Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td class="border border-slate-300 px-2  text-center " >1</td>
                      <td class="border border-slate-300 px-2  text-center" >Rings</td>
                      <td class="border border-slate-300 px-2  text-center" >Shop By Style</td>
                      <td class="border border-slate-300 px-2 text-center" >Gemstone</td>
                      <td class="border border-slate-300 px-2  text-center" >Fashiom Rose Gold Ring</td>
                      <td class="border border-slate-300 px-2 text-right " >
                        <div class="flex justify-between items-center">
                            <span ><button class="flex text-2xl flex-nowrap items-center  edit-btn px-2 py-1 my-1 mr-2 rounded">
                                <i class="fa-regular fa-pen-to-square pr-1"></i>
                            </button></span>
                            <span ><button class="flex text-2xl  flex-nowrap items-center  delete-btn px-2 py-1 my-1 rounded">
                                <i class="fa-solid fa-trash-can pr-1"></i>
                            </button></span>
                        </div>
                      </td>
                  </tr>
                  <tr>
                    <td class="border border-slate-300 px-2  text-center " >2</td>
                    <td class="border border-slate-300 px-2  text-center" >Earrings</td>
                    <td class="border border-slate-300 px-2  text-center" >Shop By Metal</td>
                    <td class="border border-slate-300 px-2 text-center" >Gemstone</td>
                    <td class="border border-slate-300 px-2  text-center" >Fashiom Rose Gold Ring</td>
                    <td class="border border-slate-300 px-2 text-right " >
                      <div class="flex justify-between items-center">
                          <span ><button class="flex flex-nowrap items-center  edit-btn px-2 py-1 my-1 mr-2 rounded">
                              <i class="fa-regular fa-pen-to-square pr-1"></i>
                              <h1>Edit</h1> 
                          </button></span>
                          <span ><button class="flex flex-nowrap items-center  delete-btn px-2 py-1 my-1 rounded">
                              <i class="fa-solid fa-trash-can pr-1"></i>
                              <h1>Delete</h1> 
                          </button></span>
                      </div>
                    </td>
                </tr>
                  
              </tbody>
          </table>
      </div>
    </div>
  </section>




                    <!-- The Modal -->
                    <div id="myModal" class="modal absolute inset-0 bg-gray-600 bg-opacity-50 fixed
                    top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">

                      <!-- Modal content -->
                      <div class="modal-content rounded-lg w-11/12 md:w-3/4 lg:w-2/5 ">
                          
                          <div class="p-2 ">
                          <div class="flex justify-between">
                              <div class="ml-4 text-xl"><label>Add Category Product</label></div>
                              <div><span class="close text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-2xl  px-2 ml-auto  " onclick="closePopup()" >&times;</span></div>
                          </div>
                          
                          <div class="w-full  ">
                          <form action="" >     
                              <div class="rounded-lg p-4">

                                 <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4">
                                          <div class="mb-2 ">
                                              <label  for="">Category :</label>
                                                  <div class="flex my-2">
                                                      <select  class="rounded w-full md:w-60 lg:w-60 p-2 border border-slate-300 outline-0" name="" id="">
                                                          <option value="">Select Category</option>
                                                          <option value="">Ring</option>
                                                          <option value="">Earring</option>
                                                      </select>
                                                      <sup class="text-red-500 text-2xl ">*</sup>
                                                  </div>
                                          </div>

                                          <div class="mb-2">
                                                  <label  for="">Category Types :</label>
                                                    <div class="flex my-2">
                                                        <select  class="rounded w-full md:w-60 lg:w-60 p-2 border border-slate-300 outline-0" name="" id="">
                                                          <option value="">Category Type</option>
                                                          <option value="">Ring</option>
                                                          <option value="">Earring</option>
                                                      </select>
                                                      <sup class="text-red-500 text-2xl ">*</sup>
                                                    </div>   
                                          </div>
                                 </div>


                                 
                                  <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-4">
                                           <div class="mb-2 ">
                                               <label  for="">SubCategory Name :</label>
                                                   <div class="flex my-2">
                                                       <select  class="rounded w-full md:w-60 lg:w-60 p-2 border border-slate-300 outline-0" name="" id="">
                                                           <option value="">Select Category</option>
                                                           <option value="">Ring</option>
                                                           <option value="">Earring</option>
                                                       </select>
                                                       <sup class="text-red-500 text-2xl ">*</sup>
                                                   </div>
                                           </div>
 
                                           <div class="mb-2">
                                                   <label  for="">Product :</label>
                                                   <div class="flex my-2">
                                                    <select  class="rounded w-full md:w-60 lg:w-60 p-2 border border-slate-300 outline-0" name="" id="">
                                                        <option value="">Choose Product</option>
                                                        <option value="">Ring</option>
                                                        <option value="">Earring</option>
                                                    </select>
                                                    <sup class="text-red-500 text-2xl ">*</sup>
                                                </div>   
                                           </div>
                                  </div>
                                  <div class="flex">
                                      <button class="submit-btn px-2 py-1 my-1 mr-4 rounded">Submit</button>
                                      <button class="delete-btn px-2 py-1 my-1 rounded">Cancel </button>
                                  </div>

                              </div>
                          </form>
                          </div>
                          </div>
                      </div>
                  </div>
 
<script>
  // Get the modal
  var modal = document.getElementById("myModal");
  
  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }
  function closePopup() {
      document.getElementById("myModal").style.display = "none";
   }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  </script>
















