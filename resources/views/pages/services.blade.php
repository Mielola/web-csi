@extends('layouts.app')

@section('title', 'Services')
@section('content')
<section id="services" class="my-10 mx-5 md:mx-20 items px-5 md:px-20">

    <!-- Judul -->
    <div class="flex flex-col items-start md:items-start my-4 mt-20 leading-none">
        <p class="text-3xl md:text-5xl font-light text-[#BDBDBD]">Company</p>
        <p class="text-4xl md:text-5xl font-bold text-[#427ebd]">services</p>
    </div>

    <div class="h-fit flex flex-col gap-10 py-8 mb-96">
        <!--Card 1 -->
        <div class="card flex flex-col lg:flex-row bg-neutral-200 justify-between">
            <div class="sm:px-14 px-5 py-8 h-full flex flex-col justify-between order-2 lg:order-1">
                <div>
                    <h1 class="sm:text-4xl text-2xl text-[#427EBD] font-bold">Cryogenic Tank and Equipment Repair</h1>
                    <ul class="list-disc p-10">
                        <li>Cryogenic tank repair</li>
                        <li>Liquid cryogenic and vacuum pump repair</li>
                    </ul>
                </div>
                <div class="w-max mt-4 bg-[#427EBD] flex p-4 gap-4 items-center">

                    <p class="text-white font-light">Read More</p>
                    <img class="h-4 md:h-auto" src="{{ asset('images/arrow.svg') }}" alt="">
                </div>

            </div>
            <img src="{{ asset('images/service (1).png') }}" alt="" class="order-1">
        </div>

        <!--Card 2 -->
        <div class="card flex flex-col lg:flex-row bg-neutral-200 justify-between">
            <div class="sm:px-14 px-5 py-8 h-full flex flex-col justify-between order-2 lg:order-1">
                <div>
                    <h1 class="sm:text-4xl text-2xl text-[#427EBD] font-bold">Engineering & Fabrication</h1>
                    <ul class="list-disc p-10">
                        <li>Installation Design </li>
                        <li>Cryogenic Tank and Installation</li>
                        <li>Regassification Unit</li>
                        <li>Gas piping and vacuum insulated pipe </li>
                        <li>Pressure Regulating System</li>
                        <li>Rack and cradles</li>
                    </ul>
                </div>
                <div class="w-max mt-4 bg-[#427EBD] flex p-4 gap-4 items-center">

                    <p class="text-white font-light">Read More</p>
                    <img class="h-4 md:h-auto" src="{{ asset('images/arrow.svg') }}" alt="">
                </div>

            </div>
            <img src="{{ asset('images/service (2).png') }}" alt="" class="order-1">
        </div>
        <!--Card 2 -->
        <div class="card flex flex-col lg:flex-row bg-neutral-200 justify-between">
            <div class="sm:px-14 px-5 py-8 h-full flex flex-col justify-between order-2 lg:order-1">
                <div>
                    <h1 class="sm:text-4xl text-2xl text-[#427EBD] font-bold">Testing for Re-certification</h1>
                    <ul class="list-disc p-10">
                        <li>Helium Leak Test (CSI) </li>
                        <li>Acoustic Emission Test (Tisec Inc)</li>
                        <li>T75 Periodic & CSC Inspection (Bureau Veritas)</li>
                    </ul>
                </div>
                <div class="w-max mt-4 bg-[#427EBD] flex p-4 gap-4 items-center">

                    <p class="text-white font-light">Read More</p>
                    <img class="h-4 md:h-auto" src="{{ asset('images/arrow.svg') }}" alt="">
                </div>

            </div>
            <img src="{{ asset('images/service (2).png') }}" alt="" class="order-1">
        </div>
        <!--Card 2 -->
        <div class="card flex flex-col lg:flex-row bg-neutral-200 justify-between">
            <div class="sm:px-14 px-5 py-8 h-full flex flex-col justify-between order-2 lg:order-1">
                <div>
                    <h1 class="sm:text-4xl text-2xl text-[#427EBD] font-bold">Testing for Re-certification</h1>
                    <ul class="list-disc p-10">
                        <li>Helium Leak Test (CSI) </li>
                        <li>Acoustic Emission Test (Tisec Inc)</li>
                        <li>T75 Periodic & CSC Inspection (Bureau Veritas)</li>
                    </ul>
                </div>
                <div class="w-max mt-4 bg-[#427EBD] flex p-4 gap-4 items-center">

                    <p class="text-white font-light">Read More</p>
                    <img class="h-4 md:h-auto" src="{{ asset('images/arrow.svg') }}" alt="">
                </div>

            </div>
            <img src="{{ asset('images/service (2).png') }}" alt="" class="order-1">
        </div>
        <!--Card 2 -->
        <div class="card flex flex-col lg:flex-row bg-neutral-200 justify-between">
            <div class="sm:px-14 px-5 py-8 h-full flex flex-col justify-between order-2 lg:order-1">
                <div>
                    <h1 class="sm:text-4xl text-2xl text-[#427EBD] font-bold">Testing for Re-certification</h1>
                    <ul class="list-disc p-10">
                        <li>Helium Leak Test (CSI) </li>
                        <li>Acoustic Emission Test (Tisec Inc)</li>
                        <li>T75 Periodic & CSC Inspection (Bureau Veritas)</li>
                    </ul>
                </div>
                <div class="w-max mt-4 bg-[#427EBD] flex p-4 gap-4 items-center">

                    <p class="text-white font-light">Read More</p>
                    <img class="h-4 md:h-auto" src="{{ asset('images/arrow.svg') }}" alt="">
                </div>

            </div>
            <img src="{{ asset('images/service (2).png') }}" alt="" class="order-1">
        </div>
    </div>



</section>
@endsection