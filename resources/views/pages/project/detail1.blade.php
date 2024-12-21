@extends('layouts.app')

@section('title', 'projects')
@section('content')

<section id="ourproject" class="flex flex-col my-14 mx-5 md:mx-10 lg:mx-20 items px-5 ">
    <!-- Judul -->
    <div
    data-aos="fade-right"
    data-aos-delay="500"
    data-aos-duration="1000"
     class="flex flex-col items-start md:items-start my-4 leading-none">
        <p class="text-xl md:text-5xl font-semibold text-[#BDBDBD]">Project</p>
        <p class="text-2xl md:text-5xl font-bold text-[#427ebd]">Nitrogen Vaporizer Package </p>
    </div>


  

   

    <div data-aos="fade-right" data-aos-delay="500" data-aos-duration="800" class="relative mt-2 lg:mt-10  flex flex-col w-full group transition duration-300 ">


      <div class="  w-full max-w-lg my-2 lg:my-6">
    <h1 class="text-lg font-bold mb-4 text-[#AFAFAF]">Project 1</h1>
    <ul class="space-y-2">
      <li>
        <span class="font-semibold text-[#AFAFAF] ">Facility Name:</span>
        <span class="text-[#427EBD] hover:underline">Banyu Urip</span>
      </li>
      <li>
        <span class="font-semibold text-[#AFAFAF]">Project Owner:</span>
        <span class="text-[#427EBD] hover:underline">Mobile Cepu Limited (MCL)</span>
      </li>
      <li>
        <span class="font-semibold text-[#AFAFAF]">Main Contractor:</span>
        <span class="text-[#427EBD] hover:underline">Tripatra-Samsung Consortium</span>
      </li>
      <li>
        <span class="font-semibold text-[#AFAFAF]">Item Name:</span>
        <span class="text-[#427EBD] hover:underline">Nitrogen Vaporizer Package</span>
      </li>
      <li>
        <ul class="pl-5 list-disc">
          <li class="text-[#427EBD] hover:underline">Liquid Nitrogen Storage 11,000 liters</li>
          <li class="text-[#427EBD] hover:underline">Vaporizer 3,000 Nm3/hour</li>
          <li class="text-[#427EBD] hover:underline">Skid Regulating System</li>
        </ul>
      </li>
      <li>
        <span class="font-semibold text-[#AFAFAF]">Year:</span>
        <span class="text-[#427EBD] hover:underline">2014</span>
      </li>
    </ul>
  </div>

      <div class=" h-[200px] md:h-[400px] lg:h-[600px] w-full  ">
        <img src="{{ asset('images/project/image (13).png') }}" alt=""
          class="w-full h-full object-cover  group-hover:opacity-50 transition duration-300" />
      </div>

      <div class=" flex flex-row my-4 lg:my-20 gap-2 lg:gap-10 justify-center md:w lg:w-full">
        
      <img class="w-1/2 lg:h-full object-cover" src="{{ asset('images/project/image (14).png') }}" alt="">
      <img class="w-1/2 lg:h-full object-cover" src="{{ asset('images/project/image (15).png') }}" alt="">


      </div>
     
    </div>
  

  


   

 
</section>

@endsection