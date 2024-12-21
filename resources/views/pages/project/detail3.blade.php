@extends('layouts.app')

@section('title', 'projects')
@section('content')

<section id="ourproject" class="flex flex-col my-14 mx-5 md:mx-10 lg:mx-20 items-center px-5">
    <!-- Judul -->
    <div
        data-aos="fade-right"
        data-aos-delay="500"
        data-aos-duration="1000"
        class="flex flex-col items-start md:items-start my-4 leading-none">
        <p class="text-3xl md:text-5xl font-semibold text-[#BDBDBD]">Project</p>
        <p class="text-4xl md:text-5xl font-bold text-[#427ebd]">Installation of Liquid Oxygen Tank at Hospitals</p>
    </div>

    <div class="flex flex-col items-center justify-center my-12 md:my-24 px-4 md:px-40">
        <p class="text-xl md:text-2xl font-semibold my-5 text-[#BDBDBD] mt-4">
            Preparation for BV’s Periodic Inspection - ISO Tank 40FT – Kayan LNG
        </p>

        <div class="flex flex-col md:flex-row items-center gap-6">
            <img class="w-full md:w-1/2 md:h-[400px] h-[200px] object-cover" src="{{ asset('images/project/image 48.png') }}" alt="liquid-oxygen-tank">
            <img class="w-full md:w-1/2 md:h-[400px] h-[200px] object-cover" src="{{ asset('images/project/image 49.png') }}" alt="liquid-oxygen-tank">
        </div>

        <img class="w-full md:w-1/2 my-6 h-auto" src="{{ asset('images/project/image 50.png') }}" alt="">

        <img class="w-full my-6 h-auto" src="{{ asset('images/project/image 46.png') }}" alt="">

        <img class="w-full my-6 h-auto" src="{{ asset('images/project/image 47.png') }}" alt="">
    </div>
</section>

@endsection
