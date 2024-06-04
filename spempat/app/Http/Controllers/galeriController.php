<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class galeriController extends Controller
{

    public function index()
    {
        try {
            $data = galeri::get();

            return view('admin.galeri', [
                'title' => 'galeri'
            ], compact('data'));
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan dalam memuat halaman', 'Silahkan coba beberapa saat lagi');
            return redirect()->back()->withInput();
        }
    }
    public function store(Request $request)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]
            );
            if ($validator->fails()){
              Alert::warning('maaf terjadi kesalahan dalam menyimpan data', 'Silahkan coba  lagi');
                return redirect()->back()->withInput()->withErrors($validator);  
            }
            $photo = $request->file('photo');
            $filename = date('Y-m-d') . $photo->getClientOriginalName(); //mengubah nama ke database
            $path = 'images/' . $filename;

            Storage::disk('public')->put($path, file_get_contents($photo));

            $userId = Auth::id();

            //memasukkan data ke database

            $data['file'] = $filename;
            $data['user_id'] = $userId;
            $data['nama_galeri'] = $request->Nama_Galeri;
            galeri::create($data);
            Alert::success('Media Berhasil Ditambah', 'Success Message');

            return redirect()->route('galeri.index')->with('filename', $filename);
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan dalam menyimpan data', 'Silahkan coba  lagi');
            return redirect()->back()->withInput();
        }
    }

    public function delete($id)
    {
        try {
            $data = galeri::find($id);

            if (!$data) {
                return redirect()->route('galeri.index')->with('error', 'Data not found');
            }

            $filename = $data->file; // Nama file yang akan dihapus
            $path = 'images/' . $filename; // Path lengkap menuju file

            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path); // Menghapus file dari direktori
            }

            $data->delete(); // Menghapus data dari database

            return redirect()->route('galeri.index')->with('success', 'Foto dan data berhasil dihapus');
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan dalam menghapus data', 'Silahkan coba  lagi');
            return redirect()->back()->withInput();
        }
    }
}