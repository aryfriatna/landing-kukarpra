@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-24 pb-16 bg-blue-900 text-white">
        <div class="container mx-auto px-4 pt-12">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Hubungi Kami</h1>
                <p class="text-xl text-gray-300 mb-6">
                    Kami siap membantu kebutuhan ban industri anda
                </p>
                <div class="w-20 h-2 bg-red-500 mb-8"></div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div>
                    <h2 class="text-3xl font-bold text-blue-900 mb-6">Kirim Pesan</h2>
                    <p class="text-gray-600 mb-8 text-justify">
                        Punya pertanyaan atau butuh informasi lebih lanjut? Silakan isi formulir di bawah ini dan tim kami
                        akan segera menghubungi Anda.
                    </p>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6"
                            role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap
                                    *</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-200">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email
                                    *</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-200">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon
                                    *</label>
                                <input type="tel" id="phone" name="phone" required
                                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-200">
                                @error('phone')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Topik
                                    Pesan</label>
                                <select id="subject" name="subject"
                                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-200">
                                    <option value="">Pilih Topik</option>
                                    <option value="General Inquiry">Pertanyaan Umum</option>
                                    <option value="Product Information">Informasi Produk</option>
                                    <option value="Service Request">Permintaan Layanan</option>
                                    <option value="Complaint">Keluhan</option>
                                    <option value="Other">Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan Anda
                                *</label>
                            <textarea id="message" name="message" rows="5" required
                                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-200"></textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="w-full px-6 py-3 bg-red-500 text-white font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-200">
                            Kirim Pesan
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div>
                    <h2 class="text-3xl font-bold text-blue-900 mb-6">Informasi Kontak</h2>
                    <p class="text-gray-600 mb-8 text-justify">
                        Kunjungi kantor kami, hubungi kami melalui telepon atau email. Kami selalu siap membantu Anda dengan
                        senang hati.
                    </p>

                    <div class="bg-white p-6 rounded-lg shadow-md space-y-6">
                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-4 mt-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-blue-900 mb-1">Lokasi Kantor</h3>
                                <a href="https://maps.app.goo.gl/h3PmeFRsQxm4nSDu5" target="_blank">
                                    <p class="text-gray-700">Kembang Kuning, Klapanunggal, Bogor Regency</p>
                                    <p class="text-gray-700">West Java, 16710</p>
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-4 mt-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-blue-900 mb-1">Telepon & Whatsapp</h3>
                                <p class="text-gray-700">Utama: +62 812 2506 0208</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg class="w-5 h-5 text-red-500 mr-4 mt-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <h3 class="text-lg font-semibold text-blue-900 mb-1">Email</h3>
                                <p class="text-gray-700">ptkusumakaryapratama01@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="bg-gray-200 rounded-lg h-96 flex items-center justify-center">
                <iframe class="rounded w-full h-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d876.3066288220346!2d106.94070679266153!3d-6.435841212329784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69950014676fdf%3A0x627bd3c203a54f04!2sPT%20KUSUMA%20KARYA%20PRATAMA!5e1!3m2!1sen!2sid!4v1749024422332!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection
