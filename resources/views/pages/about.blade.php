@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-24 pb-16 bg-blue-900 text-white">
        <div class="container mx-auto px-4 pt-12">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">About TirePro</h1>
                <p class="text-xl text-gray-300 mb-6">
                    A legacy of quality, service, and trust since 1995
                </p>
                <div class="w-20 h-2 bg-red-500 mb-8"></div>
                <p class="text-gray-300 mb-6">
                    At TirePro, we've been providing premium tire solutions for all vehicles for over 25 years. 
                    Our commitment to quality, safety, and customer satisfaction has made us a trusted name in the automotive industry.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="md:flex items-center gap-12">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <img 
                        src="https://images.pexels.com/photos/3807079/pexels-photo-3807079.jpeg" 
                        alt="TirePro store" 
                        class="rounded-lg shadow-lg w-full h-auto"
                    />
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-blue-900 mb-4">Our Story</h2>
                    <div class="w-16 h-1 bg-red-500 mb-6"></div>
                    <p class="text-gray-700 mb-4">
                        TirePro was founded in 1995 by John and Mary Smith, who had a vision of creating a tire shop that prioritized customer service and quality products. What started as a small family business with just three employees has grown into a nationwide chain with over 50 locations.
                    </p>
                    <p class="text-gray-700 mb-6">
                        Today, we're proud to be one of the leading tire retailers in the country, offering a wide range of products and services to meet the needs of all vehicle owners.
                    </p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-500 hover:bg-red-600">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Milestones -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-blue-900 mb-4">Our Journey</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    From our humble beginnings to becoming an industry leader, here are some key milestones in our company's history.
                </p>
            </div>

            <div class="relative">
                <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-100"></div>
                
                <div class="space-y-12">
                    @foreach($milestones as $index => $milestone)
                        <div class="relative">
                            <div class="hidden md:block absolute left-1/2 transform -translate-x-1/2 w-4 h-4 rounded-full bg-red-500 border-4 border-blue-50"></div>
                            
                            <div class="md:flex items-center {{ $index % 2 == 0 ? 'md:flex-row' : 'md:flex-row-reverse' }}">
                                <div class="md:w-1/2 mb-4 md:mb-0 md:px-8">
                                    <div class="text-center md:text-{{ $index % 2 == 0 ? 'right' : 'left' }}">
                                        <span class="text-5xl font-bold text-red-500">{{ $milestone['year'] }}</span>
                                    </div>
                                </div>
                                
                                <div class="md:w-1/2 md:px-8">
                                    <div class="bg-blue-50 p-6 rounded-lg shadow-md">
                                        <h3 class="text-xl font-bold text-blue-900 mb-2">{{ $milestone['title'] }}</h3>
                                        <p class="text-gray-700">{{ $milestone['description'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection