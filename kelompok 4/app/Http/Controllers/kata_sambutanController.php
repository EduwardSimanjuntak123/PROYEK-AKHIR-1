<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\kata_Sambutan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function updateTampilkanKeUser($id)
    {
        // Reset semua item ke false
        kata_Sambutan::query()->update(['tampilkan_ke_user' => false]);

        // Set item yang dipilih ke true
        $kataSambutan = kata_Sambutan::find($id);
        $kataSambutan->tampilkan_ke_user = true;
        $kataSambutan->save();

        return redirect()->back()->with('success', 'Status berhasil diperbarui');
    }
    public function store(Request $request)
    {
       try{
            $validator = Validator::make(
                $request->all(),
                [
                    'isi' => 'required',
                ]
            );
            if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);



            $userId = Auth::id();

            //memasukkan data ke database
            $data['isi'] = $request->isi;

            $data['user_id'] = $userId;

            kata_Sambutan::create($data);
            Alert::success('Kata Sambutan Berhasil Ditambah', 'Success Message');

            return redirect()->back();
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan dalam menginput  data data', 'Silahkan coba lagi');
            return redirect()->back()->withInput();
        }
    }
    public function delete($id)
    {
        $data = kata_Sambutan::find($id);
        $data->delete();
        Alert::success('Data Berhasil di Hapus', 'Success Message');
        return redirect()->back()->with('success', 'Kata Sambutan berhasil dihapus.');
    }
    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                ['isi' => 'required',]
            );
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }
            $data['isi'] = $request->isi;
            kata_Sambutan::whereId($id)->update($data);
            Alert::success('Data Berhasil di Update', 'Success Message');

            return redirect()->route('kata_sambutan.index');
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan saat memperbarui data', 'Silahkan coba beberapa saat lagi');
            return redirect()->back();
        }
    }
}