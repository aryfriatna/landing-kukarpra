@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="relative w-full h-[90vh]">
        <div class="swiper hero-swiper h-full">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('assets/images/forklift.jpg') }}" class="w-full h-full object-cover"
                        alt="Ban Forklift" />
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-center">
                        <h2 class="text-white text-4xl md:text-6xl font-bold">Ban Forklift</h2>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('assets/images/tronton.jpg') }}" class="w-full h-full object-cover"
                        alt="Ban Tronton" />
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-center">
                        <h2 class="text-white text-4xl md:text-6xl font-bold">Ban Tronton</h2>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('assets/images/dump-truck.png') }}" class="w-full h-full object-cover"
                        alt="Ban Dump Truck" />
                    <div class="absolute inset-0 bg-black/40"></div>
                    <div class="absolute inset-0 flex items-center justify-center text-center">
                        <h2 class="text-white text-4xl md:text-6xl font-bold">Ban Dump Truck</h2>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide relative">
                    <img src="{{ asset('assets/images/light-truck.jpg') }}" class="w-full h-full object-cover"
                        alt="Ban Light Truck" />
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
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Kenapa Memilih Kami?</h2>
                <p class="text-gray-700 max-w-2xl mx-auto text-justify lg:text-center ">
                    PT Kusuma Karya Pratama menyediakan berbagai Ban seperti, Forklift, Truck Ringan, Truck sedang dan
                    truck Berat yang biasanya digunakan di bidang industrial, pertambangan, pergudangan, pertanian,
                    perkebunan, kehutanan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <div
                    class="bg-white rounded-lg shadow-sm dark:bg-blue-900 hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
                    <div class="flex-shrink-0">
                        <img class="rounded-t-lg w-full h-72 object-cover" src="{{ asset('assets/images/forklift.jpg') }}"
                            alt="Forklift" />
                    </div>
                    <div class="p-3 flex-grow flex items-center justify-center">
                        <a href="{{ route('products') }}" class="w-full">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-200 hover:text-white text-center">
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
                            <h5 class="text-2xl font-bold tracking-tight text-gray-200 hover:text-white text-center">
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
                            <h5 class="text-2xl font-bold tracking-tight text-gray-200 hover:text-white text-center">
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
                            <h5 class="text-2xl font-bold tracking-tight text-gray-200 hover:text-white text-center">
                                Light Truck
                            </h5>
                        </a>
                    </div>
                </div>
            </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Siap untuk Memulai?</h2>
            <p class="text-white max-w-2xl mx-auto mb-8">
                Untuk pertanyaan dan informasi mengenai kebutuhan Ban Truck dan Forklift anda, silahkan hubungi kami.
                Kami akan melayani anda dengan senang hati.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center px-6 py-3 border-2 border-white text-base font-medium rounded-md text-white hover:bg-white hover:text-blue-900">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>
@endsection
