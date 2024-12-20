@extends('layouts.app')

@section('title', 'Contact')
@section('content')
<section id="contact" class="my-10 mx-5 md:mx-10 lg:mx-20 items">

<div class="flex flex-col md:flex-row gap-4 md:gap-10 mt-10 px-4 md:px-10 lg:px-20 items-start">
    <!-- Address Section -->
    <div  data-aos="fade-up"
    data-aos-delay="500"
    data-aos-duration="1000"
     class="w-full md:w-1/3 flex flex-col gap-4">
        <div class="flex my-4 flex-col leading-none">
            <p class="text-3xl lg:text-5xl font-light text-[#BDBDBD]">Contact</p>
            <p class="text-3xl lg:text-5xl font-bold text-[#427ebd]">Information</p>
        </div>

        <div class="flex flex-col gap-4 text-sm md:text-base">
            <p>
                <span class="font-bold text-[#427ebd]">PT. Cryo Services Indonesia</span><br />
                Jl. Raya Narogong No.Km 12, Cikiwul,<br />
                Kec. Bantar Gebang, Kota Bks,<br />
                Jawa Barat 17152
            </p>
            <p class="font-bold text-[#427ebd]">(+6221) 82595934</p>
            <p>info@csicryoservices.com</p>
        </div>

        <!-- Button to trigger modal -->
        <div class="flex bg-[#427ebd] my-8 text-white p-4 w-max cursor-pointer" id="messageButton">
            <p>Message us</p>
        </div>
    </div>

     <!-- Google Map Embed Section -->
     <div 
     data-aos="fade-left"
    data-aos-delay="500"
    data-aos-duration="1000"
    class="w-full md:w-2/3">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4761.380338168111!2d106.9764994011626!3d-6.333422880469831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69924b1eda5911%3A0x4a56ba2771dbabd0!2sJl.%20Raya%20Narogong%20No.km.12%2C%20RT.005%2FRW.001%2C%20Cikiwul%2C%20Kec.%20Bantar%20Gebang%2C%20Kota%20Bks%2C%20Jawa%20Barat%2017152!5e0!3m2!1sid!2sid!4v1733123678072!5m2!1sid!2sid"
            class="w-full h-[300px] md:h-[450px]" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

    <!-- Modal Section -->
    <div id="messageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-bold text-[#427ebd]">Message us</h2>
                <button id="closeMessageModal" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
            </div>
            <form id="contactForm" class="mt-4">
                @csrf
                <div class="mb-4">
                    <input type="text" name="name" id="name" placeholder="Name"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#427ebd]"
                        required>
                </div>
                <div class="mb-4">
                    <input type="text" name="phone" id="phone" placeholder="Phone Number"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#427ebd]"
                        required>
                </div>
                <div class="mb-4">
                    <input type="email" name="email" id="email" placeholder="Email"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#427ebd]"
                        required>
                </div>
                <div class="mb-4">
                    <textarea name="message" id="message" placeholder="Message" rows="4"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#427ebd]"
                        required></textarea>
                </div>
                <button type="button" id="submitForm"
                    class="bg-[#427ebd] text-white px-4 py-2 rounded-md w-full">Submit</button>
            </form>
        </div>
    </div>

    <!-- Modal Success -->
    <div id="successModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold text-[#427ebd] mb-4">Success!</h2>
            <p>Your message has been successfully sent. We will get back to you soon!</p>
            <button id="closeSuccessModal"
                class="bg-[#427ebd] text-white px-4 py-2 rounded-md mt-4 w-full">Close</button>
        </div>
    </div>

</section>

<script>
    // Show the contact form modal
    document.getElementById('messageButton').addEventListener('click', () => {
        document.getElementById('messageModal').classList.remove('hidden');
        document.getElementById('messageModal').classList.add('flex');
    });

    // Hide the contact form modal
    document.getElementById('closeMessageModal').addEventListener('click', () => {
        document.getElementById('messageModal').classList.add('hidden');
    });

    // Show the success modal on form submission
    document.getElementById('submitForm').addEventListener('click', () => {
        document.getElementById('messageModal').classList.add('hidden');
        document.getElementById('successModal').classList.remove('hidden');
        document.getElementById('successModal').classList.add('flex');
    });

    // Hide the success modal
    document.getElementById('closeSuccessModal').addEventListener('click', () => {
        document.getElementById('successModal').classList.add('hidden');
    });
</script>
@endsection
