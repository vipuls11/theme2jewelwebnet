
<div class="home">
    <div class="text table-nav  ">
            <div class="overflow-menu ">
            <div class="container-2 "> 
                <div class="flex flex-wrap items-center justify-between">
                    <div class="bord-head mr-2 whitespace-nowrap">Products </div>
                    <div class="flex items-center border border-blue-400 rounded">
                        <input wire:model="search" class="rounded-l  text-xl py-1 px-2 outline-0 w-full" type="text" placeholder="Search here">
                        <button  class="text-xl rounded-r text-white  bg-blue-400 px-2 py-1"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <div class="text-2xl ">
                        <button wire:click="showModal" class="add-btn px-2 rounded"><i class="fa-solid fa-plus"></i>
                        </button>
                        <button wire:click="showImportModal" class="ml-5 Import-btn px-2 mycolor    rounded">
                            Import
                        </button>
                        <button wire:click="delete" class="ml-5 px-2  rounded bulk-btn ">
                            Bulk Delete
                        </button>
                    </div>
                </div>
           
            </div>
        </div>
    </div>


    <div class="container-2">
       @if ($msg)
                <div class="bg-green-500 py-2 text-white text-center text-2xl font-semibold " id="msg">
                    {{ $msg }}
                </div>
         @endif
        <div class="w-full overflow-hidden  shadow-xs   border-collapse border border-slate-200 ">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap mytable">
                    <thead class="font-semibold">
                        <tr
                            class="pheading text-xs  bg-sky-300 font-semibold tracking-wide text-left uppercase ">
                            <th class="py-2 w-12 border text-center">Sr.No</th>
                            <th class="px-2 py-2 border">SKU </th>
                            <th class="px-2 py-2 border">Name</th>
                            <th class="px-2 py-2 border">Collection</th>
                            <th class="px-2 py-2 border">Ring Size</th>
                            <th class="px-2 py-2 border">Metal1 </th>
                            <th class="px-2 py-2 border">Metal1 Purity</th>
                            <th class="px-2 py-2 border">Metal1 Wt</th>
                            <th class="px-2 py-2 border">Metal2 </th>
                            <th class="px-2 py-2 border">Status</th>
                            <th class="w-20 py-2 border text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="mytable  ">
                        @foreach ($products as $item)
                            <tr
                                class="text-gray-700  
                    @if ($loop->odd) 
                    @else
                    theading @endif">
                                <td class="py-2 text-xl border">
                                   <div class="flex justify-center  items-center">
                                    {{ $loop->iteration }}
                                    @if ($tab == $item->id)
                                        <button wire:click="image(0)" class="pl-1 text-sky-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrow-up-left-square-fill" viewBox="0 0 16 16">
                                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm8.096 10.803L6 6.707v2.768a.5.5 0 0 1-1 0V5.5a.5.5 0 0 1 .5-.5h3.975a.5.5 0 1 1 0 1H6.707l4.096 4.096a.5.5 0 1 1-.707.707z"/>
                                              </svg>
                                        </button>
                                    @else
                                        <button wire:click="image({{ $item->id }})" class="pl-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrow-down-right-square-fill" viewBox="0 0 16 16">
                                                <path d="M14 16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12zM5.904 5.197 10 9.293V6.525a.5.5 0 0 1 1 0V10.5a.5.5 0 0 1-.5.5H6.525a.5.5 0 0 1 0-1h2.768L5.197 5.904a.5.5 0 0 1 .707-.707z"/>
                                              </svg>
                                        </button>
                                    @endif
                                   </div>
                                </td>
                                <td class="px-2 py-1 uppercase border">{{ $item->sku }}</td>
                                <td class="px-2 py-1 capitalize border">{{ $item->product_name }}</td>
                                <td class="px-2 py-1 border">{{ $item->collection }}</td>
                                <td class="px-2 py-1 border">{{ $item->ringSize->ring_size ?? '' }}</td>
                                <td class="px-2 py-1 border">

                                    {{ $item->materials->where('material_type_id', 1)->where('material_id', 1)->first()->metal->metal_name ?? '' }}
                                </td>
                                <td class="px-2 py-1 border">
                                    {{ $item->materials->where('material_type_id', 1)->where('material_id', 1)->first()->metalPurity->purity_name ?? '' }}
                                </td>
                                <td class="px-2 py-1 border">
                                    {{ $item->materials->where('material_type_id', 1)->where('material_id', 1)->first()->material_wt ?? '' }}
                                </td>
                                
                                <td class="px-2 py-1 border">

                                    {{ $item->materials->where('material_type_id', 3)->where('material_id', 3)->first()->metal->metal_name ?? '' }}
                                </td>

                                <td class="px-2 py-1 border">
                                    {{-- <select wire:model="status.{{ $item->id }}" style="width: 100px"
                                        wire:change="statusChange({{ $item->id }})"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3 mr-2"
                                        required>
                                        <option value="0">Disabled</option>
                                        <option value="1">Enabled</option>
                                    </select> --}}

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
                                <td class=" py-2  border">

                                    <div class="flex items-center justify-center">
                                        <button wire:click="editModal({{ $item->id }})"><i
                                            class="fa-solid fa-pen-to-square text-xl text-green-600"></i></button>
                                    <button 
                                        wire:click="deleteOne({{ $item->id }})"><i
                                            class="fa-solid fa-trash-can text-xl text-red-500 ml-4"></i></button>
                                    </div>

                                            
                                </td>


                            </tr>
                            @if ($tab == $item->id)
                    <tbody class="border border-gray-300">
                        <tr
                            class=" text-xs tracking-wide font-semibold text-left bg-sky-300  uppercase border">
                            <th class=" text-center border py-2"></th>
                            <th class="px-2 border py-2">Side Dia Qlty</th>
                            <th class="px-2 border py-2">Side Dia Shape</th>
                            <th class="px-2 border py-2">Side Dia Wt.</th>
                            <th class="px-2 border py-2">Clr Stone Qlty</th>
                            <th class="px-2 border py-2">Clr Stone Shape </th>
                            <th class="px-2 border py-2">Clr Stone Wt.</th>
                            <th class="px-2 border py-2">Price (Gold)</th>
                            <th class="px-2 border py-2">Price (Diamond)</th>
                            <th class="px-2 border py-2">Price (Labor)</th>
                            <th class="px-2 border py-2 text-center">chain</th>
                        </tr>
                         <tr>
                        
                            <td class="border px-2 py-1 ">
                                {{ $item->side_diamond_quality_id ? $item->sideDiamond->name : '' }}</td>
                            <td class="border px-2 py-1">{{ $item->side_diamond_shape_id ? $item->sideShape->name : '' }}
                            </td>
                            <td class="border px-2 py-1">{{ $item->side_diamond_wt }} Ct.</td>
                            <td class="border px-2 py-1">
                                {{ $item->color_stone_quality_id ? $item->colorStoneQuality->name : '' }}
                            </td>
                            <td class="border px-2 py-1">
                                {{ $item->color_stone_shape_id ? $item->colorStoneShape->name : '' }}
                            </td>
                            <td class="border px-2 py-1">{{ $item->color_stone_wt }} Ct.</td>
                            <td class="border px-2 py-1">${{ $item->gold_price }}</td>
                            <td class="border px-2 py-1">${{ $item->diamond_price }}</td>
                            <td class="border px-2 py-1">${{ $item->labor_price }}</td>
                            <td class="border px-2 py-1 text-center">{{ $item->chain_needed }}</td>
                        </tr> 
                        <tr class="border px-2 py-1 bg-sky-300">
                            <td></td>
                            <td colspan="4" class="border px-2 py-2">
                                Short Description
                            </td>
                            <td colspan="7" class="border px-2 py-2">
                                 Long Description
                            </td>
                        </tr>
                        <tr class="border px-2 py-2">
                            <td></td>
                            <td colspan="4" class="border px-2 py-2">
                                {{ $item->sort_description }}
                            </td>
                            <td colspan="7"  class="border px-2 py-2">
                                {{ $item->long_description }}
                            </td>
                        </tr>
                        
                        <tr class="border border-gray-300">
                            <td class="border"></td>
                            @foreach ($item->images as $image)
                                <td>
                                    <img style="width: 100px;" src="{{ asset('storage/' . $image->url) }}"
                                        alt="">
                                </td>
                            @endforeach
                        </tr> 
                    </tbody>
                    @endif
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        {{ $products->links() }}



        <x-jet-dialog-modal wire:model="modal" class=" w-full mx-auto">
