<?php
namespace App\Http\Controllers;

use App\Models\Datakaryawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function home()
    {
        return view('karyawan');
    }

    public function karyawan()
    {
        $karyawan = Datakaryawan::all();
        return view('karyawan', compact("karyawan"));
    }

    public function create()
    {
        return view('createkaryawan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        Datakaryawan::create($request->all());

        return redirect()->route('karyawan')->with('success', 'Karyawan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Retrieve the specific employee data by ID
        $karyawan = Datakaryawan::findOrFail($id);
        return view('editkaryawan', compact("karyawan"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'posisi' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        $karyawan = Datakaryawan::findOrFail($id);
        $karyawan->update($request->all());

        return redirect()->route('karyawan')->with('success', 'Karyawan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $karyawan = Datakaryawan::findOrFail($id);
        $karyawan->delete();

        return redirect()->route('karyawan')->with('success', 'Karyawan berhasil dihapus.');
    }
}
