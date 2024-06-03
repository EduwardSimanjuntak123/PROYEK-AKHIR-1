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
        try {
            $data = berita::get();
            return view('admin.berita', [
                'title' => 'Berita Terkini',
                'data' => $data // Mengirimkan data berita ke view
            ]);
        } catch (\Exception $e) {
            // Tangani pengecualian jika terjadi kesalahan
            Alert::warning('maaf terjadi kesalahan dalam menampilkan laman','Silahkan coba beberapa saat lagi');

            return redirect()->back();
        }
    }
    
   
    public function store(Request $request){
<<<<<<< HEAD
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
=======
        try {
            $validator=Validator::make($request->all(), [
                'photo'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'judul'=>'required',
                'isi'=>'required',
            ]);
>>>>>>> 585ceb21f4e425ec92c46e89f7fd2700638b8396
    
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }
    
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
        } catch (\Exception $e) {
            // Tangani pengecualian jika terjadi kesalahan
            Alert::warning('maaf terjadi kesalahan dalam menyimpan data','Silahkan coba beberapa saat lagi');

            return redirect()->route('berita.index');
        }
    }
    

     public function update(Request $request, $id) {
        try {
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
            return redirect()->route('berita.index');
        } catch (\Exception $e) {
            // Tangani pengecualian di sini
            // Misalnya, tampilkan pesan error dan kembalikan pengguna ke halaman sebelumnya
            Alert::warning('maaf terjadi kesalahan dalam mengupdate data','Silahkan coba beberapa saat lagi');

            return redirect()->back()->withInput();
        }
    }
    
    

    
    public function delete($id)
{
    try {
        // Temukan berita berdasarkan ID
        $berita = Berita::find($id);

        // Periksa apakah berita ditemukan
        if (!$berita) {
            return redirect()->route('berita.index')->with('error', 'Data not found');
        }

        // Ambil nama file foto
        $filename = $berita->file;

        // Hapus foto dari penyimpanan jika ada
        $path = 'images/' . $filename;
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }

        // Hapus berita dari database
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita dan foto berhasil dihapus');
    } catch (\Exception $e) {
        // Tangani pengecualian jika terjadi kesalahan
        Alert::warning('maaf terjadi kesalahan dalam menhapus data','Silahkan coba beberapa saat lagi');

        return redirect()->route('berita.index');
    }
}

}
