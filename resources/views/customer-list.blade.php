
  @include('admin-side-nave')

    <section class="home ">
        
        <div class="text table-nav ">
            <div class="overflow-menu">
                <div class="container-2">
                  <div class="flex  items-center justify-between">
                      <div class="bord-head mr-2 whitespace-nowrap">Customer List</div>
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
                        <th class="border border-slate-300  px-2 w-20 py-2 ">Order Id</th>
                        <th class="border border-slate-300  px-2 py-2">Customer Name</th>
                        <th class="border border-slate-300  px-2 w-20 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-slate-300  px-2 text-center " >1</td>
                        <td class="border border-slate-300  px-2 text-center" >Pradeep</td>
                        <td class="border border-slate-300 px-2 " >
                            <div class="flex  justify-center">
                                <span ><button class="  flex text-2xl  flex-nowrap items-center view-btn px-2 py-1 my-1 rounded mr-2">
                                    <i class="fa-regular fa-eye pr-1"></i>
                                </button>
                                </span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-slate-300 text-center  px-2" >2</td>
                        <td class="border border-slate-300 text-center  px-2" >Vipul</td>
                        <td class="border border-slate-300   px-2" >
                            <div class="flex  justify-center">
                                <span ><button class="  flex text-2xl  flex-nowrap items-center view-btn px-2 py-1 my-1 rounded mr-2">
                                    <i class="fa-regular fa-eye pr-1"></i>
                                </button>
                                </span>
                            </div>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
      </div>
    </div>
    </section>









