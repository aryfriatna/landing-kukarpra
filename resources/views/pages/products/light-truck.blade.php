@extends('layouts.app')

@section('title', 'Products-Light Truck')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-24 pb-16 bg-blue-900 text-white">
        <div class="container mx-auto px-4">
            <nav class="flex items-center space-x-1">
                <a href="{{ route('home') }}" class="hover:underline text-white font-medium">Home</a>
                <span class="text-white">/</span>
                <a href="{{ route('products') }}" class="hover:underline text-white font-medium">Products</a>
                <span class="text-white">/</span>
                <span class="text-white">Light Truck</span>
            </nav>
        </div>
        <div class="container mx-auto px-4 pt-12">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Ban Light Truck</h1>
                <p class="text-xl text-gray-300 mb-6">
                    Ban Truk Ringan Andal – Performa Optimal untuk Setiap Perjalanan
                </p>
                <div class="w-20 h-2 bg-red-500 mb-8"></div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center">Ban Light Truck</h2>
            <p class="text-gray-600 mb-12 md:text-center text-justify flex justify-center">
                Ban light truck dari Kusuma Karya Pratama dirancang untuk kendaraan niaga yang aktif di jalur distribusi.
                Daya cengkeram tinggi, usia pakai panjang, dan efisiensi bahan bakar menjadi keunggulan utama kami.
                Solusi tepat untuk pengangkutan jarak menengah hingga jauh, baik di area urban maupun semi-offroad.
            </p>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-8">
                @foreach ($products as $product)
                    <div
                        class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <div class="relative overflow-hidden h-56">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}"
                                class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" />
                            <div class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                                {{ $product['category'] }}
                            </div>
                        </div>

                        <div class="p-4 bg-blue-900">
                            <h3 class="text-xl font-bold text-white text-center">{{ $product['name'] }}</h3>
                        </div>
                    </div>
                @endforeach
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
                <a href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center px-6 py-3 border-2 border-white text-base font-medium rounded-md text-white hover:bg-white hover:text-blue-900">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>
@endsection
