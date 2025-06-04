@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    {{-- <section class="relative h-screen flex items-center">
        <div class="absolute inset-0">
            <img src="https://images.pexels.com/photos/3846205/pexels-photo-3846205.jpeg" alt="Hero background"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-blue-900/70 to-blue-900/30"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 leading-tight">
                    Drive with Confidence on Premium Tires
                </h1>
                <p class="text-xl text-gray-200 mb-8">
                    Providing quality tires and exceptional service for all vehicles since 1995
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('products') }}"
                        class="inline-flex items-center justify-center px-6 py-3 border-2 border-white text-base font-medium rounded-md text-white hover:bg-red-600">
                        Explore Our Products
                    </a>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center px-6 py-3 border-2 border-white text-base font-medium rounded-md text-white hover:bg-white hover:text-blue-900">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="relative w-full h-[90vh]">
        <div class="swiper hero-swiper h-full">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('assets/images/forklift.jpg') }}" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-center">
                        <h2 class="text-white text-4xl md:text-6xl font-bold">Ban Forklift</h2>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('assets/images/tronton.jpg') }}" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-center">
                        <h2 class="text-white text-4xl md:text-6xl font-bold">Ban Tronton</h2>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('assets/images/dump-truck.png') }}" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-center">
                        <h2 class="text-white text-4xl md:text-6xl font-bold">Ban Dump Truck</h2>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('assets/images/light-truck.jpg') }}" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-center">
                        <h2 class="text-white text-4xl md:text-6xl font-bold">Ban Light Truck</h2>
                    </div>
                </div>

            </div>

            <!-- Tombol navigasi -->
            <div class="swiper-button-prev !text-white"></div>
            <div class="swiper-button-next !text-white"></div>

            <!-- Pagination dot -->
            <div class="swiper-pagination"></div>
        </div>
    </section>


    <!-- Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Why Choose Us?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    PT Kusuma Karya Pratama menyediakan berbagai Ban seperti, Forklift, Truck Ringan, Truck sedang dan
                    truck Berat yang biasanya digunakan di bidang industrial, pertambangan, pergudangan, pertanian,
                    perkebunan, kehutanan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                {{-- <div class="text-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div
                        class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center text-red-500 mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Premium Quality</h3>
                    <p class="text-gray-600">
                        We offer only the highest quality tires from trusted brands, ensuring safety and performance.
                    </p>
                </div> --}}

                <div
                    class="bg-white rounded-lg shadow-sm dark:bg-blue-900 hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
                    <div class="flex-shrink-0">
                        <img class="rounded-t-lg w-full h-72 object-cover" src="{{ asset('assets/images/forklift.jpg') }}"
                            alt="Forklift" />
                    </div>
                    <div class="p-3 flex-grow flex items-center justify-center">
                        <a href="{{ route('products') }}" class="w-full">
                            <h5 class="text-2xl font-bold tracking-tight dark:text-white text-center">
                                Forklift
                            </h5>
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-lg shadow-sm dark:bg-blue-900 hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
                    <div class="flex-shrink-0">
                        <img class="rounded-t-lg w-full h-72 object-cover" src="{{ asset('assets/images/tronton.jpg') }}"
                            alt="Tronton" />
                    </div>
                    <div class="p-3 flex-grow flex items-center justify-center">
                        <a href="{{ route('products') }}" class="w-full">
                            <h5 class="text-2xl font-bold tracking-tight dark:text-white text-center">
                                Tronton
                            </h5>
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-lg shadow-sm dark:bg-blue-900 hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
                    <div class="flex-shrink-0">
                        <img class="rounded-t-lg w-full h-72 object-cover" src="{{ asset('assets/images/dump-truck.png') }}"
                            alt="Dump Truck" />
                    </div>
                    <div class="p-3 flex-grow flex items-center justify-center">
                        <a href="{{ route('products') }}" class="w-full">
                            <h5 class="text-2xl font-bold tracking-tight dark:text-white text-center">
                                Dump Truck
                            </h5>
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-lg shadow-sm dark:bg-blue-900 hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
                    <div class="flex-shrink-0">
                        <img class="rounded-t-lg w-full h-72 object-cover"
                            src="{{ asset('assets/images/light-truck.jpg') }}" alt="Light Truck" />
                    </div>
                    <div class="p-3 flex-grow flex items-center justify-center">
                        <a href="{{ route('products') }}" class="w-full">
                            <h5 class="text-2xl font-bold tracking-tight dark:text-white text-center">
                                Light Truck
                            </h5>
                        </a>
                    </div>
                </div>

                {{-- <div class="text-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div
                        class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center text-red-500 mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Safety First</h3>
                    <p class="text-gray-600">
                        Your safety is our priority. We provide expert advice to help you choose the right tires for your
                        needs.
                    </p>
                </div>

                <div class="text-center p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                    <div
                        class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center text-red-500 mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Fast Service</h3>
                    <p class="text-gray-600">
                        With multiple service bays and expert technicians, we get you back on the road quickly.
                    </p>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-gray-300 max-w-2xl mx-auto mb-8">
                Untuk pertanyaan dan informasi mengenai kebutuhan Ban Truck dan Forklift anda, silahkan hubungi kami.
                Kami akan melayani anda dengan senang hati.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                {{-- <a href="{{ route('products') }}"
                    class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-500 hover:bg-red-600">
                    Shop Now
                </a> --}}
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center px-6 py-3 border-2 border-white text-base font-medium rounded-md text-white hover:bg-white hover:text-blue-900">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>
@endsection
