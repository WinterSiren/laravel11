@extends('layouts.app')

@section('title', 'Event')

@section('content')
    <div class="bg-gray-900 py-16">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold text-center text-orange-400 mb-12">Agenda Event</h1>

            <!-- KITA AKAN MENGISI DAFTAR EVENT DI SINI DENGAN JAVASCRIPT -->
            <div id="event-list" class="max-w-4xl mx-auto space-y-6">
                <!-- Tampilan loading sementara -->
                <p class="text-center text-gray-400">Memuat event...</p>
            </div>
        </div>
    </div>

    <script>
        // Jalankan kode ini setelah halaman selesai dimuat
        document.addEventListener('DOMContentLoaded', function() {
            // Panggil API yang dibuat oleh teman Anda
            fetch('/api/events')
                .then(response => response.json())
                .then(data => {
                    const eventListContainer = document.getElementById('event-list');
                    
                    // Kosongkan tulisan "Memuat event..."
                    eventListContainer.innerHTML = '';

                    // Ulangi setiap event yang didapat dari API
                    data.data.forEach(event => {
                        // Buat elemen HTML baru untuk setiap event
                        const eventElement = `
                            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                                <h3 class="text-xl font-bold text-white">${event.title}</h3>
                                <p class="text-gray-400 mt-1">Tanggal: ${event.date}</p>
                                <span class="inline-block mt-3 bg-green-500 text-white text-xs font-semibold px-3 py-1 rounded-full">${event.type}</span>
                            </div>
                        `;
                        // Masukkan elemen HTML baru ke dalam container
                        eventListContainer.innerHTML += eventElement;
                    });
                })
                .catch(error => {
                    console.error('Error mengambil data event:', error);
                    document.getElementById('event-list').innerHTML = '<p class="text-center text-red-500">Gagal memuat data event.</p>';
                });
        });
    </script>
@endsection
