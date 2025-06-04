@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-24 pb-16 bg-blue-900 text-white">
        <div class="container mx-auto px-4 pt-12">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Gallery</h1>
                <p class="text-xl text-gray-300 mb-6">
                    Take a visual tour of our products, services, and facilities
                </p>
                <div class="w-20 h-2 bg-red-500 mb-8">
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Category Filter -->
            <div class="flex flex-wrap justify-center mb-12 gap-3">
                @foreach($categories as $category)
                    <button class="px-4 py-2 rounded-md transition-colors bg-white text-gray-700 hover:bg-gray-100">
                        {{ $category }}
                    </button>
                @endforeach
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($images as $image)
                    <div class="overflow-hidden rounded-lg shadow-md cursor-pointer group">
                        <div class="relative overflow-hidden h-64">
                            <img 
                                src="{{ $image['src'] }}" 
                                alt="{{ $image['alt'] }}" 
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            />
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900 to-transparent opacity-0 group-hover:opacity-80 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 p-6 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="text-xl font-bold mb-2">{{ $image['title'] }}</h3>
                                <p class="text-sm text-gray-200">{{ $image['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection