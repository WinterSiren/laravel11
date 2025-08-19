@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <section class="hero-section h-[calc(100vh-125px)] flex items-center justify-center text-center">
        <div class="hero-overlay"></div>
        <div class="relative z-10 p-4 flex flex-col items-center">
            <img src="https://placehold.co/300x150/FFFFFF/000000?text=JAKARTA+PROV+CSIRT" alt="Jakarta Prov CSIRT Logo" class="w-48 md:w-64 lg:w-72 mb-4">
            <h1 class="text-2xl md:text-3xl font-bold text-white">DKI PROV CSIRT</h1>
            <p class="mt-2 max-w-xl text-gray-300 text-sm md:text-base">
                Adalah penyedia layanan tim respon insiden keamanan siber di lingkungan Pemprov DKI Jakarta
            </p>
            <a href="#" class="mt-8 bg-orange-500 text-white font-semibold py-3 px-8 rounded-md hover:bg-orange-600 transition-all duration-300 shadow-lg shadow-orange-500/20">
                LAPOR INSIDEN SIBER
            </a>
        </div>
    </section>
@endsection

@push('floating-buttons')
    <div class="fixed bottom-5 right-5 z-50 flex flex-col items-center space-y-3">
        <a href="#" class="floating-btn w-14 h-14 bg-orange-500 rounded-full flex items-center justify-center shadow-lg group">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.894 8.894 0 01-4.284-.986a.5.5 0 00-.535.053L2.24 18.76a.5.5 0 01-.68-.68l2.697-2.939a.5.5 0 00.053-.535A8.894 8.894 0 012 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.72 14.534A6.984 6.984 0 0010 16a7 7 0 007-7c0-2.94-2.24-5.5-5.166-6.322a.5.5 0 00-.668.49v.43a.5.5 0 01-.276.452A5.966 5.966 0 0010 5a6 6 0 00-6 6c0 1.31.42 2.522 1.144 3.534a.5.5 0 00.576.001z" clip-rule="evenodd" /></svg>
        </a>
        <a href="#" class="floating-btn w-14 h-14 bg-green-500 rounded-full flex items-center justify-center shadow-lg group">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.89-5.451 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01s-.521.074-.792.372c-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.626.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
        </a>
    </div>
@endpush