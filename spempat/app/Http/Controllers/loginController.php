<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\data_sarpras;
use App\Models\galeri;
use App\Models\gurustaff;
use App\Models\tahun_ajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use RealRashid\SweetAlert\Facades\Alert;

class loginController extends Controller
{
    public function index(){
        try{
           $totalDataSarpras = data_sarpras::count();
        $totalDataGaleri = galeri::count();
        $totalDataGuru = gurustaff::count();
        $totalDataberita = berita::count();
       
        // Alert::success('Anda Berhasil Login', 'Success Message');
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
    public function tahun_ajaran_store(Request $request){

            $validator = Validator::make(
                $request->all(),
                [
                    'tahun_ajaran' => 'required',
        
                ]
            );
            if ($validator->fails()) {
                Alert::warning('data tidak boleh kosong', 'Silahkan masukkan data');

                return redirect()->back()->withInput()->withErrors($validator);
            }


   
            //memasukkan data ke database
            $data['tahun_ajaran'] = $request->tahun_ajaran;

            tahun_ajaran::create($data);
            Alert::success('data Guru dan Staff Berhasil Ditambah', 'Success Message');

            return redirect()->back();
        }
            
    }
    