@extends('layouts.app')
<style>
  .bg {
    background-image: url('{{ asset('images/background.png') }}');
  }
</style>
@section('title', 'Home')

@section('content')
<section id="home" class="flex flex-col md:flex-row justify-between  items-center ">
  <div class="w-full bg h-screen bg-cover bg-center bg-blue-200">

    <div class="flex flex-col justify-center items-end h-full  ">
      <div class="flex flex-col  justify- w-max items-start mx-20 ">
        <p class="text-[#427EBD] font-bold  text-3xl md:text-6xl leading-none"> <span class="text-red-500">C</span>RYO
        </p>
        <p class="text-[#427EBD] font-bold text-3xl md:text-6xl"> <span class="text-red-500">S</span>ERVICES</p>
        <p class="text-[#427EBD] font-bold text-3xl md:text-6xl"><span class="text-red-500">I</span>NDONESIA</p>

        <p class="ml-24 text-[#427EBD] font-bold text-end text-xl">Independent Cryogenic <span><br></span> Partner for
          Indonesia</p>
      </div>

    </div>



  </div>


</section>

<section class="h-fit flex justify-center items-center p-4 sm:p-20">
  <div class="bg-[#427EBD] text-white p-4 sm:p-10 rounded-md flex flex-col lg:flex-row items-start justify-evenly gap-8">
    <!-- Gallery Section -->
    <div class="w-full lg:w-1/2">
      <!-- Top Row -->
      <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="h-full">
          <img src="{{ asset('images/image (5).png') }}" alt="Image 1"
            class="w-full h-[400px] sm:h-[500px] object-cover rounded-lg shadow-md" />
        </div>
        <div class="flex flex-col gap-4">
          <img src="{{ asset('images/image (4).png') }}" alt="Image 2"
            class="w-full h-[190px] sm:h-[240px] object-cover rounded-lg shadow-md" />
          <img src="{{ asset('images/image (3).png') }}" alt="Image 3"
            class="w-full h-[190px] sm:h-[240px] object-cover rounded-lg shadow-md" />
        </div>
      </div>

      <!-- Bottom Row -->
      <div class="grid grid-cols-2 gap-4">
        <img src="{{ asset('images/image (2).png') }}" alt="Image 4"
          class="w-full h-[180px] object-cover rounded-lg shadow-md" />
        <img src="{{ asset('images/image (1).png') }}" alt="Image 5"
          class="w-full h-[180px] object-cover rounded-lg shadow-md" />
      </div>
    </div>

    <!-- Text Content -->
    <div class="w-full lg:w-1/3 mt-6 lg:mt-0">
      <h1 class="font-bold text-3xl sm:text-5xl">Company Profile</h1>
      <div class="flex flex-col gap-6 mt-6 text-base sm:text-xl text-justify">
        <p>PT Cryo Services Indonesia (CSI) is your most reliable partner in the industry
          of cryogenic engineering and repair in Indonesia. CSI was founded in 2008 by a group
          of people with strong technical background in cryogenic and industrial gases applications.
        </p>
        <p>Our main activities are mainly in cryogenic tanks and equipment repairs; engineering and
          installation of cryogenic supply system including tank storages and regassification units,
          low to high pressure pipe works and pressure regulating system; fabrication of cylinder manifold/cradle/cascade;
          testing or inspection for re-certification of jumbo tubes and T75 cryogenic tanks
        </p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="flex flex-col sm:flex-row space-y-4 w-full">
    <div class="w-full relative">
      <img class="w-full h-full object-cover" src="{{ asset('images/mission_image.png') }}" alt="">
    </div>

    <div class="w-full flex flex-col justify-between items-center">
      <!-- Vision -->
      <div class="px-6 items-start">
        <h2 class="text-3xl md:text-8xl font-bold text-[#427EBD]">Vision</h2>
        <ul class="text-2xl text-[#A0A0A0] list-disc px-4 font-semibold mt-4 leading-10">
          <li class="my-2">We are aim to become a leading in the market we serve.</li>
          <li>We are aim to be recognized and reliable world class industrial partner in equipment supply and engineering services and solution especially in process, instrument and mechanical engineering.</li>
        </ul>
      </div>

      <!-- Mission -->
      <div class="px-6 mt-5 items-start">
        <h2 class="text-3xl md:text-8xl font-bold text-[#427EBD]">Mission</h2>
        <ul class="text-2xl text-[#A0A0A0] list-disc px-4 font-semibold mt-4 leading-10">
          <li class="my-2">Striving to the world class service by offering the best in quality and cost base efficiency in servicing industries and a reliable service to the customers.</li>
          <li>Becoming a leading company in innovative solution, safety, integrity and environmental care by synergizing our engineering capabilities based on creative and applicative solution.</li>
          <li>Becoming the best working environment for employees with the enormous opportunity to develop and best return to the shareholder.</li>
          <li>Satisfying our customer with superior products and services for mutual benefit over long term relationship.</li>
        </ul>
      </div>


    </div>
  </div>
