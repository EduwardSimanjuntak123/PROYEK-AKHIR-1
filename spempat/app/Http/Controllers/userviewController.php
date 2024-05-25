<?php

namespace App\Http\Controllers;

use App\Models\about_us;
use App\Models\berita;
use App\Models\data_sarpras;
use App\Models\data_sekolah;
use App\Models\gurustaff;
use Illuminate\Support\Facades\DB;

class userviewController extends Controller
{
    public function dashboard()
    {
        $halaman ='beranda';
        $berita = berita::get();
        return view('dashboarduser', compact('berita', 'halaman'));
    }
    public function gurustaff()
    {
        $halaman ='gurustaff';
        $gurustaff = gurustaff::Paginate(5);
        return view('gurustaff', compact('gurustaff', 'halaman'));
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
        return view('about_us', compact('about_us', 'halaman', 'berita'));
    }
    public function fasilitas()
    {
        $halaman ='fasilitas';
        $fasilitas = data_sarpras::get();
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
        $total_siswa = DB::table('data_sekolah')
        ->where('id', 2)
        ->select(DB::raw('SUM(jumlah_perempuan + jumlah_laki_laki) as total'))
        ->first();
        
        $halaman ='data_sekolah';
        $data_sekolah = data_sekolah::get();
        $berita=berita::get();
        return view('data_Sekolah',compact('total_siswa','data_sekolah','halaman','berita'));
    }
}
