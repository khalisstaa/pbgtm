@extends('layouts.app')

@section('title', 'SooMarch. Corp')

@section('content')
<div class="text-center">
    <p id="time" class="text-lg"></p>
</div>
<h3 class="text-center text-2xl font-bold">Daftar Data Karyawan</h3><br>
<center><a href="{{ route('karyawan.create') }}" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">+ Tambah Karyawan Baru</a></center><br><br>
<p class="text-center mb-6 text-slate-800">Berikut ini adalah daftar karyawan SooMarch. Corp :</p>




<div class="overflow-x-auto"><br>
    <table class="table-auto w-full text-center bg-white border border-gray-200">
        <thead>
            <tr class="bg-slate-200 text-gray-600 uppercase text-sm">
                <th class="py-3 px-6">ID</th>
                <th class="py-3 px-6">Nama</th>
                <th class="py-3 px-6">Posisi</th>
                <th class="py-3 px-6">Kontak</th>
                <th class="py-3 px-6">Alamat</th>
                <th class="py-3 px-6">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            @foreach($karyawan as $k)
            <tr class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6">{{ $k->id }}</td>
                <td class="py-3 px-6">{{ $k->nama }}</td>
                <td class="py-3 px-6">{{ $k->posisi }}</td>
                <td class="py-3 px-6">{{ $k->kontak }}</td>
                <td class="py-3 px-6">{{ $k->alamat }}</td>

                <td class="py-3 px-6">
                    <a href="{{ route('karyawan.edit', $k->id) }}"
                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                        Edit
                    </a>

                    <form action="{{ route('karyawan.destroy', $k->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-slate-700 hover:text-white border border-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-slate-400 dark:text-slate-400 dark:hover:text-white dark:hover:bg-slate-500">
                            Delete
                        </button>
                    </form>

                </td>
            </tr>


            @endforeach
        </tbody>
    </table>
</div>



@endsection