</section>



<section id="ourproject" class="my-10 flex-col mx-5 px- md:mx-20 items mt-32">
  <h1 data-aos="fade-right" data-aos-delay="500" data-aos-duration="1000"
    class="text-3xl md:text-5xl mt-10 font-light text-[#BDBDBD]">Our Projects</h1>

  <div class="mt-2 md:mt-10 grid grid-cols-1 md:grid-cols-4 gap-10">
    <!-- Project 1 -->
    <div data-aos="fade-right" data-aos-delay="500" data-aos-duration="800"
      class="relative bg-[#427EBD] col-span-1 md:col-span-2 group transition duration-300 hover:shadow-xl hover:scale-105">
      <div class="absolute inset-0">
        <img src="{{ asset('images/our-project/project 1.png') }}" alt=""
          class="w-full h-full object-cover opacity-30 group-hover:opacity-50 transition duration-300" />
      </div>
      <div class="absolute flex flex-col mt-20 justify-start mx-10 w-[100px]">
        <p class="text-white text-3xl md:text-5xl font-bold">Sample Project</p>
        <div class="w-max mt-4 flex gap-2">
          <p class="text-white font-light group-hover:underline">View Project</p>
          <img src="{{ asset('images/arrow-white.png') }}" alt="">
        </div>
      </div>
    </div>

    <!-- Project 2 -->
    <div data-aos="fade-down" data-aos-delay="500" data-aos-duration="800"
      class="col-span-1 md:col-span-2 w-full h-[250px] md:h-[300px] group transition duration-300 hover:shadow-xl hover:scale-105">
      <img src="{{ asset('images/our-project/project 2.png') }}" alt=""
        class="w-full h-full object-cover opacity-70 group-hover:opacity-90 transition duration-300" />
    </div>

    <!-- Project 3 -->
    <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000"
      class="bg-slate-400 w-full h-[250px] md:h-[300px] group transition duration-300 hover:shadow-xl hover:scale-105">
      <img class="w-full h-full object-cover group-hover:opacity-90 transition duration-300"
        src="{{ asset('images/our-project/project 3.png') }}" alt="">
    </div>

    <!-- Project 4 -->
    <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000"
      class="bg-slate-500 w-full h-[250px] md:h-[300px] col-span-1 md:col-span-2 group transition duration-300 hover:shadow-xl hover:scale-105">
      <img class="w-full h-full object-cover group-hover:opacity-90 transition duration-300"
        src="{{ asset('images/our-project/project 4.png') }}" alt="">
    </div>

    <!-- Project 5 -->
    <div data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000"
      class="bg-slate-400 w-full h-[250px] md:h-[300px] group transition duration-300 hover:shadow-xl hover:scale-105">
      <img class="w-full h-full object-cover group-hover:opacity-90 transition duration-300"
        src="{{ asset('images/our-project/project 5.png') }}" alt="">
    </div>
  </div>

  <!-- All Projects Button -->
  <div
    class="px-10 w-max mt-4 flex md:float-end bg-[#427EBD] p-4 transition duration-300 hover:bg-[#355c90] hover:scale-105">
    <p class="text-white font-light">All Projects</p>
    <img src="{{ asset('images/arrow-white.png') }}" alt="">
  </div>
</section>




@endsection