
  @include('admin-side-nave')

  <section class="home ">
   
      <div class="text table-nav ">
        <div class="overflow-menu">
        <div class="container-2">
          <div class="flex flex-nowrap items-center justify-between">
              <div class="bord-head mr-2 whitespace-nowrap">Orders Details</div>
              <button class="add-btn px-2 rounded">Excle</button>
          </div>
        </div>
        </div>
      </div>
      <div class="overflow-menu">
      <div class="container-2">
       
          <table class="w-full border-collapse border border-slate-400 ">
              <thead >
                  <tr class="tablebody">
                      <th class="border border-slate-300 px-2 w-20 py-2  ">Order Id</th>
                      <th class="border border-slate-300 px-2 py-2">Customer Name</th>
                      <th class="border border-slate-300 px-2 py-2">Mobile No</th>
                      <th class="border border-slate-300 px-2 py-2">Date</th>
                      <th class="border border-slate-300 px-2 py-2">Status</th>
                      <th class="border border-slate-300 px-2 py-2">Proceed</th>
                      <th class="border border-slate-300 px-2 w-52 py-2">Action</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td class="border border-slate-300 px-2 text-center " >1</td>
                      <td class="border border-slate-300 px-2 text-center" >Pradeep</td>
                      <td class="border border-slate-300 px-2 text-center" >4655655556</td>
                      <td class="border border-slate-300 px-2 text-center" >16/11/22</td>
                      <td class="border border-slate-300 px-2 text-center" >Approval</td>
                      <td class="border border-slate-300 px-2 text-center" ><button class="proceed-btn px-2 py-1 my-1 rounded">Proceed</button></td>
                      <td class="border border-slate-300 px-2 text-right " >
                          <div class="flex flex-nowrap justify-between items-center">
                            <span ><button class="text-2xl   flex flex-nowrap items-center view-btn px-2 py-1 my-1 rounded mr-2">
                                            <i class="fa-regular fa-eye pr-1"></i>
                                     </button>
                            </span>
                            <span ><button class="flex  text-2xl flex-nowrap items-center  delete-btn px-2 py-1 my-1 rounded">
                                <i class="fa-regular fa-file-excel pr-1"></i>
                            </button></span>
                          </div>
                      </td>
                  </tr>
                  <tr>
                    <td class="border border-slate-300 px-2 text-center " >2</td>
                    <td class="border border-slate-300 px-2 text-center" >Vipul</td>
                    <td class="border border-slate-300 px-2 text-center" >4655655556</td>
                    <td class="border border-slate-300 px-2 text-center" >16/11/22</td>
                    <td class="border border-slate-300 px-2 text-center" >Approval</td>
                    <td class="border border-slate-300 px-2 text-center" ><button class="proceed-btn px-2 py-1 my-1 rounded">Proceed</button></td>
                    <td class="border border-slate-300 px-2 text-right " >
                        <div class="flex flex-nowrap justify-between items-center">
                            <span ><button class="text-2xl   flex flex-nowrap items-center view-btn px-2 py-1 my-1 rounded mr-2">
                                          <i class="fa-regular fa-eye pr-1"></i>
                                   </button>
                          </span>
                            <span ><button class="flex flex-nowrap items-center  delete-btn px-2 py-1 my-1 rounded">
                              <i class="fa-regular fa-file-excel pr-1"></i>
                              <h1>Excel</h1> 
                          </button></span>
                        </div>
                    </td>
                </tr>
                
                  
              </tbody>
          </table>
          </div>
      </div>
   
  </section>









