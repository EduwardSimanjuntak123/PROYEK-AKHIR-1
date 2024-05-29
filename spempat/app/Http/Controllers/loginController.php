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
        $totalDataSarpras = gurustaff::count();
        $totalDataGaleri = galeri::count();
        $totalDataGuru = gurustaff::count();
        $totalDataberita = berita::count();
       
        Alert::success('Anda Berhasil Login', 'Success Message');
        return view('admin.dashboard',[
            'title'=>'Dashboard',
            'totalDataGuru' => $totalDataGuru,
            'totalDataSarpras' => $totalDataSarpras,
            'totalDataGaleri' => $totalDataGaleri,
            'totalDataberita' => $totalDataberita

        ]);
       
    }
    

}
