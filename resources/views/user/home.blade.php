@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-bold text-gray-800 mb-2">Statistik 1</h2>
            <p class="text-3xl font-semibold text-indigo-600">123</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-bold text-gray-800 mb-2">Statistik 2</h2>
            <p class="text-3xl font-semibold text-indigo-600">456</p>
        </div>
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-lg font-bold text-gray-800 mb-2">Statistik 3</h2>
            <p class="text-3xl font-semibold text-indigo-600">789</p>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-lg font-bold text-gray-800 mb-4">Selamat datang di Dashboard!</h2>
        <p class="text-gray-600">Silakan isi konten dashboard sesuai kebutuhan aplikasi.</p>
    </div>
@endsection