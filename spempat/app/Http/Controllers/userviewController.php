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
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class userviewController extends Controller
{
    public function dashboard()
    {
        try {
            $halaman = 'beranda';
            $berita = Berita::get();
            $kata_sambutan = kata_Sambutan::where('tampilkan_ke_user', true)->first(); // Ambil hanya item yang ditampilkan
            return view('dashboarduser', compact('berita', 'halaman', 'kata_sambutan'));
        } catch (\Exception $e) {
            // Tangani pengecualian di sini
            // Misalnya, tampilkan pesan error dan kembalikan pengguna ke halaman sebelumnya
            Alert::warning('Maaf terjadi kesalahan saat memuat halaman', 'Silahkan coba beberapa saat lagi');
    
            return redirect()->back()->withInput();
        }
    }
    public function gurustaff()
    {
        try {
            $halaman = 'gurustaff';
            $gurustaff = gurustaff::Paginate(10);
            return view('gurustaff', compact('gurustaff', 'halaman'));
        } catch (\Exception $e) {

            Alert::warning('maaf terjadi kesalahan saat memuat halaman', 'Silahkan coba beberapa saat lagi');

            return redirect()->back();
        }
    }

    public function galeri()
    {
        try {
            $halaman = 'galeri';
            $galeri = Galeri::get(); // Assuming 'Galeri' is the correct model name
    
            // Filter the gallery items by category
            $achievement = $galeri->where('kategori', 'achievement');
            $activity = $galeri->where('kategori', 'activity');
    
            // Pass the categorized data to the view
            return view('galeri', compact('halaman', 'achievement', 'activity'));
        } catch (\Exception $e) {
            Alert::warning('Maaf terjadi kesalahan saat memuat halaman', 'Silahkan coba beberapa saat lagi');
            return redirect()->back();
        }
    }

    public function show_berita(string $id)
    {
        try {
            $halaman = 'berita';
            $berita = berita::findOrFail($id);
            return view('show_berita', compact('berita', 'halaman'));
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan saat memuat halaman', 'Silahkan coba beberapa saat lagi');
            return redirect()->back();
        }
    }
    public function about_us()
    {
        try {
            $halaman = 'about_us';
            $about_us = about_us::get();
            $berita = berita::get();
            $kritiks = Kritik::where('ditampilkan', true)->with('balasan')->get();
            return view('about_us', compact('about_us', 'halaman', 'berita', 'kritiks'));
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan saat memuat halaman', 'Silahkan coba beberapa saat lagi');
            return redirect()->back();
        }
    }
    public function storekritik(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'isi_kritik' => 'required|string',
            ]
        );
        // $request->validate([
        //     
        // ]);
        if ($validator->fails()) {
            Alert::warning(' Field tidak boleh kosong!', 'Silahkan coba lagi');
            return redirect()->back()->withInput()->withErrors($validator);
        }

        Kritik::create($request->all());
        Alert::success('ulasan berhasil dikirim', 'Ulasan anda akan ditampilkan bila admin mengijinkannya');
        return redirect()->back();
    }
    public function fasilitas()
    {
        try {
            $halaman = 'fasilitas';
            $fasilitas = data_sarpras::Paginate(6);
            return view('fasilitas', compact('fasilitas', 'halaman'));
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan saat memuat halaman', 'Silahkan coba beberapa saat lagi');
            return redirect()->back();
        }
    }
    public function sejarah()
    {
        try {
            $halaman = 'sejarah';
            //$nonExistentProperty = $user->nonExistentProperty; test try catch
            return view('sejarah', compact('halaman'));
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan saat memuat halaman', 'Silahkan coba beberapa saat lagi');
            return redirect()->back();
        }
    }
    public function visimisi()
    {
        try {
            $halaman = 'visimisi';
            return view('visimisi', compact('halaman'));
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan saat memuat halaman', 'Silahkan coba beberapa saat lagi');
            return redirect()->back();
        }
    }
    public function data_sekolah()
    {
        try {
            $total_murid = DB::table('data_sekolah')
                ->select(DB::raw('SUM(jumlah_perempuan + jumlah_laki_laki) as total'))
                ->where('id', 1) // Ubah kondisi ini sesuai dengan kebutuhan Anda
                ->first();
            $total_rombel = DB::table('data_sekolah')
                ->select(DB::raw('SUM(jumlah_tingkat_7 + jumlah_tingkat_8 +jumlah_tingkat_9) as total_rombel'))
                ->where('id', 1) // Ubah kondisi ini sesuai dengan kebutuhan Anda
                ->first();
            $halaman = 'data_sekolah';
            $data_sekolah = data_sekolah::get();
            $berita = berita::get();
            return view('data_Sekolah', compact('total_rombel', 'total_murid', 'data_sekolah', 'halaman', 'berita'));
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan saat memuat halaman', 'Silahkan coba beberapa saat lagi');
            return redirect()->back();
        }
    }
}