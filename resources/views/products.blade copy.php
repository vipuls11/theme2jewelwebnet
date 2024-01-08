@include('admin-side-nave')
@php
    $Categories = \App\Models\Category::all();
    $dimond_cuts = \App\Models\Diamondcuts::all();
    $dimond_shape = \App\Models\Diamondshape::all();
    $dimond_qua = \App\Models\Diamondquality::all();
    $metal_purity = \App\Models\Metalpurity::all();
    $ring_sizes = \App\Models\Ringsize::all();
    $metals = \App\Models\Metal::all();
    $colorstones = \App\Models\Colorstone::all();
    $colorstonequas = \App\Models\Colorstonequality::all();
    $silverpurities = \App\Models\Silverpurity::all();
    $silvertypes = \App\Models\Silvertype::all();
    $Platinums = \App\Models\Platinum::all();
    $Platinumpuritys = \App\Models\Platinumpurity::all();
@endphp
<section class="home ">
    <div class="text table-nav ">
        <div class="overflow-menu">
            <div class="container-2">
                <div class="flex  items-center justify-between">
                    <div class="bord-head mr-2 whitespace-nowrap">Products</div>
                    <button class="add-btn px-2 rounded ml-20 relative text-2xl " onclick="openPopup('add')"><i
                            class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-menu">
        <div class="container-2">
            <table class="w-full border-collapse border border-slate-400 ">
                <thead>
                    <tr class="tablebody">
                        <th class="border border-slate-300 px-2 w-20 py-2  ">Id</th>
                        <th class="border border-slate-300 px-2 py-2  "> SKU</th>
                        <th class="border border-slate-300 px-2 py-2">Name</th>
                        <th class="border border-slate-300 px-2 py-2">COLLECTION</th>
                        <th class="border border-slate-300 px-2 py-2">RING SIZE</th>
                        <th class="border border-slate-300 px-2 py-2">METAL</th>
                        <th class="border border-slate-300 px-2 py-2">METAL PURITY</th>
                        <th class="border border-slate-300 px-2 py-2">METAL WT</th>
                        <th class="border border-slate-300 px-2 py-2">STATUS</th>
                        <th class="border border-slate-300 px-2 w-20 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-slate-300 px-2  text-center ">1</td>
                        <td class="border border-slate-300 px-2  text-center ">JES62090F</td>
                        <td class="border border-slate-300 px-2  text-center">Rings</td>
                        <td class="border border-slate-300 px-2  text-center">Bar Collection</td>
                        <td class="border border-slate-300 px-2  text-center">7</td>
                        <td class="border border-slate-300 px-2  text-center">#</td>
                        <td class="border border-slate-300 px-2  text-center">pure</td>
                        <td class="border border-slate-300 px-2  text-center">10</td>
                        <td class="border border-slate-300 px-2 ">

                            <label class="flex justify-center relative items-center cursor-pointer text-center ">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-gray-200  flex justify-center relative items-center text-center
                          peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer 
                          dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white 
                          after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white 
                          after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all
                          dark:border-gray-600 peer-checked:bg-blue-600 bg-gray-300 ">
                                </div>

                            </label>
                        </td>
                        <td class="border border-slate-300 px-2 text-right ">
                            <div class="flex justify-between items-center">
                                <span><button
                                        class="flex text-2xl  flex-nowrap items-center  edit-btn px-2 py-1 my-1 mr-2 rounded">
                                        <i class="fa-regular fa-pen-to-square pr-1"></i>
                                    </button></span>
                                <span><button
                                        class="flex text-2xl  flex-nowrap items-center  delete-btn px-2 py-1 my-1 rounded">
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



