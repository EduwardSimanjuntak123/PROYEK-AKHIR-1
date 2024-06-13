<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class GaleriController extends Controller
{
    public function index()
    {
        try {
            $data = Galeri::get();

            return view('admin.galeri', [
                'title' => 'Galeri',
                'achievement' => $data->where('kategori', 'achievement'),
                'activity' => $data->where('kategori', 'activity'),
            ],compact('data'));
        } catch (\Exception $e) {
            Alert::warning('Maaf terjadi kesalahan dalam memuat halaman', 'Silahkan coba beberapa saat lagi');
            return redirect()->back()->withInput();
        }
    }

    public function store(Request $request)
    {
        
        $validator = Validator::make(
            $request->all(),
            [
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
                'nama_galeri' => 'required|string|max:255',
                'kategori' => 'required|in:achievement,activity',
            ]
        );

        if ($validator->fails()) {
            if ($validator->errors()->has('photo') && $validator->errors()->first('photo') == 'The photo must not be greater than 1024 kilobytes.') {
                Alert::warning('Ukuran gambar terlalu besar!', 'Maksimal ukuran gambar adalah 1MB');
            } else {
                Alert::warning('Sepertinya masih ada Field yang kosong!', 'Silahkan coba lagi');
            }
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $photo = $request->file('photo');
        $filename = date('Y-m-d') . '-' . $photo->getClientOriginalName(); //mengubah nama ke database
        $path = 'images/' . $filename;

        Storage::disk('public')->put($path, file_get_contents($photo));

        $userId = Auth::id();

        // memasukkan data ke database
        $data = [
            'file' => $filename,
            'user_id' => $userId,
            'nama_galeri' => $request->nama_galeri,
            'kategori' => $request->kategori,
        ];
      
        Galeri::create($data);
        Alert::success('Media Berhasil Ditambah', 'Success Message');

        return redirect()->route('galeri.index')->with('filename', $filename);
    }

    public function delete($id)
    {
        try {
            $data = Galeri::find($id);

            if (!$data) {
                return redirect()->route('galeri.index')->with('error', 'Data not found');
            }

            $filename = $data->file; // Nama file yang akan dihapus
            $path = 'images/' . $filename; // Path lengkap menuju file

            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path); // Menghapus file dari direktori
            }

            $data->delete(); // Menghapus data dari database
            Alert::success('Media Berhasil Dihapus', 'Success Message');

            return redirect()->route('galeri.index')->with('success', 'Foto dan data berhasil dihapus');
        } catch (\Exception $e) {
            Alert::warning('Maaf terjadi kesalahan dalam menghapus data', 'Silahkan coba  lagi');
            return redirect()->back()->withInput();
        }
    }
}