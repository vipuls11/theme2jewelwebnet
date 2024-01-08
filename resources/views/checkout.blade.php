@extends('app')
@section('content')
    <script src="https://unpkg.com/flowbite@1.6.0/dist/flowbite.min.js"></script>
    <style>
        .summery-menu {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }
    </style>


        @php
        $Contacts=\App\Models\Contact::first();
        @endphp


    <div class="bg-green-100 pb-2">
        <div class="">
            <h1 class="text-center text-2xl py-2 ">Secure Checkout </h1>
           
        </div>
        <hr>
        <div class="container-1">
            <div class="">
                <div class="lg:flex  gap-4">
                    <div class="w-full lgw-7/12   p-4  bg-white mr-4  my-4 border">
                        <div>

                            <h1 class="text-2xl">Billing Address</h1>

                            <form action="">
                                <div class="flex justify-between items-center gap-4 my-4">
                                    <input class="border px-2 py-2 w-full" type="text" placeholder="First Name">
                                    <input class="border px-2 py-2 w-full" type="text" placeholder="Last Name">
                                </div>
                                <div class="flex justify-between items-center gap-4 my-4">
                                    <input class="border px-2 py-2 w-full" type="text" placeholder="Address">
                                    <input class="border px-2 py-2 w-full" type="text" placeholder="City">
                                </div>
                                <div class="flex justify-between items-center gap-4 my-4">
                                    <!--- India states -->
                                    <select id="country-state" name="country-state" class="border px-2 py-2 w-full">
                                        <option value="AN">Andaman and Nicobar Islands</option>
                                        <option value="AP">Andhra Pradesh</option>
                                        <option value="AR">Arunachal Pradesh</option>
                                        <option value="AS">Assam</option>
                                        <option value="BR">Bihar</option>
                                        <option value="CH">Chandigarh</option>
                                        <option value="CT">Chhattisgarh</option>
                                        <option value="DN">Dadra and Nagar Haveli</option>
                                        <option value="DD">Daman and Diu</option>
                                        <option value="DL">Delhi</option>
                                        <option value="GA">Goa</option>
                                        <option value="GJ">Gujarat</option>
                                        <option value="HR">Haryana</option>
                                        <option value="HP">Himachal Pradesh</option>
                                        <option value="JK">Jammu and Kashmir</option>
                                        <option value="JH">Jharkhand</option>
                                        <option value="KA">Karnataka</option>
                                        <option value="KL">Kerala</option>
                                        <option value="LA">Ladakh</option>
                                        <option value="LD">Lakshadweep</option>
                                        <option value="MP">Madhya Pradesh</option>
                                        <option value="MH">Maharashtra</option>
                                        <option value="MN">Manipur</option>
                                        <option value="ML">Meghalaya</option>
                                        <option value="MZ">Mizoram</option>
                                        <option value="NL">Nagaland</option>
                                        <option value="OR">Odisha</option>
                                        <option value="PY">Puducherry</option>
                                        <option value="PB">Punjab</option>
                                        <option value="RJ">Rajasthan</option>
                                        <option value="SK">Sikkim</option>
                                        <option value="TN">Tamil Nadu</option>
                                        <option value="TG">Telangana</option>
                                        <option value="TR">Tripura</option>
                                        <option value="UP">Uttar Pradesh</option>
                                        <option value="UT">Uttarakhand</option>
                                        <option value="WB">West Bengal</option>
                                    </select>
                                    <input class="border px-2 py-2 w-full" type="number" placeholder="Pin Code">
                                </div>
                                <div class="flex justify-between items-center gap-4 my-4">
                                    <input class="border px-2 py-2 w-full" type="email" placeholder="Email Id">
                                    <input class="border px-2 py-2 w-full" type="number" placeholder="Contact No">
                                </div>
                                <div class="text-center">
                                    <button
                                        class="bg-green-500 text-white hover:bg-green-800 hover:text-white py-2 px-4">Continue
                                        To Payment</button>
                                </div>
                            </form>


                        </div>



                    </div>

                    <div class="w-full lg:w-5/12  my-4 ">

                        <div class="summery-menu ">
                            <div class="bg-white border">
                                <div class="overflow-auto h-auto">
                                    <h1 class="text-2xl pb-2 py-2 px-4">Order Summary</h1>
                                    <hr>
                                    <div class="overflow-y-auto h-44">
                                    <div class="flex">
                                        <div>
                                            <div class=" w-28 ">
                                                <img src="images/ring3.jpeg" alt=""
                                                    style="width: 100%; height:100%; ">
                                            </div>
                                        </div>
                                        
                                            <div class="px-2">
                                                <h1 class="mt-2">Aquamarine and Diamond Twisted Vine Ring</h1>
                                                <div class="flex gap-x-2 items-center text-sm mt-2">
                                                    <div>
                                                        <h1>QTY : </h1>
                                                    </div>
                                                    <div>

                                                        1
                                                    </div>
                                                </div>


                                            </div>
                                       
                                    </div>
                                    <div class="px-4 ">

                                        <div id="accordion-flush" data-accordion="collapse"
                                            data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                                            data-inactive-classes="text-gray-500 dark:text-gray-400">

                                            <h2 id="accordion-flush-heading-2 ">
                                                <button type="button"
                                                    class="flex items-center justify-between w-full py-2 font-medium text-left text-gray-500 border  dark:text-gray-400"
                                                    data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                                                    aria-controls="accordion-flush-body-2">
                                                    <span>Product Details</span>
                                                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </h2>
                                            <div id="accordion-flush-body-2" class="hidden"
                                                aria-labelledby="accordion-flush-heading-2">
                                                <div>

                                                    <div class="flex justify-between mt-1 text-sm ">
                                                        <div>
                                                            <h1>SKU :</h1>
                                                        </div>
                                                        <div>

                                                            SR1912AQD
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-between mt-1 text-sm ">
                                                        <div>
                                                            <h1>Gemstone Quality :</h1>
                                                        </div>
                                                        <div>
                                                            Better
                                                        </div>
                                                    </div>

                                                    <div class="flex justify-between my-1 text-sm ">
                                                        <div>
                                                            <h1>Total Carat Weight :</h1>
                                                        </div>
                                                        <div>
                                                            0.99 carat
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-between my-1 text-sm ">
                                                        <div>
                                                            <h1>Metal Type : </h1>
                                                        </div>
                                                        <div>
                                                            14K Rose Gold
                                                        </div>
                                                    </div>

                                                    <div class="flex justify-between mt-1 mb-2 text-sm">
                                                        <div>
                                                            <h1 class="">Ring Size :</h1>
                                                        </div>
                                                        <div>
                                                            7
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <hr>
                                    </div>
                                    </div>


                                </div>


                                <div class="px-4">



                                    <div class="flex justify-between mt-2 text-sm">
                                        <div>
                                            <h1 class="">Subtotal</h1>
                                        </div>
                                        <div>
                                            Rs : 17000
                                        </div>
                                    </div>
                                    <div class="flex justify-between mt-2 text-sm">
                                        <div>
                                            <h1 class="">Promotional Savings (SHINE)</h1>
                                        </div>
                                        <div>
                                            Rs : 1000
                                        </div>
                                    </div>
                                    <div class="flex justify-between mt-2 text-sm">
                                        <div>
                                            <h1 class="">Delivery By Jan 13 - Jan 16</h1>
                                        </div>
                                        <div>
                                            Free
                                        </div>
                                    </div>
                                    <div class="flex justify-between mt-2 text-sm">
                                        <div>
                                            <h1 class="">Sales Tax </h1>
                                        </div>
                                        <div>
                                            Rs : 0
                                        </div>
                                    </div>


                                </div>
                                <hr>
                                <div class="flex justify-between mt-2 font-bold px-4">
                                    <div>
                                        <h1 class="pb-2"> Order Total</h1>
                                    </div>
                                    <div>
                                        Rs : 16000
                                    </div>
                                </div>

                            </div>
                            <div class="border px-4 mt-2 bg-white">
                                <h1 class="my-2 text-xl">Need Help</h1>
                                <div class="flex my-2">
                                   <a href="tel:{{$Contacts->contact_no}}"> <button class="mr-5"><i class="fa-solid fa-phone mr-2"></i> Call</button></a>
                                    <a href="mailto:{{$Contacts->email_id}}"><button><i class="fa-solid fa-envelope mr-2"></i> Email</button></a>
                                </div>
                            </div>


                        </div>



                    </div>

                </div>


            </div>




        </div>


        
    </div>
    <div class="bg-white  flex justify-center items-center">
        <div class="w-20">
            <img src="images/673469.png" alt="" style="" style="width: 100%; height:100%; ">
        </div>
        <div class="w-20">
            <img src="images/Amazon_Pay-Logo.wine.png" alt="" style="width: 100%; height:100%; ">
        </div>
    </div>
@endsection
