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
        <p class="text-3xl md:text-5xl font-bold text-[#BDBDBD]">Our</p>
        <p class="text-4xl md:text-5xl font-bold text-[#427ebd]">Agency</p>
    </div>

    <div class="flex justify-center items-center text-center">
<h1 class="text-3xl md:text-5xl font-bold text-[#BDBDBD]">Partners of CSI for Indonesian market</h1>
    </div>

    <div class="flex flex-row m-8 mt-10 sm:my-16 lg:my-28 xl:my-32 mx-48 justify-center items-center gap-16">

    <div class="flex  flex-col justify-between items-center">
        <img class="w-[300px] h-full" src="{{ asset('images/agency/agency (1).png') }}" alt="agency 1">
        <p class="text-center text-[#427EBD] mt-2 text:md sm:text-lg lg:text-2xl">Rental of oilfield and liquid gas equipment (T75 tanks)</p>
    </div>

    <div class="flex flex-col  justify-between items-center">
        <img class="w-[400px] h-full" src="{{ asset('images/agency/agency (2).png') }}" alt="agency 2">
        <p class="text-center text-[#427EBD] mt-2 text-md sm:text-lg lg:text-2xl">Acoustic Emission Test for Hydrogen and CNG Long tube</p>
    </div>

    </div>



    
       
</section>

@endsection