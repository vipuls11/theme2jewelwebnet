
  @include('admin-side-nave')

  <section class="home ">
      <div class="text table-nav ">
        <div class="overflow-menu">
            <div class="container-2">
              <div class="flex  items-center justify-between">
                  <div class="bord-head mr-2 whitespace-nowrap">Add Role</div>
                  <button class="add-btn px-2 rounded text-2xl"><i class="fa-solid fa-plus"></i></button>
              </div>
            </div>
        </div>
      </div>
    <div class="overflow-menu">
      <div class="container-2">
          <table class="w-full border-collapse border border-slate-400 ">
              <thead >
                  <tr class="tablebody">
                      <th class="border border-slate-300 px-2 w-60 py-2  ">Name</th>
                      <th class="border border-slate-300 px-2 py-2">Display Name</th>
                      <th class="border border-slate-300 px-2 w-20 py-2">Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td class="border border-slate-300 px-2 text-center " >Admin</td>
                      <td class="border border-slate-300 px-2 text-center" >Administrator</td>
                      <td class="border border-slate-300 px-2 text-right " >
                        <div class="flex justify-between items-center">
                            <span ><button class="flex text-2xl flex-nowrap items-center  edit-btn px-2 py-1 my-1 mr-2 rounded">
                                <i class="fa-regular fa-pen-to-square pr-1"></i>
                              
                            </button></span>
                            <span ><button class="flex text-2xl flex-nowrap items-center  delete-btn px-2 py-1 my-1 rounded">
                                <i class="fa-solid fa-trash-can pr-1"></i>
                             
                            </button></span>
                        </div>
                      </td>
                  </tr>
                  <tr>
                    <td class="border border-slate-300 px-2 text-center " >User</td>
                    <td class="border border-slate-300 px-2 text-center" >User</td>
                    <td class="border border-slate-300 px-2 " >
                        <div class="flex justify-between items-center">
                            <span ><button class="flex flex-nowrap items-center text-2xl edit-btn px-2 py-1 my-1 mr-2 rounded">
                                <i class="fa-regular fa-pen-to-square pr-1"></i> 
                            </button></span>
                            <span ><button class="flex flex-nowrap items-center text-2xl  delete-btn px-2 py-1 my-1 rounded">
                                <i class="fa-solid fa-trash-can pr-1"></i>
                            </button></span>
                        </div>
                    </td>
                </tr>
                  
              </tbody>
          </table>
      </div>
    </div>
  </section>









