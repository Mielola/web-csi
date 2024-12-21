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


    <div class="flex flex-col items-center justify-center gap-4">

    <div class="flex flex-col items-center mt-5">
        <p class="text-xl md:text-2xl font-semibold my-5 text-[#BDBDBD] mt-4"> RS Immanuel Bandung</p>
        <img class="w-full h-[500px]" src="{{ asset('images/project/image 44.png') }}" alt="">
    </div>

    <div class="flex flex-col items-center mt-5">
        <p class="text-xl md:text-2xl font-semibold my-5 text-[#BDBDBD] mt-4"> RS Immanuel Bandung</p>
        <img class="w-full h-[500px]" src="{{ asset('images/project/image 45.png') }}" alt="">
    </div>
        
    </div>

   

 
</section>

@endsection