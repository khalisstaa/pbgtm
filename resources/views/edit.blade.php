@extends('layouts.app5')

@section('title', 'Absen')

@section('content')

<div class="container mx-auto p-6">
    <h3 class="text-2xl font-semibold mb-6">Absen for {{ $karyawan->nama }}</h3>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 p-4 rounded mb-6">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Status Edit Form -->
    <form action="{{ route('absensi.update', $karyawan->id) }}" method="POST" class="bg-white p-6 shadow-md rounded-md">
        @csrf

        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status:</label>
            <select name="status" id="status" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                <option value="Hadir" {{ $karyawan->status == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                <option value="Tidak Hadir" {{ $karyawan->status == 'Tidak Hadir' ? 'selected' : '' }}>Tidak Hadir</option>
                <option value="N/A" {{ $karyawan->status == 'N/A' ? 'selected' : '' }}>N/A</option>
            </select>
        </div>

        <button type="submit" class="mt-4 py-2 px-4 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
            Update
        </button>
    </form>
</div>
@endsection
