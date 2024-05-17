<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\data_sarpras;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class data_sarprasController extends Controller
{
    public function index(){
        $data = data_sarpras::get();
       
        return view('admin.data_sarpras',[
            'title'=>'Data sarpras'
        ],compact('data'));
    }
    public function store(Request $request){
        $validator=Validator::make($request->all(),
        [
         'nama_sarpras'=>'required',
         'jumlah_sarpras'=>'required',
         
        
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
 
        

        $userId = Auth::id();
 
        //memasukkan data ke database
        $data['nama_sarpras']= $request->nama_sarpras;
        $data['jumlah_sarpras']= $request->jumlah_sarpras;
      
        $data['user_id']= $userId;
 
        data_sarpras::create($data);
      
        return redirect()->route('data_sarpras.index');
     }
     public function update(Request $request,$id){
        //dd($request->all()); menegecek masuk apa enggak
       
        $validator=Validator::make($request->all(),
       [
        'nama_sarpras'=>'required',
        'jumlah_sarpras'=>'required',
      
       ]);
       if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator);
    }
       //memasukkan data ke database
       
       if ($request->has('nama_sarpras')) {
        $data['nama_sarpras'] = $request->nama_sarpras;
    }
    
    if ($request->has('jumlah_sarpras')) {
        $data['jumlah_sarpras'] = $request->jumlah_sarpras;
    }
      
       data_sarpras::whereId($id)->update($data);
       
       return redirect()->route('data_sarpras.index');

    }

    
    public function delete($id)
    {
        $data= data_sarpras::find($id);
       
        $data = data_sarpras::findOrFail($id);
  
        $data->delete();
  
        return redirect()->route('data_sarpras.index')->with('success', 'news deleted successfully');
    }
}
