<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class galeriController extends Controller
{
    
    public function index(){
        $data = galeri::get();
       
        return view('admin.galeri',[
            'title'=>'galeri'
        ],compact('data'));
    }
    public function store(Request $request){
        $validator=Validator::make($request->all(),
        [
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
 
        $photo =$request->file('photo');
        $filename = date('Y-m-d').$photo->getClientOriginalName();//mengubah nama ke database
        $path ='img/'.$filename;
 
        Storage::disk('public')->put($path,file_get_contents($photo));

        $userId = Auth::id();
 
        //memasukkan data ke database
        
        $data['file']= $filename;
        $data['user_id']= $userId;
        galeri::create($data);
      
        return redirect()->route('galeri.index')->with('filename', $filename);
     }

     public function delete($id)
     {
         $data = galeri::find($id);
        
         if(!$data) {
             return redirect()->route('galeri.index')->with('error', 'Data not found');
         }
     
         $filename = $data->file; // Nama file yang akan dihapus
         $path = 'img/'.$filename; // Path lengkap menuju file
     
         if(Storage::disk('public')->exists($path)) {
             Storage::disk('public')->delete($path); // Menghapus file dari direktori
         }
     
         $data->delete(); // Menghapus data dari database
     
         return redirect()->route('galeri.index')->with('success', 'Foto dan data berhasil dihapus');
     }
}
