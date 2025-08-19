<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Import Http Facade

class WeatherController extends Controller
{
    /**
     * Mengambil data cuaca untuk lokasi tertentu.
     */
    public function getWeather(Request $request)
    {
        // 1. Validasi input dari pengguna
        $request->validate([
            'location' => 'required|string', // Contoh: 'London'
        ]);

        // 2. Ambil konfigurasi dari file .env
        $baseUrl = config('app.weather_api_url', env('WEATHER_API_URL'));
        $apiKey = config('app.weather_api_key', env('WEATHER_API_KEY'));

        // 3. Periksa apakah konfigurasi ada
        if (!$baseUrl || !$apiKey) {
            return response()->json(['error' => 'Konfigurasi API cuaca tidak ditemukan.'], 500);
        }

        // 4. Buat permintaan ke API eksternal menggunakan Guzzle/Http
        $response = Http::get($baseUrl . '/current.json', [
            'key' => $apiKey,
            'q' => $request->location,
            'aqi' => 'no'
        ]);

        // 5. Periksa jika permintaan berhasil
        if ($response->successful()) {
            // Kembalikan data JSON dari API eksternal
            return $response->json();
        }

        // Jika gagal, kembalikan pesan error
        return response()->json(['error' => 'Gagal mengambil data cuaca.'], $response->status());
    }
}