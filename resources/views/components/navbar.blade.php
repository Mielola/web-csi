<nav class="text-white max-sm:mb-20 fixed z-50 bg-white w-full">
    <!-- Desktop Navigation -->
    <div class="md:gap-10 lg:gap-20 xl:gap-24 py-3 max-sm:hidden md:mx-6 lg:mx-8 xl:mx-10 flex justify-between items-center">
        <!-- Logo -->
        <div class="w-[30%]">
            <img src="{{ asset('images/CSI 1.png') }}" alt="">
        </div>

        <!-- Links -->
        <div class="w-[70%] flex justify-end items-end">
            <ul class="flex justify-end lg:space-x-5 xl:space-x-10">
                @php
                $navItems = [
                ['name' => 'Home', 'route' => route('home')],
                ['name' => 'services', 'route' => route('services')],
                ['name' => 'Projects', 'route' => route('projects')],
                ['name' => 'Gallery', 'route' => route('gallery')],
                ['name' => 'Agency', 'route' => route('agency')],
                ['name' => 'contact', 'route' => route('contact')],
                ];
                $currentRoute = request()->url();
                @endphp

                @foreach ($navItems as $item)
                <li class="px-4 font-semibold relative group">
                    <a href="{{ $item['route'] }}"
                        class="py-5 px-2 uppercase block
                        {{ $currentRoute === $item['route'] ? 'border-y-2 px-4 border-[#427EBD] text-[#427EBD]' : 'text-[#427EBD]' }}">
                        {{ $item['name'] }}
                    </a>

                    <!-- Dropdown Menu -->
                    @if ($item['name'] === 'services')
                    <div class="dropdown-wrapper absolute z-40 -left-16 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-in-out">
                        <div class="pt-2">
                            <ul class="w-80 bg-white text-[#427EBD] shadow-md rounded-md">
                                <div class="grid grid-cols-2 gap-1 p-2">
                                    <li class="py-2 px-4 hover:bg-gray-100">
                                        <p class="text-xs">Cryogenic Tank and Equipment Repair</p>
                                    </li>
                                    <li class="py-2 px-4 hover:bg-gray-100">
                                        <p class="text-xs">Engineering & Fabrication</p>
                                    </li>
                                    <li class="py-2 px-4 hover:bg-gray-100">
                                        <p class="text-xs">Testing for Re-certification</p>
                                    </li>
                                    <li class="py-2 px-4 hover:bg-gray-100">
                                        <p class="text-xs">Safety Trainings and Engineering Assesment/Audit</p>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div class="md:hidden">
        <!-- Mobile Header -->
        <div class="flex justify-between px-4 pt-3 bg-white border-b-2 border-gray-300">
            <div class="flex justify-start items-center">
                <img class="w-[100px]" src="{{ asset('images/CSI 1.png') }}" alt="">
            </div>
            <div>
                <button id="hamburger" class="focus:outline-none">
                    <img class="w-[30px]" src="{{ asset('images/menu (1).png') }}" alt="">
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="menu" class="hidden bg-white">
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

<style>
    .dropdown-wrapper {
        transform: translateY(10px);
        transition: all 0.3s ease-in-out;
    }

    .group:hover .dropdown-wrapper {
        transform: translateY(0);
    }

    .group {
        padding-bottom: 5px;
    }
</style>

<script>
    document.getElementById('hamburger').addEventListener('click', () => {
        const menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    });
</script>