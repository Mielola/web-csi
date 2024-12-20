@extends('layouts.app')

@section('title', 'projects')
@section('content')

<section id="ourproject" class="my-10 mx-5 md:mx-10 lg:mx-20 items px-5 ">
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
        <div class="flex flex-col md:flex-row gap-4 mt-10 bg-[#427EBD]">
            <div class="md:w-2/3">
                <img class="w-full h-[200px] md:h-[500px] object-cover" src="{{ asset('images/project_1.png') }}" alt="">
            </div>
            <div class="md:w-1/3 flex flex-col justify-between my-2 md:my-8 gap-6 md:gap-10 p-4 md:p-0">
                <div>
                    <p class="text-2xl md:text-3xl font-bold text-white">Sample Project</p>
                </div>
                <div>
                    <p class="text-sm md:text-base font-normal text-white">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <a href="projects/detail">
                <div class="w-max mt-4 bg-white flex p-4 gap-4 items-center">
                  
                    <p class="text-gray-700 font-light">Read More</p>
                    <img class="h-4 md:h-auto" src="{{ asset('images/arrow.svg') }}" alt="">
                </div>
                </a>

            </div>
        </div>

        <!-- Project 2 -->
        <div class="flex flex-col md:flex-row gap-4 mt-10 bg-[#427EBD]">
            <div class="md:w-2/3">
                <img class="w-full h-[200px] md:h-[500px] object-cover" src="{{ asset('images/project_2.png') }}" alt="">
            </div>
            <div class="md:w-1/3 flex flex-col justify-between my-2 md:my-8 gap-6 md:gap-10 p-4 md:p-0">
                <div>
                    <p class="text-2xl md:text-3xl font-bold text-white">Sample Project</p>
                </div>
                <div>
                    <p class="text-sm md:text-base font-normal text-white">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <a href="projects/detail">

                <div class="w-max mt-4 bg-white flex p-4 gap-4 items-center">
                    <p class="text-gray-700 font-light">Read More</p>
                    <img class="h-4 md:h-auto" src="{{ asset('images/arrow.svg') }}" alt="">
                </div>
                </a>

            </div>
        </div>

        <!-- Project 3 -->
        <div class="flex flex-col md:flex-row gap-4 mt-10 bg-[#427EBD]">
            <div class="md:w-2/3">
                <img class="w-full h-[200px] md:h-[500px] object-cover" src="{{ asset('images/project_3.png') }}" alt="">
            </div>
            <div class="md:w-1/3 flex flex-col justify-between my-2 md:my-8 gap-6 md:gap-10 p-4 md:p-0">
                <div>
                    <p class="text-2xl md:text-3xl font-bold text-white">Sample Project</p>
                </div>
                <div>
                    <p class="text-sm md:text-base font-normal text-white">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <div class="w-max mt-4 bg-white flex p-4 gap-4 items-center">
                    <p class="text-gray-700 font-light">Read More</p>
                    <img class="h-4 md:h-auto" src="{{ asset('images/arrow.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection