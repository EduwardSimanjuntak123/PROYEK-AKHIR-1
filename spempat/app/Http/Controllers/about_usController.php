<?php

namespace App\Http\Controllers;

use App\Models\about_us;
use Illuminate\Auth\Events\Validated;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class about_usController extends Controller
{
    public function index(){
        $data = about_us::get();
        return view('admin.about_us',[
            'title'=>'About Us'
        ],compact('data'));
      
    }
    public function update(Request $request, $id) {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'email' => 'email|required', 
            'alamat' => 'required',
            'no_telepon' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    
        // Ambil data berita yang akan diupdate
        $about_us = about_us::findOrFail($id);
    
        // Hapus foto lama jika ada foto baru yang diunggah
        
    
        // Update data berita
        $about_us->email = $request->email;
        $about_us->alamat = $request->alamat;
        $about_us->no_telepon = $request->no_telepon;
        $about_us->save();
    
        return redirect()->route('about_us.index');
    }
}

