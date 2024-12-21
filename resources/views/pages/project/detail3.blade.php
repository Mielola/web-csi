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
        <p class="text-3xl md:text-5xl font-semibold text-[#BDBDBD]">Project</p>
        <p class="text-4xl md:text-5xl font-bold text-[#427ebd]">Installation of Liquid Oxygen Tank at Hospitals </p>
    </div>


   <div class="flex flex-col items-center justify-center my-24 px-40">
    <p class="text-xl md:text-2xl font-semibold my-5 text-[#BDBDBD] mt-4">Preparation for BV’s Periodic Inspection - ISO Tank 40FT – Kayan LNG</p>

   <div class="flex flex-row items-center mt-5 gap-6 ">
    <img class="w-full h-[500px]" src="{{ asset('images/project/image 48.png') }}" alt="liquid-oxygen-tank">

    <img class=" h-[500px] w-[750px] object-cover" src="{{ asset('images/project/image 49.png') }}" alt="liquid-oxygen-tank">

   </div>

   <img class="w-[500px] my-6 h-[500px]" src="{{ asset('images/project/image 50.png') }}" alt="">

   <img class="w-full my-6 h-[500px]" src="{{ asset('images/project/image 46.png') }}" alt="">

   <img class="w-full my-6 h-[500px]" src="{{ asset('images/project/image 47.png') }}" alt="">






   </div>

 
</section>

@endsection