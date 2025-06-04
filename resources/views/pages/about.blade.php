@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-24 pb-16 bg-blue-900 text-white">
        <div class="container mx-auto px-4 pt-12">
            <div class="max-w-4xl">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Kusuma Karya Pratama</h1>
                <p class="text-xl text-gray-300 mb-6">
                    Your Trusted Partner for Heavy Equipment Wheel System Solution.
                </p>
                <div class="w-20 h-2 bg-red-500 mb-8"></div>
                <p class="text-gray-300 mb-6">
                    Kunci kepuasan pelanggan kami terletak pada beberapa faktor diantaranya adalah keahlian dalam
                    memberikan solusi produk yang tepat guna untuk menjawab kebutuhan setiap pelanggan kami yang
                    beragam, ketersediaan produk – produk yang berkualitas dengan harga yang bersaing, dan delivery yang
                    tepat waktu demi meminimalisir down time dari alat berat Anda yang pasti akan berujung pada
                    efisiensi dan efektifitas yang maksimal.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="md:flex items-center gap-12">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img src="{{ asset('assets/images/about.jpg') }}" alt="TirePro store"
                        class="rounded-lg shadow-lg w-full h-auto" />
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-blue-900 mb-4">Our Story</h2>
                    <div class="w-16 h-1 bg-red-500 mb-6"></div>
                    <p class="text-gray-700 mb-4">
                        PT Kusuma Karya Pratama adalah perusahaan yang bergerak di bidang penyediaan berbagai jenis ban
                        Truck di Indonesia. Produk – produk kami antara lain : ban forklift, ban Truck Ringan, Truck Sedang
                        dan Truck Tronton, dan ban alat berat lainnya.
                    </p>
                    <p class="text-gray-700 mb-4">
                        PT Kusuma Karya Pratama telah dipercaya oleh berbagai perusahaan pengguna alat berat yang tersebar
                        dari Sabang sampai Merauke mulai dari yang berskala kecil, menengah, sampai perusahaan pemerintah
                        dan perusahaan multi national dalam penyediaan ban alat berat mulai dari bidang industrial,
                        konstruksi, pertambangan, pertanian, perkebunan, kehutanan, pergudangan, dan sebagainya.
                    </p>
                    <p class="text-gray-700 mb-6">
                        Kunci kepuasan pelanggan kami terletak pada beberapa faktor diantaranya adalah keahlian dalam
                        memberikan solusi produk yang tepat guna untuk menjawab kebutuhan setiap pelanggan kami yang
                        beragam, ketersediaan produk – produk yang berkualitas dengan harga yang bersaing, dan delivery yang
                        tepat waktu demi meminimalisir down time dari alat berat Anda yang pasti akan berujung pada
                        efisiensi dan efektifitas yang maksimal.
                    </p>
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-500 hover:bg-red-600">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Milestones -->
    <section class="py-16">
        <div class="container mx-auto px-4 relative h-[70vh]">
            <div class="swiper hero-swiper h-full rounded-xl">
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
        </div>
    </section>
@endsection
