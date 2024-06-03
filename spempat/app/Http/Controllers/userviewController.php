<?php

namespace App\Http\Controllers;

use App\Models\about_us;
use App\Models\berita;
use App\Models\data_sarpras;
use App\Models\data_sekolah;
use App\Models\gurustaff;
use App\Models\galeri;
use App\Models\kata_Sambutan;
use App\Models\Kritik;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class userviewController extends Controller
{
    public function dashboard()
    {
        $halaman ='beranda';
        $berita = berita::get();
        $kata_sambutan = kata_Sambutan::get();
        return view('dashboarduser', compact('berita', 'halaman', 'kata_sambutan'));
    }
    public function gurustaff()
    {
        $halaman ='gurustaff';
        $gurustaff = gurustaff::Paginate(10);
        return view('gurustaff', compact('gurustaff', 'halaman'));
    }

    public function galeri()
    {
        $halaman ='galeri';
        $galeri = galeri::get();
        return view('galeri', compact('galeri', 'halaman'));
    }

    public function show_berita(string $id)
    {
        $halaman ='berita';
        $berita = berita::findOrFail($id);
        return view('show_berita',compact('berita', 'halaman'));
    }
    public function about_us()
    {
        $halaman ='about_us';
        $about_us = about_us::get();
        $berita = berita::get();
        $kritiks = Kritik::where('ditampilkan', true)->with('balasan')->get();
        return view('about_us', compact('about_us', 'halaman', 'berita','kritiks'));
    }
    public function storekritik(Request $request)
    {
        $request->validate([
            'nama' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'isi_kritik' => 'required|string',
        ]);

        Kritik::create($request->all());
        Alert::success('ulasan berhasil dikirim','Ulasan anda akan ditampilkan bila admin mengijinkannya');
        return redirect()->back();
    }
    public function fasilitas()
    {
        $halaman ='fasilitas';
        $fasilitas = data_sarpras::Paginate(6);
        return view('fasilitas', compact('fasilitas','halaman'));
    }
    public function sejarah()
    {
        $halaman ='sejarah';
        return view('sejarah',compact('halaman'));
    }
    public function visimisi()
    {
        $halaman ='visimisi';
        return view('visimisi',compact('halaman'));
    }
    public function data_sekolah()
    {
        $total_murid = DB::table('data_sekolah')
        ->select(DB::raw('SUM(jumlah_perempuan + jumlah_laki_laki) as total'))
        ->where('id', 1) // Ubah kondisi ini sesuai dengan kebutuhan Anda
        ->first();
        $total_rombel = DB::table('data_sekolah')
        ->select(DB::raw('SUM(jumlah_tingkat_7 + jumlah_tingkat_8 +jumlah_tingkat_9) as total_rombel'))
        ->where('id', 1) // Ubah kondisi ini sesuai dengan kebutuhan Anda
        ->first();
        $halaman ='data_sekolah';
        $data_sekolah = data_sekolah::get();
        $berita=berita::get();
        return view('data_Sekolah',compact('total_rombel','total_murid','data_sekolah','halaman','berita'));
    }
}
