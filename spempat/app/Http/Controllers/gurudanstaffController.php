<?php

namespace App\Http\Controllers;

use App\Models\gurustaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class gurudanstaffController extends Controller
{
    
    public function index(){
        try {
          
            $data = gurustaff::Paginate(6);
           
           
            return view('admin.gurustaff',[
                'title'=>'Guru dan Staff',
                
            ],compact('data'));
        } catch (\Exception $e) {
            
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $gurustaff = gurustaff::findOrFail($id);
    
            // Hapus foto terkait jika ada
            if (!empty($gurustaff->file)) {
                $path = 'images/' . $gurustaff->file;
    
                if (Storage::disk('public')->exists($path)) {
                    Storage::disk('public')->delete($path);
                }
            }
    
            $gurustaff->delete();
    
            return redirect()->route('gurustaff.index')->with('success', 'Data guru/staff berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function store(Request $request){

           
            $validator=Validator::make($request->all(),
            [
             'photo'=>'required',
             'nama_guru'=>'required',
             'jeniskelamin'=>'required',
             'tanggallahir'=>'required',
             'alamat_lahir'=>'required',
            ]);
            if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
     
            $photo =$request->file('photo');
            $filename = date('Y-m-d').$photo->getClientOriginalName();//mengubah nama ke database
            $path ='img/'.$filename;
     
            Storage::disk('public')->put($path,file_get_contents($photo));
    
            $userId = Auth::id();
           
            //memasukkan data ke database
            $data['nama']= $request->nama_guru;
            $data['isi']= $request->isi;
            $data['jenis_kelamin']= $request->jeniskelamin;
            $data['tanggallahir']= $request->tanggallahir;
            $data['alamat_lahir']= $request->alamat_lahir;
            $data['file']= $filename;
            $data['user_id']= $userId;
     
            gurustaff::create($data);
       Alert::success('data Guru dan Staff Berhasil Ditambah','Success Message');
          
            return redirect()->route('gurustaff.index')->with('filename', $filename);
        }

        public function update(Request $request, $id) {
            // Validasi data
          
            // Jika validasi gagal, kembalikan ke halaman sebelumnya dengan error
          
        
            // Ambil data guru/staff yang akan diupdate
            $data = Gurustaff::findOrFail($id);
        
            // Hapus foto lama jika ada foto baru yang diunggah
            if ($request->hasFile('photo')) {
                $filenameLama = $data->file;
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
                $data->file = $filenameBaru;
            }
        
            // Update data guru/staff
            $data->nama = $request->nama_guru;
          

            $data->jenis_kelamin = $request->jeniskelamin;
            $data->tanggallahir = $request->tanggallahir;
            $data->alamat_lahir = $request->alamat_lahir;
            // Hapus baris ini karena `$filenameBaru` mungkin tidak didefinisikan jika tidak ada file baru yang diunggah
            // $data->file = $filenameBaru;
            $data->user_id = Auth::id();
            $data->save();
        
            // Tampilkan pesan sukses menggunakan package SweetAlert
            Alert::success('Data Berhasil di Update', 'Success Message');
        
            // Redirect ke halaman index
            return redirect()->route('gurustaff.index');
        }
    
    
}
