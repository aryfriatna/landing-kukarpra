@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-24 pb-16 bg-blue-900 text-white">
        <div class="container mx-auto px-4 pt-12">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Products</h1>
                <p class="text-xl text-gray-300 mb-6">
                    Explore our wide range of high-quality tires for cars, SUVs, trucks, and more
                </p>
                <div class="w-20 h-2 bg-red-500 mb-8"></div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
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

            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($products as $product)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                        <div class="relative overflow-hidden h-56">
                            <img
                                src="{{ $product['image'] }}"
                                alt="{{ $product['name'] }}"
                                class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                            />
                            <div class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">
                                {{ $product['category'] }}
                            </div>
                        </div>
                        
                        <div class="p-5">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $product['name'] }}</h3>
                            <p class="text-lg font-semibold text-red-500 mb-3">${{ $product['price'] }}</p>
                            <p class="text-gray-600 mb-4 line-clamp-2">{{ $product['description'] }}</p>
                            
                            <div class="flex justify-between items-center">
                                <a href="#" class="inline-flex items-center justify-center px-4 py-2 border-2 border-red-500 text-red-500 font-medium rounded hover:bg-red-500 hover:text-white transition-colors">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection