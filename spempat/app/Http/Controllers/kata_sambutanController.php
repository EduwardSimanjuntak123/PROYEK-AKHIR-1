<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\kata_Sambutan;
use Illuminate\Http\Request;

class kata_sambutanController extends Controller
{
    public function index(){
        $data = kata_Sambutan::get();
       
        return view('admin.kata_sambutan',[
            'title'=>'kata sambutan'
        ],compact('data'));
    }

    public function update(Request $request,$id){
        //dd($request->all()); menegecek masuk apa enggak
       
        $validator=Validator::make($request->all(),
       [
        'isi'=>'required',
        
      
       ]);
       if ($validator->fails()) {
        return redirect()->back()->withInput()->withErrors($validator);
    }
       //memasukkan data ke database
       
       $data['isi']= $request->isi;
       $data['isi']= $request->isi;
      
       kata_Sambutan::whereId($id)->update($data);
       
       return redirect()->route('kata_sambutan.index');

    }
}
