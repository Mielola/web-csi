<nav class="text-white max-sm:mb-20 fixed z-50 bg-white w-full">
    <div
        class="md:gap-10 lg:gap-20 xl:gap-24 py-3 max-sm:hidden md:mx-10 lg:mx-15 xl:mx-20 flex justify-start items-center">
        <!-- Logo -->
        <div class="w-[30%]">
            <img src="{{ asset('images/CSI 1.png') }}" alt="">
        </div>

        <!-- Links -->
        <div class="w-[60%] flex justify-start items-center">
            <ul class="flex lg:space-x-5 xl:space-x-20">
                @php
                    $navItems = [
                        ['name' => 'Home', 'route' => route('home')],
                        ['name' => 'Gallery', 'route' => route('gallery')],
                        ['name' => 'Projects', 'route' => route('projects')],
                        ['name' => 'services', 'route' => route('services')],
                        ['name' => 'contact', 'route' => route('contact')],
                    ];
                    $currentRoute = request()->url(); // URL saat ini
                @endphp

                @foreach ($navItems as $item)
                    <li class="px-4 relative group">
                        <a href="{{ $item['route'] }}"
                            class="py-5 px-2 uppercase 
                                        {{ $currentRoute === $item['route'] ? 'border-y-2 px-4 border-[#427EBD] text-[#427EBD]' : 'text-[#427EBD]' }}">
                            {{ $item['name'] }}
                        </a>

                        <!-- Dropdown Menu -->
                        @if ($item['name'] === 'services')
                            <ul
                                class="absolute z-40 -left-16 top-full mt-2 w-80 bg-white text-[#427EBD] shadow-md rounded-md hidden group-hover:block">
                                <div class="grid grid-cols-2 gap-1 p-2">
                                    <li class="py-2 px-4 hover:bg-gray-100">
                                        <p class="text-xs">Cryogenic Tank and Equipment Repair</p>
                                    </li>
                                    <li class="py-2 px-4 hover:bg-gray-100">
                                        <p class="text-xs">Engineering & Fabrication</p>
                                    </li>
                                    <li class="py-2 px-4 hover:bg-gray-100">
                                        <p class="text-xs">Testing for
                                            Re-certification</p>

                                    </li>
                                    <li class="py-2 px-4 hover:bg-gray-100">
                                        <p class="text-xs">TSafety Trainings and Engineering Assesment/Audit</p>

                                    </li>
                                </div>
                            </ul>
                        @endif

                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Mobile View -->
    <div class="fixed flex flex-col w-full z-50 pb-10">
        <div class="md:hidden flex justify-between px-4 pt-3 bg-[#ffffff] border-b-2 border-gray-300">
            <div class="flex justify-start items-center">
                <img class="w-[100px]" src="{{ asset('images/CSI 1.png') }}" alt="">
            </div>

            <div>
                <!-- Hamburger Menu -->
                <button id="hamburger" class="focus:outline-none">
                    <img class="w-[30px]" src="{{ asset('images/menu (1).png') }}" alt="">
                </button>
            </div>
        </div>

        <div id="menu" class="bg-white flex flex-col justify-center items-start hidden">
            <ul class="w-full backdrop-blur-md bg-white/70 shadow-lg rounded-md">
                @foreach ($navItems as $item)
                    <li class="px-4 py-2 my-2">
                        <a href="{{ $item['route'] }}"
                            class="text-[#427EBD] relative uppercase {{ $currentRoute === $item['route'] ? 'font-bold border-[#427EBD] text-[#427EBD]' : 'text-[#427EBD]' }}">
                            {{ $item['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>

<script>
    document.getElementById('hamburger').addEventListener('click', () => {
        const menu = document.getElementById('menu');
        menu.classList.toggle('hidden'); // Toggle visibility
    });
</script>

<style>
    /* Custom CSS */
    .group:hover .group-hover\:block {
        display: block !important;
    }

    .hover\:bg-gray-100:hover {
        background-color: #f7f7f7 !important;
    }

    /* Menyembunyikan dropdown secara default */
    .group-hover\:block {
        display: none;
    }

    /* Dropdown terlihat hanya saat dihover */
    .group:hover .group-hover\:block {
        display: block;
    }
</style>