<div class="w-11/12">

            <x-slot name="title">

                <div class="flex" style="width: 100%; justify-content: space-between;">
                    <div class=" px-2 text-black text-xl ">
                        Product
                    </div>
                    <div class="" style="float: right">
                        <x-jet-secondary-button wire:click="$toggle('modal')" wire:loading.attr="disabled">
                            <span class="text-red-700">X</span>
                        </x-jet-secondary-button>
                    </div>
                </div>
                <hr>
            </x-slot>

            <x-slot name="content">
                <div class="flex-grow ">
                    <div class="bg-gray-100  ">
                        <div class="bg-white rounded px-8 pt-1 pb-8 mb-4 flex flex-col">

                            <div class="flex">
                                <div class="px-3 mb-6 mb-0">
                                    <label class="Uppercase tracking-wide text-black text-md mb-2" for="company">
                                        SKU#
                                    </label><br>
                                    <input wire:model="sku" placeholder="SKU#"
                                        class="w-full uppercase  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text" >
                                    <div class="text-red-600 text-sm">
                                        @error('sku')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-1/2 px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Product Name
                                    </label><br>
                                    <input wire:model="product_name" placeholder="Product Name"
                                        class="w-full capitalize text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text" >
                                    <div class="text-red-600 text-sm">
                                        @error('product_name')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="grid grid-cols-4">
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Category
                                    </label><br>
                                    <select wire:model="category_id" wire:change="categoryChange"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3"
                                        >
                                        <option value="">None...</option>
                                        @if ($categories)
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->category_name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('category_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Category Type
                                    </label><br>
                                    <select wire:model="category_type_id" wire:change="styleChnage"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3"
                                        >
                                        <option value="">None...</option>
                                        @if ($styles)
                                            @foreach ($styles as $item)
                                                <option value="{{ $item->id }}">{{ $item->category_type }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('category_type_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Sub Category
                                    </label><br>
                                    <select wire:model="sub_category_id"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3"
                                        >
                                        <option value="">None...</option>
                                        @if ($subCategories)
                                            @foreach ($subCategories as $item)
                                                <option value="{{ $item->id }}">{{ $item->subcategory_name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('sub_category_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Collection
                                    </label><br>
                                    <input wire:model="collection" placeholder="Collection"
                                        class="w-full capitalize text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text">
                                    <div class="text-red-600 text-sm">
                                        @error('collection')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Margin
                                    </label><br>
                                    <input wire:model="margin" placeholder="Margin"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text">
                                    <div class="text-red-600 text-sm">
                                        @error('margin')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Overhead
                                    </label><br>
                                    <input wire:model="overhead" placeholder="Overhead"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text">
                                    <div class="text-red-600 text-sm">
                                        @error('overhead')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Ring Size
                                    </label><br>
                                    <select wire:model="ring_size_id"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3">
                                        <option value="">None...</option>
                                        @if ($ringSizes)
                                            @foreach ($ringSizes as $item)
                                                <option value="{{ $item->id }}">{{ $item->ring_size }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('ring_size_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Metal Loss
                                    </label><br>
                                    <input wire:model="metal_loss_wt" placeholder="Metal Loss WT"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text">
                                    <div class="text-red-600 text-sm">
                                        @error('metal_loss_wt')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Gender
                                    </label><br>
                                    <select wire:model="gender"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3">
                                        <option value="">None...</option>
                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('gender')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                               
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Price (Labor)
                                    </label><br>
                                    <input wire:model="labor_price" placeholder="Price (Labor)"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text">
                                    <div class="text-red-600 text-sm">
                                        @error('labor_price')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        chain
                                    </label><br>
                                    <select wire:model="chain_needed"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3">
                                        <option value="">None...</option>
                                        @if ($chains)
                                            @foreach ($chains as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('chain_needed')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Gold
                                    </label><br>
                                    <select wire:model="metal1_type_id"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3">
                                        <option value="">None...</option>

                                        @if ($metalTypes)
                                            <option value="{{ $metalTypes[0]->id }}">{{ $metalTypes[0]->metal_name }}
                                            </option>
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('metal1_type_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Gold KT
                                    </label><br>
                                    <select wire:model="metal1_purity_id"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3">
                                        <option value="">None...</option>
                                        @if ($metal1Purities)
                                            @foreach ($metal1Purities as $item)
                                                <option value="{{ $item->id }}">{{ $item->purity_name }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('metal1_purity_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Gold WT
                                    </label><br>
                                    <input wire:model="metal1_wt" placeholder="Metal WT"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text">
                                    <div class="text-red-600 text-sm">
                                        @error('metal1_wt')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Price (Gold)
                                    </label><br>
                                    <input wire:model="gold_price" placeholder="Price (Gold)"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text">
                                    <div class="text-red-600 text-sm">
                                        @error('gold_price')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Platinum Type
                                    </label><br>
                                    <select wire:model="metal2_type_id"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3">
                                        <option value="">None...</option>
                                        @if ($metalTypes)
                                            <option value="{{ $metalTypes[1]->id }}">{{ $metalTypes[1]->metal_name }}
                                            </option>
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('metal2_type_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Platinum KT
                                    </label><br>
                                    <select wire:model="metal2_purity_id"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3">
                                        <option value="">None...</option>
                                        @if ($metal2Purities)
                                            @foreach ($metal2Purities as $item)
                                                <option value="{{ $item->id }}">{{ $item->description }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('metal2_purity_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Platinum WT
                                    </label><br>
                                    <input wire:model="metal2_wt" placeholder="Metal WT"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text">
                                    <div class="text-red-600 text-sm">
                                        @error('metal2_wt')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Silver Type
                                    </label><br>
                                    <select wire:model="metal3_type_id"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3">
                                        <option value="">None...</option>
                                        @if ($metalTypes)
                                            <option value="{{ $metalTypes[2]->id }}">{{ $metalTypes[2]->metal_name }}
                                            </option>
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('metal3_type_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Silver KT
                                    </label><br>
                                    <select wire:model="metal3_purity_id"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3">
                                        <option value="">None...</option>
                                        @if ($metal3Purities)
                                            @foreach ($metal3Purities as $item)
                                                <option value="{{ $item->id }}">{{ $item->description ?? '' }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('metal3_purity_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Silver WT
                                    </label><br>
                                    <input wire:model="metal3_wt" placeholder="Metal WT"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text">
                                    <div class="text-red-600 text-sm">
                                        @error('metal3_wt')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Cntr Dia Qlty
                                    </label><br>
                                    <select wire:model="center_diamond_quality_id"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3">
                                        <option value="">None...</option>
                                        @if ($diamondQualities)
                                            @foreach ($diamondQualities as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('center_diamond_quality_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Cntr Dia Shape
                                    </label><br>
                                    <select wire:model="center_diamond_shape_id"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3">
                                        <option value="">None...</option>
                                        @if ($diamondShapes)
                                            @foreach ($diamondShapes as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('center_diamond_shape_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Cntr Dia Wt.
                                    </label><br>
                                    <input wire:model="center_diamond_wt" placeholder="Center Diamond Wt."
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text">
                                    <div class="text-red-600 text-sm">
                                        @error('center_diamond_wt')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Side Dia Qlty
                                    </label><br>
                                    <select wire:model="side_diamond_quality_id"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3"
                                        required>
                                        <option value="">None...</option>
                                        @if ($diamondQualities)
                                            @foreach ($diamondQualities as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('side_diamond_quality_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Side Dia Shape
                                    </label><br>
                                    <select wire:model="side_diamond_shape_id"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3"
                                        required>
                                        <option value="">None...</option>
                                        @if ($diamondShapes)
                                            @foreach ($diamondShapes as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('side_diamond_shape_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Side Diamond Wt.
                                    </label><br>
                                    <input wire:model="side_diamond_wt" placeholder="Side Diamond Wt."
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text">
                                    <div class="text-red-600 text-sm">
                                        @error('side_diamond_wt')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Price (Diamond)
                                    </label><br>
                                    <input wire:model="diamond_price" placeholder="Price (Diamond)"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text">
                                    <div class="text-red-600 text-sm">
                                        @error('diamond_price')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Color Stn Qlty
                                    </label><br>
                                    <select wire:model="color_stone_quality_id"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3"
                                        required>
                                        <option value="">None...</option>
                                        @if ($colorStoneQualities)
                                            @foreach ($colorStoneQualities as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('color_stone_quality_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Color Stn Shape
                                    </label><br>
                                    <select wire:model="color_stone_shape_id"
                                        class="w-full  text-black border border-gray-500 rounded py-1.5 px-2 mb-3"
                                        required>
                                        <option value="">None...</option>
                                        @if ($colorStoneShapes)
                                            @foreach ($colorStoneShapes as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <div class="text-red-600 text-sm">
                                        @error('color_stone_shape_id')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Color Stone Wt.
                                    </label><br>
                                    <input wire:model="color_stone_wt" placeholder="In INR"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="text">
                                    <div class="text-red-600 text-sm">
                                        @error('color_stone_wt')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                           


                            </div>


                            <div class=" flex mb-6">
                                <div class="px-3 mb-6 mb-0" style="width: 100%">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Sort Description
                                    </label><br>
                                    <textarea wire:model="sort_description" style="width: 100%"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"></textarea>
                                    <div class="text-red-600 text-sm">
                                        @error('sort_description')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class=" px-3 mb-6 mb-0" style="width: 100%">
                                    <label class="uppercase tracking-wide text-black text-md  mb-2" for="company">
                                        Long Description
                                    </label><br>
                                    <textarea wire:model="long_description" style="width: 100%"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"></textarea>
                                    <div class="text-red-600 text-sm">
                                        @error('long_description')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class=" flex mb-6">
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md font-bold mb-2"
                                        for="company">
                                        White Main Image
                                    </label><br>
                                    <input wire:model="white_main_image"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="file">
                                    <div wire:loading wire:target="white_main_image">Uploading...</div>
                                    @if ($white_main_image)
                                        Photo Preview:
                                        <img style="width:100px" src="{{ $white_main_image->temporaryUrl() }}">
                                    @elseif($white_main_url)
                                        <img style="width: 100px;" src="{{ asset('storage/' . $white_main_url) }}"
                                            alt="">
                                    @endif
                                    <div class="text-red-600 text-sm">
                                        @error('white_main_image')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md font-bold mb-2"
                                        for="company">
                                        White Other Images
                                    </label><br>
                                    <input wire:model="white_other_images" multiple
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="file">
                                    <div wire:loading wire:target="white_other_images">Uploading...</div>
                                    @if ($white_other_images)
                                        <div class="flex">
                                            Photo Preview:<br>
                                            @foreach ($white_other_images as $item)
                                                <div>
                                                    <img style="width:100px" src="{{ $item->temporaryUrl() }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    @if ($white_images)
                                        <div class="flex">
                                            @foreach ($white_images as $item)
                                                <div>
                                                    <img style="width: 100px;"
                                                        src="{{ asset('storage/' . $item->url) }}"
                                                        alt=""><br>
                                                    <button class="bg-red-600 text-white px-1"
                                                        wire:click="removeImage({{ $item->id }})">Remove</button>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    <div class="text-red-600 text-sm">
                                        @error('white_other_images')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class=" flex mb-6">
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md font-bold mb-2"
                                        for="company">
                                        Yellow Main Image
                                    </label><br>
                                    <input wire:model="yellow_main_image"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="file">
                                    <div wire:loading wire:target="yellow_main_image">Uploading...</div>
                                    @if ($yellow_main_image)
                                        Photo Preview:
                                        <img style="width:100px" src="{{ $yellow_main_image->temporaryUrl() }}">
                                    @elseif($yellow_main_url)
                                        <img style="width: 100px;" src="{{ asset('storage/' . $yellow_main_url) }}"
                                            alt="">
                                    @endif
                                    <div class="text-red-600 text-sm">
                                        @error('yellow_main_image')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md font-bold mb-2"
                                        for="company">
                                        Yellow Other Images
                                    </label><br>
                                    <input wire:model="yellow_other_images" multiple
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="file">
                                    <div wire:loading wire:target="yellow_other_images">Uploading...</div>
                                    @if ($yellow_other_images)
                                        <div class="flex">
                                            Photo Preview:<br>
                                            @foreach ($yellow_other_images as $item)
                                                <div>
                                                    <img style="width:100px" src="{{ $item->temporaryUrl() }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    @if ($yellow_images)
                                        <div class="flex">
                                            @foreach ($yellow_images as $item)
                                                <div>
                                                    <img style="width: 100px;"
                                                        src="{{ asset('storage/' . $item->url) }}"
                                                        alt=""><br>
                                                    <button class="bg-red-600 text-white px-1"
                                                        wire:click="removeImage({{ $item->id }})">Remove</button>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    <div class="text-red-600 text-sm">
                                        @error('yellow_other_images')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class=" flex mb-6">
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md font-bold mb-2"
                                        for="company">
                                        Rose Main Image
                                    </label><br>
                                    <input wire:model="rose_main_image"
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="file">
                                    <div wire:loading wire:target="rose_main_image">Uploading...</div>

                                    @if ($rose_main_image)
                                        Photo Preview:
                                        <img style="width:100px" src="{{ $rose_main_image->temporaryUrl() }}">
                                    @elseif($rose_main_url)
                                        <img style="width: 100px;" src="{{ asset('storage/' . $rose_main_url) }}"
                                            alt="">
                                    @endif
                                    <div class="text-red-600 text-sm">
                                        @error('rose_main_image')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md font-bold mb-2"
                                        for="company">
                                        Rose Other Images
                                    </label><br>
                                    <input wire:model="rose_other_images" multiple
                                        class="w-full  text-black border border-gray-500 rounded py-2 px-2 mb-3"
                                        type="file">
                                    <div wire:loading wire:target="rose_other_images">Uploading...</div>

                                    @if ($rose_other_images)
                                        <div class="flex">
                                            Photo Preview:<br>
                                            @foreach ($rose_other_images as $item)
                                                <div>
                                                    <img style="width:100px" src="{{ $item->temporaryUrl() }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    @if ($rose_images)
                                        <div class="flex">
                                            @foreach ($rose_images as $item)
                                                <div>
                                                    <img style="width: 100px;"
                                                        src="{{ asset('storage/' . $item->url) }}"
                                                        alt=""><br>
                                                    <button class="bg-red-600 text-white px-1"
                                                        wire:click="removeImage({{ $item->id }})">Remove</button>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    <div class="text-red-600 text-sm">
                                        @error('rose_other_images')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-full px-3 mb-6 mb-0">
                                    <label class="uppercase tracking-wide text-black text-md font-bold mb-2"
                                        for="company">
                                        Related
                                    </label><br>
                                    <textarea wire:model="related" style="width: 100%"
                                        class="w-full uppercase text-black border border-gray-500 rounded py-2 px-2 mb-3"></textarea>
                                    <div class="text-red-600 text-sm">
                                        @error('related')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
            </x-slot>
            <hr>
            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('modal')" wire:loading.attr="disabled"
                    class="bg-red-900 text-white hover:text-white hover:bg-red-600  mr-4">
                    Cancel
                </x-jet-secondary-button>
                @if ($product_id)
                    <x-jet-button
                        class=" bg-green-900 hover:bg-green-600 
                hover:text-white py-1 px-2  font-normal mycolor rounded"
                        wire:click="updateProduct({{ $product_id }})" wire:loading.attr="disabled">
                        Update
                    </x-jet-button>
                @else
                    <x-jet-button
                        class="  bg-green-900
                hover:bg-green-600  py-1 px-2  font-normal mycolor rounded"
                        wire:click.prevent="addProduct()" wire:loading.attr="disabled">
                        Save
                    </x-jet-button>
                @endif
            </x-slot>

            </div>


        </x-jet-dialog-modal>

        <!-- Modal End -->
     <x-jet-confirmation-modal wire:model="deleteModal" maxWidth="md">
            <x-slot name="title">
                <div class="flex">
                    <div class="bg-white px-2 text-black w-full text-xl ">
                        Delete Confirmation
                    </div>
                </div>

                <hr>
            </x-slot>

            <x-slot name="content">
                <div class="flex-grow">
                    <div class="bg-gray-100  w-full ">
                        <div class="bg-white  rounded px-8 pt-1 pb-8 mb-4 flex flex-col">
                            Are you sure want to delete?
                        </div>
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <button wire:click="$toggle('deleteModal')" wire:loading.attr="disabled"
                class="bg-red-500 text-white hover:text-white hover:bg-red-700 mr-4 px-4 rounded">
                    Cancel
                </button>
                
                <x-jet-danger-button wire:click="deleteRow()" wire:loading.attr="disabled"
                class="bg-red-700 text-white hover:text-white hover:bg-red-900">
                    Delete
                </x-jet-danger-button>
                
            </x-slot>
        </x-jet-confirmation-modal>

        <!-- Modal End -->
        <x-jet-confirmation-modal wire:model="deleteModalAll">
            <x-slot name="title">
                <div class="flex">
                    <div class="bg-white px-2 text-black w-full text-xl  text-left">
                        Delete Confirmation
                    </div>
                </div>

                <hr>
            </x-slot>

            <x-slot name="content">
                <div class="flex-grow">
                    <div class="bg-gray-100  w-full ">
                        <div class="bg-white  rounded px-8 pt-1 pb-8 mb-4 flex flex-col">
                            Are you sure want to delete all products?
                        </div>
                    </div>
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('deleteModalAll')" wire:loading.attr="disabled"
                class="bg-red-500 text-white hover:text-white hover:bg-red-700 mr-4">
                    Cancel
                </x-jet-secondary-button>
                <x-jet-danger-button wire:click="deleteAll" wire:loading.attr="disabled"
                class="bg-red-800 text-white hover:text-white hover:bg-red-900">
                    Delete
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>

        {{-- Import Modal Start --}}
        <x-jet-dialog-modal wire:model="importModal" maxWidth="lg" >
            <x-slot name="title">
                <div class="flex w-full ">
                    <div class="bg-white text-black w-full text-xl  " >
                        Import
                    </div>
                </div>
                <hr >
            </x-slot>

            <x-slot name="content">
                <div class="flex-grow">
                    <div class="bg-gray-100  w-full ">
                        <div class="bg-white  rounded   pb-8 mb-4 flex flex-col">
                            <input type="file" wire:model="excelFile" name="excelFile" class="border p-1 rounded"
                                id="upload{{ $iteration }}">
                            <div class="text-red-600 text-sm">
                                @error('excelFile')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div wire:loading wire:target="excelFile">Uploading...</div>

                    </div>
                    <a class="text-blue-400" href="{{ asset('file/products.csv') }}">Download sample file</a>
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('importModal')" wire:loading.attr="disabled"
                    class="bg-red-800 hover:bg-red-700 hover:text-white text-white mr-4">
                    Cancel
                </x-jet-secondary-button>
                <button
                    class="bg-amber-900
                    hover:bg-amber-600 text-white py-1 px-2  font-normal mycolor rounded"
                    wire:click="productImport">
                    Import
                </button>
            </x-slot>
        </x-jet-dialog-modal>
        {{-- Import Modal End --}}
        <script>
            $(document).ready(function() {
                $("#msg").slideUp(0).delay(1000).slideDown('slow');
                $("#msg").slideDown(1).delay(2000).slideUp('slow');
            });
        </script>
    </div>
