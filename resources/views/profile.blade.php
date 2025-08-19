@extends('layouts.app')

@section('title', 'Profil')

@section('content')
    <div class="bg-gray-900 py-16">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold text-center text-orange-400 mb-8">Profil Kami</h1>
            <div class="max-w-4xl mx-auto bg-gray-800 p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-white mb-4">Visi & Misi</h2>
                <p class="text-gray-300 mb-6 leading-relaxed">
                    Menjadi tim respon insiden keamanan siber yang terpercaya dan proaktif dalam menjaga keamanan infrastruktur digital di lingkungan Pemprov DKI Jakarta. Misi kami adalah memberikan respon yang cepat dan efektif terhadap insiden siber, meningkatkan kesadaran keamanan, dan berkolaborasi dengan berbagai pihak untuk menciptakan ekosistem digital yang aman.
                </p>
                <h2 class="text-2xl font-semibold text-white mb-4">Struktur Organisasi</h2>
                <p class="text-gray-300 mb-6 leading-relaxed">
                    Tim kami terdiri dari para profesional keamanan siber dengan berbagai spesialisasi, termasuk analis keamanan, investigator forensik digital, dan spesialis respon insiden. Dipimpin oleh seorang kepala CSIRT, tim kami bekerja secara terstruktur untuk menangani setiap laporan yang masuk.
                </p>
                <img src="https://placehold.co/800x400/1F2937/FFFFFF?text=Gambar+Struktur+Organisasi" alt="Struktur Organisasi" class="rounded-lg w-full mt-4">
            </div>
        </div>
    </div>
@endsection