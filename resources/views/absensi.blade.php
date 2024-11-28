@extends('layouts.app')

@section('title', 'SooMarch. Corp')

@section('content')

    <div class="text-center text-slate-500 font-semibold">
        <p id="time" class="text-lg"></p>
    </div>
    <h3 class="text-center text-2xl font-bold"> Daftar Absensi Karyawan</h3><br>
    <p class="text-center mb-6 text-slate-800">Mohon untuk mengisi absen dibawah ini :</p><br>
    <div class="overflow-x-auto">
        <table class="table-auto w-full text-center bg-white border border-gray-200">
            <thead>
                <tr class="bg-slate-200 text-gray-600 uppercase text-sm">
                    <th class="py-3 px-6">ID</th>
                    <th class="py-3 px-6">Nama</th>
                    <th class="py-3 px-6">Posisi</th>
                    <th class="py-3 px-6">Status</th>
                    <th class="py-3 px-6">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($karyawan as $k)
                    @php
                        $data = $k->getToday();
                    @endphp
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6">{{ $k->id }}</td>
                        <td class="py-3 px-6">{{ $k->nama }}</td>
                        <td class="py-3 px-6">{{ $k->posisi }}</td>
                        <td class="py-3 px-6">{{ $data ? $data->status : "N/A" }}</td>
                        <td class="py-3 px-6">
                             <button type="button"  class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"> <a href="{{ route('absensi.edit', $k->id) }}">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.133 12.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.955.955 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z"/>
                                  </svg>

                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        var timeDisplay = document.getElementById("time");

        function refreshTime() {
            var dateString = new Date().toLocaleString("id-ID", {
                timeZone: "Asia/Jakarta"
            });
            var formattedString = dateString.replace(", ", " - ");
            if (timeDisplay) {
                timeDisplay.innerHTML = formattedString;
            }
        }

        setInterval(refreshTime, 1000);
    </script>

@endsection
