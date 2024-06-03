<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\kata_Sambutan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class kata_sambutanController extends Controller
{
    public function index()
    {
        try{
            $data = kata_Sambutan::get();

        return view('admin.kata_sambutan', [
            'title' => 'kata sambutan'
        ], compact('data'));
        }
        catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan saat memuat halaman', 'Silahkan coba beberapa saat lagi');
            return redirect()->back();
        }
        
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'isi' => 'required',
                ]
            );
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }
            //memasukkan data ke database

            $data['isi'] = $request->isi;
            $data['isi'] = $request->isi;

            kata_Sambutan::whereId($id)->update($data);
            Alert::success('Data Berhasil di Update', 'Success Message');

            return redirect()->route('kata_sambutan.index');
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan saat memuat data', 'Silahkan coba beberapa saat lagi');
            return redirect()->back();
        }
    }
}