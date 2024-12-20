@extends('layouts.app')

@section('title', 'projects')
@section('content')

<section id="ourproject" class="flex flex-col my-10 mx-5 md:mx-10 lg:mx-20 items px-5 ">
    <!-- Judul -->
    <div
    data-aos="fade-right"
    data-aos-delay="500"
    data-aos-duration="1000"
     class="flex flex-col items-start md:items-start my-4 leading-none">
        <p class="text-3xl md:text-5xl font-light text-[#BDBDBD]">Sample</p>
        <p class="text-4xl md:text-5xl font-bold text-[#427ebd]">Project 1</p>
    </div>

    <div>
        <img class="w-full h-full object-cover" src="{{ asset('images/image 33.png') }}" alt="">
    </div>

    <div class="flex flex-col w-full md:flex-row gap-4  mt-10">
        <div class="w-full lg:w-1/3">
            <img class="w-full h-[350px] object-cover" src="{{ asset('images/image 34.png') }}" alt="">
        </div>

        <div class="w-full lg:w-2/3 text-justify text-[#427EBD]">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with.</p>
        </div>

    </div>

    <div class="mt-10">
        <img class="w-full h-full object-cover" src="{{ asset('images/image 35.png') }}" alt="">
    </div>

 
</section>

@endsection