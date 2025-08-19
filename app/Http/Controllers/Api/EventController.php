<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Menampilkan daftar semua event.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Untuk saat ini, kita buat data event palsu (dummy data)
        $events = [
            [
                'id' => 1,
                'title' => 'Webinar: Teknik Dasar Keamanan Siber',
                'date' => '2025-08-15',
                'type' => 'Online'
            ],
            [
                'id' => 2,
                'title' => 'Workshop: Respon Insiden Tingkat Lanjut',
                'date' => '2025-09-25',
                'type' => 'Offline'
            ],
            [
                'id' => 3,
                'title' => 'Pelatihan Keamanan Jaringan untuk Instansi',
                'date' => '2025-07-10',
                'type' => 'Offline'
            ]
        ];

        // Mengembalikan data sebagai respons JSON
        return response()->json([
            'success' => true,
            'message' => 'Daftar Event Berhasil Diambil',
            'data' => $events
        ]);
    }
}
