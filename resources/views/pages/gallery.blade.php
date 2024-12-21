@extends('layouts.app')

@section('title', 'Gallery')
@section('content')
<section id="gallery" class="my-8 pt-4 md:my-10 mx-5 md:mx-20 items">
    <!-- Judul -->
    <div 
    data-aos="fade-right"
    data-aos-delay="500"
    data-aos-duration="1000"
    class="flex flex-col items-start md:items-start my-4 leading-none px-5 md:px-20">
        <p class="text-3xl md:text-5xl font-light text-[#BDBDBD]">Photo</p>
        <p class="text-4xl md:text-5xl font-bold text-[#427ebd]">Gallery</p>
    </div>

    <!-- Grid Galeri -->
    <div
    data-aos="fade-up"
    data-aos-delay="500"
    data-aos-duration="1000" class="grid grid-cols-3  sm:grid-cols-4 lg:grid-cols-5 gap-2 sm:gap-6 px-5 md:px-20">
        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (1).png') }}" alt="">
        </div>
        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (2).png') }}" alt="">
        </div>
        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (3).png') }}" alt="">
        </div>
        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (4).png') }}" alt="">
        </div>
        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (5).png') }}" alt="">
        </div>
        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (6).png') }}" alt="">
        </div>
        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (7).png') }}" alt="">
        </div>
        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (8).png') }}" alt="">
        </div>
        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (9).png') }}" alt="">
        </div>
        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (10).png') }}" alt="">
        </div>
        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (11).png') }}" alt="">
        </div>
        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (12).png') }}" alt="">
        </div>
        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (13).png') }}" alt="">
        </div>

        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (14).png') }}" alt="">
        </div>

        <div>
            <img class="h-full w-full object-cover" src="{{ asset('images/gallery/gallery (15).png') }}" alt="">
        </div>
    </div>

    <!-- Navigasi Halaman -->
    <!-- <div class="flex justify-center md:justify-start items-center gap-4 mt-10 px-5 md:px-20">
        <p class="text-xl md:text-2xl font-light text-[#000000]">01</p>
        <p class="text-2xl md:text-4xl font-extralight text-[#BDBDBD]">/</p>
        <p class="text-xl md:text-2xl font-light text-[#BDBDBD]">02</p>

        <img class="h-6 w-6 md:h-auto md:w-auto" src="{{ asset('images/arrowK (2).png') }}" alt="">
        <img class="h-6 w-6 md:h-auto md:w-auto" src="{{ asset('images/arrowK (1).png') }}" alt="">
    </div> -->
</section>

@endsection