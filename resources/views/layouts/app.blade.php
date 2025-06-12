<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Kusuma Karya Pratama') }} - @yield('title', 'Home')</title>
    <meta name="description" content="@yield('meta_description', 'Kusuma Karya Pratama menyediakan ban berkualitas dengan pelayanan terbaik.')">
    <meta name="keywords" content="@yield('meta_keywords', 'ban, tire, otomotif, layanan ban, Kusuma Karya Pratama')">
    <meta name="author" content="Kusuma Karya Pratama">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="{{ asset('assets/icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="min-h-screen flex flex-col">
    <header class="fixed w-full z-50 transition-all duration-300 bg-white shadow-md py-2">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <!-- Logo gambar mobile -->
                    <img src="{{ asset('assets/logo1.png') }}" class="w-10 h-10 mr-1 md:hidden" alt="Logo KKP">

                    <!-- Logo gambar desktop -->
                    <img src="{{ asset('assets/logo1.png') }}" class="w-12 h-12 mr-1 hidden md:block"
                        alt="Logo Kusuma Karya Pratama">

                    <div class="text-2xl font-bold flex items-center">
                        {{-- <span class="text-blue-900">Kusuma Karya <span class="text-red-500">Pratama</span></span> --}}
                        <!-- Logo teks untuk desktop -->
                        <span class="hidden md:inline text-blue-900">
                            Kusuma Karya <span class="text-red-500">Pratama</span>
                        </span>
                        <!-- Logo teks untuk mobile -->
                        <span class="inline md:hidden text-blue-900">
                            KK<span class="text-red-500">P</span>
                        </span>
                    </div>
                </a>

                @php
                    $productRoute =
                        Route::is('products') ||
                        Route::is('products.forklift') ||
                        Route::is('products.dumpTruck') ||
                        Route::is('products.lightTruck') ||
                        Route::is('products.tronton');
                @endphp

                <nav class="hidden md:flex">
                    <a href="{{ route('home') }}"
                        class="px-4 font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Home</a>
                    <a href="{{ route('about') }}"
                        class="px-4 font-medium transition-colors duration-200 {{ request()->routeIs('about') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">About</a>
                    {{-- <a href="{{ route('products') }}"
                        class="font-medium transition-colors duration-200 {{ request()->routeIs('products') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Products</a> --}}
                    <div class="relative">
                        <button id="dropdownNavbarLink"
                            class="flex items-center px-4 font-medium transition-colors duration-200 {{ $productRoute ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">
                            Products
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownNavbar"
                            class="absolute font-medium z-10 hidden bg-white divide-y divide-gray-300 rounded-lg shadow-sm w-44">
                            <div class="py-1">
                                <a href="{{ route('products') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100  {{ request()->routeIs('products') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">All
                                    Products</a>
                            </div>
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownNavbarLink">
                                <li>
                                    <a href="{{ route('products.forklift') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 {{ request()->routeIs('products.forklift') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Forklift</a>
                                </li>
                                <li>
                                    <a href="{{ route('products.dumpTruck') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 {{ request()->routeIs('products.dumpTruck') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Dump
                                        Truck</a>
                                </li>
                                <li>
                                    <a href="{{ route('products.lightTruck') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 {{ request()->routeIs('products.lightTruck') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Light
                                        Truck</a>
                                </li>
                                <li>
                                    <a href="{{ route('products.tronton') }}"
                                        class="block px-4 py-2 hover:bg-gray-100 {{ request()->routeIs('products.tronton') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Tronton</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <a href="{{ route('services') }}"
                        class="px-4 font-medium transition-colors duration-200 {{ request()->routeIs('services') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Services</a> --}}
                    {{-- <a href="{{ route('gallery') }}"
                        class="font-medium transition-colors duration-200 {{ request()->routeIs('gallery') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Gallery</a> --}}
                    <a href="{{ route('contact') }}"
                        class="px-4 font-medium transition-colors duration-200 {{ request()->routeIs('contact') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Contact</a>
                </nav>

                <button class="md:hidden text-gray-800" onclick="toggleMobileMenu()" aria-label="Toggle menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden absolute top-full left-0 w-full bg-white shadow-md py-4 px-4">
                <nav class="flex flex-col">
                    <a href="{{ route('home') }}"
                        class="py-2 font-medium {{ request()->routeIs('home') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Home</a>
                    <a href="{{ route('about') }}"
                        class="py-2 font-medium {{ request()->routeIs('about') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">About</a>
                    {{-- <a href="{{ route('products') }}"
                        class="py-2 font-medium {{ request()->routeIs('products') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Products</a> --}}
                    <div class="flex flex-col">
                        <button id="mobileProductsToggle"
                            class="flex items-center justify-between py-2 font-medium text-left {{ $productRoute ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">
                            Products
                            <svg class="w-3 h-3 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 1l4 4 4-4" />
                            </svg>
                        </button>
                        <div id="mobileProductsDropdown" class="hidden pl-4 flex flex-col font-medium">
                            <a href="{{ route('products') }}"
                                class="py-1 text-gray-700 hover:text-red-500 {{ request()->routeIs('products') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">All
                                Products</a>
                            <a href="{{ route('products.forklift') }}"
                                class="py-1 text-gray-700 hover:text-red-500 {{ request()->routeIs('products.forklift') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Forklift</a>
                            <a href="{{ route('products.dumpTruck') }}"
                                class="py-1 text-gray-700 hover:text-red-500 {{ request()->routeIs('products.dumpTruck') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Dump
                                Truck</a>
                            <a href="{{ route('products.lightTruck') }}"
                                class="py-1 text-gray-700 hover:text-red-500 {{ request()->routeIs('products.lightTruck') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Light
                                Truck</a>
                            <a href="{{ route('products.tronton') }}"
                                class="py-1 text-gray-700 hover:text-red-500 {{ request()->routeIs('products.tronton') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Tronton</a>
                        </div>
                    </div>
                    {{-- <a href="{{ route('services') }}"
                        class="py-2 font-medium {{ request()->routeIs('services') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Services</a> --}}
                    {{-- <a href="{{ route('gallery') }}"
                        class="font-medium {{ request()->routeIs('gallery') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Gallery</a> --}}
                    <a href="{{ route('contact') }}"
                        class="py-2 font-medium {{ request()->routeIs('contact') ? 'text-red-500' : 'text-gray-800 hover:text-red-500' }}">Contact</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-blue-900 text-white">
        <div class="container mx-auto px-4 py-12 md:py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="text-2xl font-bold mb-4 flex items-center">
                        <span class="text-white">Kusuma Karya <span class="text-red-500">Pratama</span></span>

                    </div>
                    <p class="text-gray-300 italic mb-4">
                        Your Trusted Partner for Heavy Equipment Wheel System Solution.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 border-b border-blue-700 pb-2">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}"
                                class="text-gray-300 hover:text-white transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}"
                                class="text-gray-300 hover:text-white transition-colors">About Us</a></li>
                        <li><a href="{{ route('products') }}"
                                class="text-gray-300 hover:text-white transition-colors">Products</a></li>
                        {{-- <li><a href="{{ route('services') }}"
                                class="text-gray-300 hover:text-white transition-colors">Services</a></li> --}}
                        {{-- <li><a href="{{ route('gallery') }}"
                                class="text-gray-300 hover:text-white transition-colors">Gallery</a></li> --}}
                        <li><a href="{{ route('contact') }}"
                                class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4 border-b border-blue-700 pb-2">Contact Us</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-red-400 mr-2 mt-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <a class="text-gray-300 hover:text-white transition-colors"
                                href="https://maps.app.goo.gl/h3PmeFRsQxm4nSDu5" target="_blank">
                                Kembang Kuning, Klapanunggal, Bogor Regency, West Java 16710
                            </a>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-red-400 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <a href="tel:+1234567890" class="text-gray-300 hover:text-white transition-colors">+62 812
                                2506 0208</a>
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 text-red-400 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <a href="mailto:ptkusumakaryapratama@gmail.com"
                                class="text-gray-300 hover:text-white transition-colors">ptkusumakaryapratama@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 pt-6 border-t border-blue-800 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} KKP. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<script>
    const swiper = new Swiper('.hero-swiper', {
        loop: true,
        autoplay: {
            delay: 5000,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Desktop
        const toggleBtn = document.getElementById('dropdownNavbarLink');
        const dropdownMenu = document.getElementById('dropdownNavbar');
        if (toggleBtn && dropdownMenu) {
            toggleBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                dropdownMenu.classList.toggle('hidden');
            });
            document.addEventListener('click', function() {
                dropdownMenu.classList.add('hidden');
            });
        }

        // Mobile
        const mobileToggleBtn = document.getElementById('mobileProductsToggle');
        const mobileDropdown = document.getElementById('mobileProductsDropdown');
        if (mobileToggleBtn && mobileDropdown) {
            mobileToggleBtn.addEventListener('click', function() {
                mobileDropdown.classList.toggle('hidden');
            });
        }
    });
</script>
@stack('scripts')

</html>
