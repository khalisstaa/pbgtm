<?php

namespace App\Http\Controllers;

use App\Models\Datakaryawan;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    public function home()
    {
        return view ('home');
    }
    public function absensi()
    {
        $karyawan = Datakaryawan::all();
        return view('absensi', compact("karyawan"));
    }

    public function edit($id)
    {
        $karyawan = Datakaryawan::where('id', $id)->whereDate("created_at", "=", now())->first();

        return view('edit', compact("karyawan"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string'
        ]);

        $absensi = Karyawan::where("karyawan_id", $id)->first();
        if (!$absensi) {
            $absensi = new Karyawan;
            $absensi->karyawan_id = $id;
            $absensi->save();
        } else {
            $absensi->status = $request->status;
            $absensi->update();
            return redirect()->route('absensi')->with('error', 'Failed to update.');
        }
        return redirect()->route('absensi')->with('success', 'Status updated successfully.');
        // DB::table('karyawan')
        //     ->where('id', $id)
        //     ->update(['status' => $request->status]);

        // // Redirect back to the absensi list with a success message

    }
}
