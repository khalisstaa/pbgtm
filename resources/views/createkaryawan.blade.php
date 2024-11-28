@extends('layouts.app4')

@section('title', 'Tambah Karyawan')

@section('content')

<div class="container mx-auto p-6">
    <h3 class="text-center text-2xl font-bold mb-6">Tambah Data Karyawan</h3>

    <form action="{{ route('karyawan.store') }}" method="POST" class="max-w-md mx-auto bg-white p-6 border border-gray-200 rounded">
        @csrf

        <div class="mb-4">
            <label for="nama" class="block text-gray-700">Nama:</label>
            <input type="text" name="nama" id="nama" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="posisi" class="block text-gray-700">Posisi:</label>
            <input type="text" name="posisi" id="posisi" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="kontak" class="block text-gray-700">Kontak:</label>
            <input type="text" name="kontak" id="kontak" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="alamat" class="block text-gray-700">Alamat:</label>
            <textarea name="alamat" id="alamat" class="w-full p-2 border border-gray-300 rounded" required></textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Save</button>
        </div>
    </form>
</div>
@endsection
