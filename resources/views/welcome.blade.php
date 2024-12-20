<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <title>Laravel</title>

    @vite('resources/css/app.css')




</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
</style>

<body>

    <header class=" mx-20 p-6 flex items-center   ">
        <!-- Logo -->
        <div class="flex items-center w-2/4">
            <img src="{{ asset('images/CSI 1.png') }}" alt="Logo" class="h-12">
        </div>

        <!-- Navigation Menu -->
        <nav class="w-2/4 flex justify-start">
            <ul class="flex gap-16 text-sm font-medium ">
                <li><a class="text-[#427EBD] " href="">Home</a></li>
                <li><a class="text-[#427EBD]" href="">Gallery</a></li>
                <li><a class="text-[#427EBD]" href="">Projects</a></li>
                <li><a class="text-[#427EBD]" href="">Certifications</a></li>
                <li><a class="text-[#427EBD]" href="">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="flex  justify-between mx-20 items-center ">
        <div class="mx-20">
            <div>
                <p class="text-5xl font-light text-[#BDBDBD]">PROJECT</p>
                <p class="text-5xl font-bold text-[#427ebd]">CSI</p>
            </div>
            <div class="flex gap-4 mt-10">
                <img src="{{ asset('images/arrowK (1).png') }}" alt="">
                <img src="{{ asset('images/arrowK (2).png') }}" alt="">
            </div>
            <div class="flex gap-2 mt-8">
                <p class="text-2xl font-light text-[#000000]">01</p>
                <p class="text-4xl font-extralight text-[#BDBDBD]">/</p>
                <p class="text-2xl font-light text-[#BDBDBD]">02</p>
            </div>


        </div>

        <div class="w-1/2 h-[85vh] relative">
            <!-- Gambar -->
            <div class="w-full h-full">
                <img class="w-full h-full object-cover" src="{{ asset('images/Rectangle 6.png') }}" alt="">
            </div>
            <!-- Kotak Putih -->
            <div class="absolute bottom-0 left-0 bg-white flex  p-4 ">
                <p class="text-gray-700 font-light">View Project </p>
                <img src="{{ asset('images/arrow.svg') }}" alt="">
            </div>
        </div>


    </section>

    <section class="flex justify mx-20 items-center h-[500px] mt-20 bg-[#427EBD]">
        <div class="w-[60%] flex relative items-center justify-center">

            <div class="absolute flex gap-4 justify-center items-center">
                <div class="gap-4 mt-28 ">
                    <img class="w-[300px] h-[300px] " src="{{ asset('images/Rectangle 8.png') }}" alt="">
                    <img class="w-[300px] mt-4" src="{{ asset('images/Rectangle 10.png') }}" alt="">
                </div>
                <div class="gap-4 mt-28 ">
                    <img class="w-[300px] h-[300px] m-4" src="{{ asset('images/Rectangle 9.png') }}" alt="">
                </div>

            </div>


        </div>

        <div class="w-[40%] flex flex-col justify-center mx-10">
            <p class="text-5xl font-light text-white">About us</p>
            <p class="mt-4 text-xl font-normal text-white">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged.</p>

            <div class="w-max mt-4  bg-white flex  p-4 gap-8 ">
                <p class="text-gray-700 font-light">Read More </p>
                <img src="{{ asset('images/arrow.svg') }}" alt="">
            </div>
        </div>

    </section>

    <section id="mission" class="  mx-20 items  mt-32 ">
        <h1 class="text-5xl mt-10 font-light text-[#427EBD]">Main Focus/Mission Statement</h1>

        <div class="flex  items-start mt-10 gap-96">
            <!-- Kolom 1 -->
            <div class=" flex w-[413px] gap-4 ">
                <p class="text-[100px] text-[#427EBD] leading-none">1</p>
                <p class="w-[500px] text-[22px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur,
                    lectus et facilisis placerat.
                </p>
            </div>

            <!-- Kolom 2 -->
            <div class=" flex w-[500px] gap-4 ">
                <p class="text-[100px] text-[#427EBD] leading-none">2</p>
                <p class="w-[500px] text-[22px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur,
                    lectus et facilisis placerat.
                </p>
            </div>
        </div>


    </section>


    <section id="ourproject" class=" my-10  mx-20 items  mt-32 ">
        <h1 class="text-5xl mt-10 font-light text-[#BDBDBD]">Our Projects</h1>

        <div id="main" class=" mt-10 grid grid-cols-4 gap-10 justify-evenly">
            <div class="relative bg-[#427EBD]  col-span-2 ">
                <div class="absolute inset-0">
                    <img src="{{ asset('images/project (1).png') }}" alt=""
                        class="w-full h-full object-cover opacity-30" />
                </div>
                <div class="absolute flex flex-col  mt-20 justify-start mx-10 w-[100px]">
                    <p class="text-white text-5xl font-bold"> Sample Project</p>
                    <div class="w-max mt-4 flex gap-2   ">
                        <p class="text-white font-light">View Project </p>
                        <img src="{{ asset('images/arrow-white.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="  col-span-2 w-full h-[300px]">
                <img src="{{ asset('images/project (2).png') }}" alt="" class="w-full h-full object-cover opacity-70" />

            </div>
            <div class=" bg-slate-400 w-full h-[250px] ">
                <img class="w-full h-full" src="{{ asset('images/project (3).png') }}" alt="">
            </div>
            <div class="bg-slate-500 w-full h-[250px] col-span-2  ">
                <img class="w-full h-full" src="{{ asset('images/project (4).png') }}" alt="">
            </div>
            <div class="bg-slate-400 w-full h-[250px]  ">
                <img class="w-full h-full" src="{{ asset('images/project (5).png') }}" alt="">
            </div>
        </div>

        <div class="px-10 w-max mt-4 flex gap-2 float-right bg-[#427ebd] justify-end items-end p-4 ">
            <p class="text-white font-light">All Projects</p>
            <img src="{{ asset('images/arrow-white.png') }}" alt="">
        </div>
    </section>


    <section id="contact" class="  mx-20 items  my-32 ">
        <h1 class="text-5xl mt-5 font-light text-[#BDBDBD]">Contact Us</h1>

        <div class="flex justify-center mt-10 gap-4">
            <!-- Kontainer Form -->
            <div class="w-1/3 rounded-lg ">
                <!-- Form -->
                <form class="space-y-4">
                    <!-- Input Email -->
                    <div>
                        <input type="email" id="email"
                            class="w-full bg-[#F3F3F3] border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 p-2.5"
                            placeholder="name" required />
                    </div>
                    <!-- Input Phone -->
                    <div>
                        <input type="phone" id="phone"
                            class="w-full bg-[#F3F3F3] border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 p-2.5"
                            placeholder="Phone Number" required />
                    </div>
                    <!-- Input  Email -->
                    <div>
                        <input type="Email" id="Email"
                            class="w-full bg-[#F3F3F3] border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 p-2.5"
                            placeholder="Email" required />
                    </div>
                    <!-- Input Interest -->
                    <div>
                        <input type="text" id="interest"
                            class="w-full bg-[#F3F3F3] border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 p-2.5"
                            placeholder="Interested in" required />
                    </div>
                    <!-- Input Text Area -->
                    <div>
                        <textarea id="message" rows="8"
                            class="w-full bg-[#F3F3F3] border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 p-2.5"
                            placeholder="Enter your message"></textarea>
                    </div>
                </form>
            </div>


            <div class="w-2/3 bg-slate-100">
                <img class="w-full" src="{{ asset('images/img-contact.png') }}" alt="">

            </div>

        </div>

        <div class="px-10 w-max mt-4 flex gap-2 bg-[#427ebd] justify-end items-end p-4 ">
            <p class="text-white font-light uppercase">Send Email</p>
            <img src="{{ asset('images/arrow-white.png') }}" alt="">
        </div>

    </section>


    <footer class="bg-gray-100 ">
  <div class=" py-8 mx-20 px-4">
    <div class="flex flex-col gap-24 md:flex-row justify-start items-start">
      <!-- Logo Section -->
      <div class="mb-6 md:mb-0">
        <img src="{{ asset('images/CSI 1.png') }}" alt="Logo Cryo Services Indonesia" class="mb-4">
      </div>
      
      <!-- Information Section -->
      <div class="mb-6 md:mb-0">
        <h4 class="font-semibold text-lg text-[#427EBD] mb-2">Information</h4>
        <ul class="text-[#427EBD] space-y-2">
          <li><a href="#" class="hover:text-blue-500">Main</a></li>
          <li><a href="#" class="hover:text-blue-500">Gallery</a></li>
          <li><a href="#" class="hover:text-blue-500">Projects</a></li>
          <li><a href="#" class="hover:text-blue-500">Certifications</a></li>
          <li><a href="#" class="hover:text-blue-500">Contacts</a></li>
        </ul>
      </div>
      
      <!-- Contacts Section -->
      <div class="mb-6 md:mb-0 w-[450px]">
        <h4 class="font-semibold text-lg text-[#427EBD] mb-2">Contacts</h4>
        <ul class="text-[#427EBD] space-y-2">
          <li>
            <p>
              PT. Cryo Services Indonesia, Narogong, Jl. Raya Narogong No. Km 12, Cikiwul, Kec. Bantar Gebang, Kota Bks, Jawa Barat 17152
            </p>
          </li>
          <li>
            <p><strong>Phone:</strong> (+6221) 82595934</p>
          </li>
          <li>
            <p><strong>Email:</strong> info@csicryoservices.com</p>
          </li>
        </ul>
      </div>
      
      <!-- Social Media Section -->
      <div>
        <h4 class="font-semibold text-lg text-[#427EBD] mb-2">Social Media</h4>
        <div class="flex space-x-14">
          <a href="#">
            <img src="{{ asset('images/facebook (1).png') }}" alt="Facebook" class="w-[20px] h-[38px] hover:opacity-75">
          </a>
          <a href="#">
            <img src="{{ asset('images/twitter (1).png') }}" alt="Twitter" class="w-[44px] h-[34px] hover:opacity-75">
          </a>
          <a href="#">
            <img src="{{ asset('images/linkedin (1).png') }}" alt="LinkedIn" class="w-[40px] h-[40px] hover:opacity-75">
          </a>
          <a href="#">
            <img src="{{ asset('images/pinterest (1).png') }}" alt="Pinterest" class="w-[28px] h-[38px] hover:opacity-75">
          </a>
        </div>
      </div>
    </div>
    
    <!-- Footer Bottom -->
    <div class="border-t border-gray-300 mt-8 pt-4 text-center text-gray-500 text-sm">
      © 2021 All Rights Reserved
    </div>
  </div>
</footer>






</body>

</html>