<div id="Modal" class="modal inset-0 bg-gray-600 bg-opacity-50 fixed
top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal   md:h-full">
    
    
    <div class="modal-content rounded-lg md:w-11/12 lg:w-10/12  ">
    
            <div class="p-2 ">
                <div class="flex justify-between border-b">
                    <div class="ml-4 text-xl"><label>ADD PRODUCTS</label></div>
                    <div><span
                            class="close text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-2xl  px-2 ml-auto  "
                            onclick="closePopup('Modal')">&times;</span></div>
                </div>
    
                <div class="w-full ">
                    <form action="{{ asset('products/create') }}" method="POST" enctype="multipart/form-data">
                        <div class=" overflow-x-hidden overflow-y-auto h-[400px] md:h-[800px] lg:h-[400px]">
                        <div class="rounded-lg p-4">
                            <input type="hidden" id="ctype_id" name="ctype_id">
                            @csrf
    
                            <div class=" mb-5 grid md:grid-cols-4 lg:grid-cols-4 gap-4">
                            
                                <div class="md:col-span-2 lg:col-span-1">
                                    <div class="flex flex-col ">
                                        <label class=" my-2" for="">SKU # :</label>
                                        <div class="flex w-full">
                                            <input id="sku"
                                                class="py-1.5 rounded w-full  px-2 outline-0 border border-slate-300" type="text"
                                                placeholder="" name="sku">
                                            <sup class="text-red-500 text-2xl ">*</sup>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 ">
                                    <div class="flex flex-col ">
                                        <label class=" my-2" for="">PRODUCT NAME :</label>
                                        <div class="flex w-full">
                                            <input id="product_name"
                                                class="py-1.5 rounded w-full  px-2 outline-0 border border-slate-300" type="text"
                                                placeholder="" name="product_name">
                                            <sup class="text-red-500 text-2xl ">*</sup>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="grid md:grid-cols-2 lg:grid-cols-4  gap-4">
                                
                                <div>
                                    <label for="">CATEGORY :</label>
                                    <div class="flex my-2">
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
                                    </div>
                                </div>
                                <div>
                                    <label for="">CATEGORY TYPE :</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <select id="cattype" class="w-full  rounded p-2 border border-slate-300"
                                                name="">
                                                <option value="">None...</option>
                                            </select>
                                        </div>
                                        <sup class="text-red-500 text-2xl ">*</sup>
                                    </div>
                                    <input type="hidden" id="url" value="{{ asset('/') }}">
                                    <script>
                                        $('#category_id').change(function() {
                                            var catg = $(this).val();
                                            var url = $('#url').val();
                                            $.ajax({
                                                url: url + 'category-types/' + catg,
                                                type: 'get',
                                                datatype: 'json',
                                                success: function(result) {
                                                    $('#cattype').empty()
                                                    $('#cattype').append($('<option>').val("").text("Select Category Type"));
                                                    for (item in result) {
                                                        $('#cattype').append($('<option>').val(result[item].id).text(result[item]
                                                            .category_type));
                                                    }
                                                }
                                            });
    
                                        });
                                    </script>
    
                                </div>
                                <div>
                                    <label for="">SUB CATEGORY :</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <select id="subcat_id" class="w-full  rounded p-2 border border-slate-300"
                                                name="subcat_id">
    
                                                <option value="">None...</option>
                                            </select>
                                        </div>
                                        <sup class="text-red-500 text-2xl ">*</sup>
                                    </div>
    
                                    <input type="hidden" id="url" value="{{ asset('/') }}">
                                    <script>
                                        $('#cattype').change(function() {
                                            var cat_type = $(this).val();
                                            var url = $('#url').val();
                                            $.ajax({
                                                url: url + 'subcategory-types/' + cat_type,
                                                type: 'get',
                                                datatype: 'json',
                                                success: function(result) {
                                                    $('#subcat_id').empty()
                                                    $('#subcat_id').append($('<option>').val("").text("Select Subcategory"));
                                                    for (item in result) {
                                                        $('#subcat_id').append($('<option>').val(result[item].id).text(result[item]
                                                            .subcategory_name));
                                                    }
                                                }
                                            });
    
                                        });
                                    </script>
                                </div>
    
    
                                <div>
                                    <label for="">COLLECTION :</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <input id="collection"
                                                class="py-1.5 rounded w-full px-2 outline-0 border border-slate-300"
                                                type="text" placeholder="" name="collection">
                                        </div>
                                        {{-- <sup class="text-red-500 text-2xl ">*</sup> --}}
                                    </div>
                                </div>
    
                               
                                <div>
                                    <label for="">Gender:</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <select id="gender" class="w-full  rounded p-2 border border-slate-300"
                                                name="gender">
                                                <option value="">None...</option>
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
    
    
                                <div>
                                    <label for="">METAL :</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <select id="material_id" class="w-full  rounded p-2 border border-slate-300"
                                                name="material_id">
                                                <option value="">None...</option>
                                                @foreach ($metals as $met)
                                                    <option value="{{ $met->id }}">{{ $met->metal_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
    
                                <div>
                                    <label for="">RING SIZE :</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <select id="ring_size_id" class="w-full  rounded p-2 border border-slate-300"
                                                name="ring_size_id">
                                                <option value="">None...</option>
                                                @foreach ($ring_sizes as $size_tdata)
                                                    <option value="{{ $size_tdata->id }}">{{ $size_tdata->ring_size }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
    
                                <div>
                                    <label for="">GOLD :</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <input id="category_type"
                                                class="py-1.5 rounded w-full px-2 outline-0 border border-slate-300"
                                                type="text" placeholder="" name="category_type">
                                        </div>
                                        {{-- <sup class="text-red-500 text-2xl ">*</sup> --}}
                                    </div>
                                </div>
    
    
    
                                <div>
                                    <label for="">GOLD KT :</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <select id="metal1_purity_id" class="w-full  rounded p-2 border border-slate-300"
                                                name="metal1_purity_id">
                                                <option value="">None...</option>
                                                @foreach ($metal_purity as $puritydata)
                                                    <option value="{{ $puritydata->id }}">{{ $puritydata->purity_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
    
                                <div>
                                    <label for="">GOLD WEIGHT :</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <input id="metal1_wt"
                                                class="py-1.5 rounded w-full px-2 outline-0 border border-slate-300"
                                                type="text" placeholder="" name="metal1_wt">
                                        </div>
                                        {{-- <sup class="text-red-500 text-2xl ">*</sup> --}}
                                    </div>
                                </div>
                                <div>
                                    <label for="">PRICE (GOLD) :</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <input id="material_price"
                                                class="py-1.5 rounded w-full px-2 outline-0 border border-slate-300"
                                                type="text" placeholder="" name="material_price">
                                        </div>
                                        {{-- <sup class="text-red-500 text-2xl ">*</sup> --}}
                                    </div>
                                </div>
    
                                 <div>
                                    <label for="">PLATINUM TYPE :</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <select id="metal2_type_id" class="w-full  rounded p-2 border border-slate-300"
                                                name="metal2_type_id">
                                                <option value="">None...</option>
                                                @foreach ($Platinums as $pldata)
                                                    <option value="{{ $pldata->id }}">{{ $pldata->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                       
                                    </div>
                                </div> 
    
    
    
                                <div>
                                    <label for="">PLATINUM KT :</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <select id="metal2_purity_id" class="w-full  rounded p-2 border border-slate-300"
                                                name="metal2_purity_id">
                                                <option value="">None...</option>
                                                @foreach ($Platinumpuritys as $plpdata)
                                                    <option value="{{ $plpdata->id }}">{{ $plpdata->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div> 
    
                            <div>
                                    <label for="">PLATINUM WEIGHT :</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <input id="metal2_wt"
                                                class="py-1.5 rounded w-full px-2 outline-0 border border-slate-300"
                                                type="text" placeholder="" name="metal2_wt">
                                        </div>
                                        
                                    </div>
                                </div> 
                             
                                <div>
                                    <label for="">PRICE (PLATINUM) :</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <input id="platinum_price"
                                                class="py-1.5 rounded w-full px-2 outline-0 border border-slate-300"
                                                type="text" placeholder="" name="platinum_price">
                                        </div>
                                        {{-- <sup class="text-red-500 text-2xl ">*</sup> --}}
                                    </div>
                                </div>
    
                                     {{-- <div>
                                        <label for="">SILVER TYPE :</label>
                                        <div class="flex my-2">
                                            <div class="w-full">
                                                <select id="mkt_id" class="w-full  rounded p-2 border border-slate-300"
                                                    name="mkt_id">
                                                    <option value="">None...</option>
                                                    @foreach ($silvertypes as $s_type)
                                                        <option value="{{ $s_type->id }}">
                                                            {{ $s_type->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>  --}}
    
    
    
                                    {{-- <div>
                                        <label for="">SILVER KT :</label>
                                        <div class="flex my-2">
                                            <div class="w-full">
                                                <select id="mkt_id" class="w-full  rounded p-2 border border-slate-300"
                                                    name="mkt_id">
                                                    <option value="">None...</option>
                                                    @foreach ($silverpurities as $s_purity)
                                                        <option value="{{ $s_purity->id }}">
                                                            {{ $s_purity->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div> --}}
    
                                    {{-- <div>
                                        <label for="">SILVER WEIGHT :</label>
                                        <div class="flex my-2">
                                            <div class="w-full">
                                                <input id="category_type"
                                                    class="py-1.5 rounded w-full px-2 outline-0 border border-slate-300"
                                                    type="text" placeholder="" name="category_type">
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div> --}}
    
    
                                        <label for="">DIAMOND CUTS :</label>
                                        <div class="flex my-2">
                                            <div class="w-full">
                                                <select id="dcuts_id" class="w-full  rounded p-2 border border-slate-300"
                                                    name="dcuts_id">
                                                    <option value="">None...</option>
                                                    @foreach ($dimond_cuts as $dcdata)
                                                        <option value="{{ $dcdata->id }}">{{ $dcdata->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div>
                                        <label for="">DIAMOND SHAPE :</label>
                                        <div class="flex my-2">
                                            <div class="w-full">
                                                <select id="dshape_id" class="w-full  rounded p-2 border border-slate-300"
                                                    name="dshape_id">
                                                    <option value="">None...</option>
                                                    @foreach ($dimond_shape as $dshtdata)
                                                        <option value="{{ $dshtdata->id }}">{{ $dshtdata->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div>
                                        <label for="">DIAMOND QUALITY :</label>
                                        <div class="flex my-2">
                                            <div class="w-full">
                                                <select id="dq_id" class="w-full  rounded p-2 border border-slate-300"
                                                    name="dq_id">
                                                    <option value="">None...</option>
                                                    @foreach ($dimond_qua as $dquatdata)
                                                        <option value="{{ $dquatdata->id }}">{{ $dquatdata->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
    
                                    
                                <div>
                                    <label for="">PRICE (DIAMOND) :</label>
                                    <div class="flex my-2">
                                        <div class="w-full">
                                            <input id="category_type"
                                                class="py-1.5 rounded w-full px-2 outline-0 border border-slate-300"
                                                type="text" placeholder="" name="category_type">
                                        </div>
                                        {{-- <sup class="text-red-500 text-2xl ">*</sup> --}}
                                    </div>
                                </div>
    
                                    <div>
                                        <label for="">COLOR STONE SHAPE :</label>
                                        <div class="flex my-2">
                                            <div class="w-full">
                                                <select id="cstone_id" class="w-full  rounded p-2 border border-slate-300"
                                                    name="cstone_id">
                                                    <option value="">None...</option>
                                                    @foreach ($colorstones as $cstonedata)
                                                        <option value="{{ $cstonedata->id }}">{{ $cstonedata->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="">COLOR STONE QUALITY :</label>
                                        <div class="flex my-2">
                                            <div class="w-full">
                                                <select id="cstone_id" class="w-full  rounded p-2 border border-slate-300"
                                                    name="cstone_id">
                                                    <option value="">None...</option>
                                                    @foreach ($colorstonequas as $cstonequadata)
                                                        <option value="{{ $cstonequadata->id }}">
                                                            {{ $cstonequadata->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div>
                                        <label for="">COLOR STONE WEIGHT :</label>
                                        <div class="flex my-2">
                                            <div class="w-full">
                                                <input id="category_type"
                                                    class="py-1.5 rounded w-full px-2 outline-0 border border-slate-300"
                                                    type="text" placeholder="" name="category_type">
                                            </div>
                                            {{-- <sup class="text-red-500 text-2xl ">*</sup> --}}
                                        </div>
                                    </div>
    
                                    <div class="py-2">
                                        <div class="pb-2"><label class=" mr-2 " for="">SHORT DESCRIPTION
                                                :</label></div>
                                        <div class="flex">
                                            <textarea name="sort_description" id="sort_description" cols="30" rows="2"
                                                class="py-1 rounded w-full  px-2 outline-0 border border-slate-300" required></textarea>
    
                                        </div>
                                    </div>
                                    <div class="py-2">
                                        <div class="pb-2"><label class=" mr-2 " for="">LONG DESCRIPTION
                                                :</label></div>
                                        <div class="flex">
                                            <textarea name="long_description" id="long_description" cols="30" rows="2"
                                                class="py-1 rounded w-full  px-2 outline-0 border border-slate-300" required></textarea>
    
                                        </div>
                                    </div>
    
                                    <div class="flex items-center  flex-wrap">
                                        <label class=" mr-2" for="">PRODUCT IMAGE :</label>
                                        <div class=" rounded w-full  px-1 outline-0 border border-slate-300"><input
                                                class="py-2  rounded" type="file" name="file" required></div>
                                        <img class="hidden" id="image" src="#" style="width: 100px;">
                                    </div>
    
                                    <div class="flex items-center  flex-wrap">
                                        <label class=" mr-2" for="">1 IMAGE :</label>
                                        <div class=" rounded w-full  px-1 outline-0 border border-slate-300"><input
                                                class="py-2  rounded" type="file" name="file" ></div>
                                        <img class="hidden" id="image" src="#" style="width: 100px;">
                                    </div>
                                    <div class="flex items-center  flex-wrap">
                                        <label class=" mr-2" for="">2 IMAGE :</label>
                                        <div class=" rounded w-full  px-1 outline-0 border border-slate-300"><input
                                                class="py-2  rounded" type="file" name="file" ></div>
                                        <img class="hidden" id="image" src="#" style="width: 100px;">
                                    </div>
                                    <div class="flex items-center  flex-wrap">
                                        <label class=" mr-2" for="">3 IMAGE :</label>
                                        <div class=" rounded w-full  px-1 outline-0 border border-slate-300"><input
                                                class="py-2  rounded" type="file" name="file" ></div>
                                        <img class="hidden" id="image" src="#" style="width: 100px;">
                                    </div>
                                    <div class="flex items-center  flex-wrap">
                                        <label class=" mr-2" for="">4 IMAGE :</label>
                                        <div class=" rounded w-full  px-1 outline-0 border border-slate-300"><input
                                                class="py-2  rounded" type="file" name="file" ></div>
                                        <img class="hidden" id="image" src="#" style="width: 100px;">
                                    </div>
    
    
    
    
                                </div>
    
    
    
    
    
                                
    
                            </div>
                        </div>
                            <div class="flex mt-2 justify-end">
                                <input class="cancel-btn mr-4 outline-0  my-1 w-20  py-1 rounded text-center"
                                type="cancel" placeholder="Cancel" onclick="closePopup('Modal')">
                                <button class="submit-btn px-4 py-1 my-1  rounded">Save</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



<input type="hidden" value="{{ asset('/') }}" id="url">
<script>
    // Get the modal
    var modal = document.getElementById("Modal");
    // Get the button that opens the modal

    function openPopup(id) {
        if (id != 'add') {
            var url = $('#url').val();
            $.ajax({
                type: "GET",
                url: url + "category-type/edit/" + id,
                ctdata: "",
                success: function(ctdata) {
                    $('#category_id').val(ctdata.category_id);
                    $('#category_type').val(ctdata.category_type);
                    $('#ctype_id').val(ctdata.id);
                }
            });
        }
        document.getElementById('Modal').style.display = "block";
    }

    function closePopup(id) {
        document.getElementById('Modal').style.display = "none";
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










