@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
    <div class="bg-gray-900 py-16">
        <div class="container mx-auto px-6">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-orange-400 mb-4">Hubungi Kami</h1>
                <p class="text-gray-400 max-w-2xl mx-auto">Kami siap membantu Anda. Silakan hubungi kami melalui detail di bawah ini atau kunjungi kantor kami.</p>
            </div>

            <div class="mt-12 max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-start">
                <!-- Kolom Informasi Kontak -->
                <div class="bg-gray-800 p-8 rounded-lg shadow-lg space-y-6">
                    <div>
                        <h3 class="text-xl font-semibold text-white flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            Alamat Kantor
                        </h3>
                        <!-- ALAMAT DIPERBARUI -->
                        <p class="text-gray-400 mt-2 pl-9">
                            Jl. Akasia, Tembilahan Hilir, Kec. Tembilahan, Kabupaten Indragiri Hilir, Riau 29214
                        </p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-white flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            Email
                        </h3>
                        <p class="text-gray-400 mt-2 pl-9">
                            demysutama02@gmail.com
                        </p>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-white flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                            Telepon
                        </h3>
                        <p class="text-gray-400 mt-2 pl-9">
                            0812-6212-8587
                        </p>
                    </div>
                </div>

                <!-- Kolom Peta -->
                <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden h-96">
                    <!-- KODE IFRAME PETA DIPERBARUI -->
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.288277215187!2d103.15654837583626!3d-0.3149494999999991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2841f5e371c6ed%3A0x6b150ac4120e0f1!2sM5M5%2BXJR!5e0!3m2!1sen!2sid!4v1723520698123!5m2!1sen!2sid" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
