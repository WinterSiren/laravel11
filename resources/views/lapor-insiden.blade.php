@extends('layouts.app')

@section('title', 'Lapor Insiden Siber')

@section('content')
    <div class="bg-gray-900 py-16">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-orange-400 mb-4">Formulir Laporan Insiden Siber</h1>
                    <p class="text-gray-400 max-w-2xl mx-auto">Gunakan formulir ini untuk melaporkan insiden keamanan siber. Harap berikan informasi sedetail mungkin agar tim kami dapat merespon dengan cepat dan tepat.</p>
                </div>

                <form action="#" method="POST" class="mt-12 bg-gray-800 p-8 rounded-lg shadow-lg space-y-6">
                    <!-- Keamanan CSRF Laravel -->
                    @csrf

                    <!-- Nama Pelapor -->
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-300 mb-1">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" required class="w-full bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Masukkan nama lengkap Anda">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Alamat Email</label>
                        <input type="email" name="email" id="email" required class="w-full bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="contoh@email.com">
                    </div>

                    <!-- Subjek Insiden -->
                    <div>
                        <label for="subjek" class="block text-sm font-medium text-gray-300 mb-1">Subjek Insiden</label>
                        <input type="text" name="subjek" id="subjek" required class="w-full bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Contoh: Situs web diretas, Akun email disusupi">
                    </div>

                    
                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-300 mb-1">Deskripsi Lengkap Insiden</label>
                        <textarea name="deskripsi" id="deskripsi" rows="6" required class="w-full bg-gray-700 border border-gray-600 rounded-md py-2 px-4 text-white focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Jelaskan kronologi kejadian, waktu, dan dampak yang ditimbulkan..."></textarea>
                    </div>

                    <!-- Lampiran Bukti -->
                    <div>
                        <label for="lampiran" class="block text-sm font-medium text-gray-300 mb-1">Lampiran Bukti (Opsional)</label>
                        <p class="text-xs text-gray-500 mb-2">Unggah tangkapan layar, file log, atau bukti lain yang relevan (Maks: 5MB).</p>
                        <input type="file" name="lampiran" id="lampiran" class="w-full text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-500 file:text-white hover:file:bg-orange-600">
                    </div>

                    <!-- Tombol Kirim -->
                    <div class="text-right pt-4">
                        <button type="submit" class="bg-orange-500 text-white font-bold py-3 px-8 rounded-md hover:bg-orange-600 transition-all duration-300 shadow-lg shadow-orange-500/20">
                            Kirim Laporan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
