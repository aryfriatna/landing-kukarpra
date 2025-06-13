@extends('layouts.app')

@section('title', '404 Not Found')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-24 pb-16 bg-blue-900 text-white">
        <div class="container mx-auto px-4 pt-12">
            <div class="max-w-4xl">
                <h1 class="text-4xl md:text-5xl font-bold mb-8">Halaman Tidak Ditemukan</h1>
                <div class="w-20 h-2 bg-red-500 mb-4"></div>
            </div>
        </div>
    </section>

    <section class="relative py-16 bg-white min-h-screen flex items-center justify-center text-center font-medium">
        <div class="container px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">404</h1>
            <p class="text-2xl md:text-3xl text-gray-700 mb-6">Oops! Halaman yang Anda cari tidak ditemukan.</p>
            <div class="w-20 h-2 bg-red-500 mb-6 mx-auto"></div>
            <p class="text-gray-700 mb-6">Halaman mungkin sudah dihapus atau alamat URL salah.</p>
            <a href="{{ route('home') }}"
                class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-500 hover:bg-red-600">
                Kembali ke Beranda
            </a>
        </div>
    </section>
@endsection
