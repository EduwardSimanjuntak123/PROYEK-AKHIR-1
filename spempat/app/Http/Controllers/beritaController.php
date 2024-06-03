<?php

namespace App\Http\Controllers;

use App\Models\Berita;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class beritaController extends Controller
{
    public function index(){
        $data = berita::get();
        return view('admin.berita',[
            'title'=>'Berita Terkini'
        ],compact('data'));
      
    }
    public function create(){
        return view('berita',[
            'title'=>'Berita Terkini'
        ]);
      
    }
   
   
    public function store(Request $request){
        $validator=Validator::make($request->all(),
        [
         'photo'=>'required',
         'judul'=>'required',
         'isi'=>'required|string',
        
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
 
        $photo =$request->file('photo');
        $filename = date('Y-m-d_H-i-s').$photo->getClientOriginalName();//mengubah nama ke database
        $path ='images/'.$filename;
 
        Storage::disk('public')->put($path,file_get_contents($photo));

        $userId = Auth::id();
        
        //memasukkan data ke database
        $data['judul']= $request->judul;
        $data['isi']= $request->isi;
        $data['file']= $filename;
        $data['user_id']= $userId;

        berita::create($data);
        Alert::success('Berita Berhasil di Tambah','Success Message');
        return redirect()->route('berita.index')->with('filename', $filename);
     }

     public function update(Request $request, $id) {
        // Validasi data
        $validator = Validator::make($request->all(), [
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Mengizinkan gambar kosong atau baru
            'judul' => 'required',
            'isi' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    
        // Ambil data berita yang akan diupdate
        $berita = Berita::findOrFail($id);
    
        // Hapus foto lama jika ada foto baru yang diunggah
        if ($request->hasFile('photo')) {
            $filenameLama = $berita->file;
            if ($filenameLama) {
                // Hapus foto lama dari penyimpanan
                Storage::disk('public')->delete('img/' . $filenameLama);
            }
    
            // Simpan foto baru
            $photo = $request->file('photo');
            $filenameBaru = date('Y-m-d') . $photo->getClientOriginalName();
            $pathBaru = 'img/' . $filenameBaru;
            Storage::disk('public')->put($pathBaru, file_get_contents($photo));
    
            // Update nama file foto baru dalam database
            $berita->file = $filenameBaru;
        }
    
        // Update data berita
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->save();
        Alert::success('Data Berhasil di Update','Success Message');
        return redirect()->route('berita.index');
    }
    

    
    public function delete($id)
    {
        $berita = Berita::find($id);
    
        if (!$berita) {
            return redirect()->route('berita.index')->with('error', 'Data not found');
        }
    
        $filename = $berita->file; // Nama file yang akan dihapus
        $path = 'images/' . $filename; // Path lengkap menuju file
    
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path); // Menghapus file dari direktori jika ada
        }
    
        $berita->delete(); // Menghapus data dari database
    
        return redirect()->route('berita.index')->with('success', 'Berita dan foto berhasil dihapus');
    }
}
