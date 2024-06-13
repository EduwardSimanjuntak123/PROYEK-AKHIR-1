<?php

namespace App\Http\Controllers;

use App\Models\Kritik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KritikController extends Controller
{
    public function index()
    {
        $kritiks = Kritik::with('balasan')->get();
        return view('admin.kritik.index',['title' => 'Ulasan Pengunjung'], compact('kritiks'));
    }

    // public function update(Request $request, Kritik $kritik)
    // {
    //     $kritik->update(['tampilkan' => $request->tampilkan]);
    //     return redirect()->back()->with('success', 'Ulasan telah berhasil ditampilkan');
    // }

    public function destroy($id)
    {
        $data = Kritik::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Ulasan berhasil dihapus.');
    }
    public function reply(Request $request, $id)
    {
        // Dapatkan Kritik berdasarkan ID
        $kritik = Kritik::findOrFail($id);
    
        $request->validate([
            'isi_balasan' => 'required|string',
        ]);
    
        $userId = Auth::id();
    
        // Buat balasan dengan data yang di-merge
        $kritik->balasan()->create([
            'isi_balasan' => $request->isi_balasan,
            'user_id' => $userId,
        ]);
    
        return redirect()->back()->with('success', 'Balasan berhasil dikirim.');
    }

    public function hide(Request $request, Kritik $kritik)
{
    $kritik->update(['status' => 'sembunyikan']);
    return redirect()->back()->with('success', 'Ulasan berhasil disembunyikan.');
}

public function update(Request $request, Kritik $kritik)
{
    $kritik->update(['ditampilkan' => $request->ditampilkan]);
    $message = $request->ditampilkan ? 'Ulasan berhasil ditampilkan.' : 'Ulasan berhasil disembunyikan.';
    return redirect()->back()->with('success', $message);
}
}