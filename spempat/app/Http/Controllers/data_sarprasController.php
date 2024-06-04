<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\data_sarpras;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class data_sarprasController extends Controller
{
    public function index()
    {
        try {
            $data = data_sarpras::get();

            return view('admin.data_sarpras', [
                'title' => 'Data Sarpras'
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
                    'nama_sarpras' => 'required',
                    'jumlah_sarpras' => 'required',


                ]
            );
            if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);



            $userId = Auth::id();

            //memasukkan data ke database
            $data['nama_sarpras'] = $request->nama_sarpras;
            $data['jumlah_sarpras'] = $request->jumlah_sarpras;

            $data['user_id'] = $userId;

            data_sarpras::create($data);
            Alert::success('Sarpras Berhasil Ditambah', 'Success Message');

            return redirect()->route('data_sarpras.index');
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan dalam menginput  data data', 'Silahkan coba lagi');
            return redirect()->back()->withInput();
        }
    }
    public function update(Request $request, $id)
    {
        //dd($request->all()); menegecek masuk apa enggak
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'nama_sarpras' => 'required',
                    'jumlah_sarpras' => 'required',
                ]
            );
            if ($validator->fails()) {
                // Alert::warning('maaf terjadi kesalahan dalam mengupdate data', 'coba kembali');
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
            Alert::success('Data Berhasil di Update', 'Success Message');
            return redirect()->route('data_sarpras.index');
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan dalam mengupdate data', 'Silahkan coba beberapa saat lagi');
            return redirect()->back()->withInput();
        }
    }


    public function delete($id)
    {
        try {
            $data = data_sarpras::find($id);

            $data = data_sarpras::findOrFail($id);

            $data->delete();

            return redirect()->route('data_sarpras.index')->with('success', 'news deleted successfully');
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan dalam mengupdate data', 'Silahkan coba beberapa saat lagi');
            return redirect()->back()->withInput();
        }
    }
}
