@extends('layouts.app')

@section('title', 'projects')
@section('content')

<section id="ourproject" class="my-20 mx-5 md:mx-10 lg:mx-20 items px-5 ">
    <!-- Judul -->
    <div
        data-aos="fade-right"
        data-aos-delay="500"
        data-aos-duration="1000"
        class="flex flex-col items-start md:items-start my-4 leading-none">
        <p class="text-3xl md:text-5xl font-light text-[#BDBDBD]">Our</p>
        <p class="text-4xl md:text-5xl font-bold text-[#427ebd]">Projects</p>
    </div>

    <!-- Proyek -->
    <div class="space-y-10">
        <!-- Project 1 -->
        <div class="flex flex-col md:flex-row gap-4 mt-10 bg-[#427EBD] group transition-all duration-300 hover:shadow-xl ">
            <div class="md:w-2/3 overflow-hidden">
                <img class="w-full h-[200px] md:h-[500px] object-cover group-hover:scale-110 transition-transform duration-300" src="{{ asset('images/our-project/1.png') }}" alt="">
            </div>
            <div class="md:w-1/3 flex flex-col justify-between my-2 md:my-8 gap-6 md:gap-14 p-4 md:p-10">
                <div>
                    <p class="text-2xl md:text-3xl font-bold text-white">Nitrogen Vaporizer Package</p>
                </div>
                <div>
                    <p class="text-sm md:text-base font-normal text-white">
                        Project Owner: Mobile Cepu Limited (MCL)
                        Main Contractor: Tripatra-Samsung Consortium
                    </p>
                </div>
                <a href="projects/detail">
                    <div class="w-max mt-4 bg-white flex p-4 gap-4 items-center transition duration-300 hover:bg-gray-200">
                        <p class="text-gray-700 font-light">Read More</p>
                        <img class="h-4 md:h-auto" src="{{ asset('images/arrow.svg') }}" alt="">
                    </div>
                </a>
            </div>
        </div>

        <!-- Project 2 -->
        <div class="flex flex-col md:flex-row gap-4 mt-10 bg-[#427EBD] group transition-all duration-300 hover:shadow-xl ">
            <div class="md:w-2/3 overflow-hidden">
                <img class="w-full h-[200px] md:h-[500px] object-cover group-hover:scale-110 transition-transform duration-300" src="{{ asset('images/our-project/2.png') }}" alt="">
            </div>
            <div class="md:w-1/3 flex flex-col justify-between my-2 md:my-8 gap-6 md:gap-10 p-4 md:p-10">
                <div>
                    <p class="text-2xl md:text-3xl font-bold text-white">Installation of Liquid Oxygen Tank at Hospitals</p>
                </div>
                <a href="projects/detail">
                    <div class="w-max mt-4 bg-white flex p-4 gap-4 items-center transition duration-300 hover:bg-gray-200">
                        <p class="text-gray-700 font-light">Read More</p>
                        <img class="h-4 md:h-auto" src="{{ asset('images/arrow.svg') }}" alt="">
                    </div>
                </a>
            </div>
        </div>

        <!-- Project 3 -->
        <div class="flex flex-col md:flex-row gap-4 mt-10 bg-[#427EBD] group transition-all duration-300 hover:shadow-xl ">
            <div class="md:w-2/3 overflow-hidden">
                <img class="w-full h-[200px] md:h-[500px] object-cover group-hover:scale-110 transition-transform duration-300" src="{{ asset('images/our-project/3.png') }}" alt="">
            </div>
            <div class="md:w-1/3 flex flex-col justify-between my-2 md:my-8 gap-6 md:gap-10 p-4 md:p-10">
                <div>
                    <p class="text-2xl md:text-3xl font-bold text-white">BV’s Periodic Inspection</p>
                </div>
                <div>
                    <p class="text-sm md:text-base font-normal text-white">
                        Contractor : Kayan LNG
                    </p>
                </div>
                <a href="projects/detail">
                    <div class="w-max mt-4 bg-white flex p-4 gap-4 items-center transition duration-300 hover:bg-gray-200">
                        <p class="text-gray-700 font-light">Read More</p>
                        <img class="h-4 md:h-auto" src="{{ asset('images/arrow.svg') }}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
