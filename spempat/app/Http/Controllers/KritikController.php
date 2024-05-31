<?php

namespace App\Http\Controllers;

use App\Models\Kritik;
use Illuminate\Http\Request;

class KritikController extends Controller
{
    public function index()
    {
        $kritiks = Kritik::with('balasan')->get();
        return view('admin.kritik.index', compact('kritiks'));
    }

    public function update(Request $request, Kritik $kritik)
    {
        $kritik->update(['ditampilkan' => $request->ditampilkan]);
        return redirect()->back()->with('success', 'Status kritik berhasil diubah.');
    }

    public function destroy($id)
    {
        $data= Kritik::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Kritik berhasil dihapus.');
    }
    public function reply(Request $request, Kritik $kritik)
    {
        $request->validate([
            'isi_balasan' => 'required|string',
        ]);

        $kritik->balasan()->create($request->all());
        return redirect()->back()->with('success', 'Balasan berhasil dikirim.');
    }

    public function hide(Request $request, Kritik $kritik)
    {
        $kritik->update(['ditampilkan' => false]);
        return redirect()->back()->with('success', 'Kritik berhasil disembunyikan.');
    }

    
}

