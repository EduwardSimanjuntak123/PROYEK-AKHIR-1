<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\galeri;
use App\Models\gurustaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class loginController extends Controller
{
    public function index(){
        try{
           $totalDataSarpras = gurustaff::count();
        $totalDataGaleri = galeri::count();
        $totalDataGuru = gurustaff::count();
        $totalDataberita = berita::count();
       
        Alert::success('Anda Berhasil Login', 'Success Message');
        return view('admin.dashboard',[
            'title'=>'Beranda',
            'totalDataGuru' => $totalDataGuru,
            'totalDataSarpras' => $totalDataSarpras,
            'totalDataGaleri' => $totalDataGaleri,
            'totalDataberita' => $totalDataberita

        ]); 
        }catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan dalam memuat halaman', 'Silahkan coba beberapa lagi');
            return redirect()->back()->withInput();
        }
        
       
    }
    

}