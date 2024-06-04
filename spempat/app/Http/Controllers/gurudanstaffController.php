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

    public function index()
    {
        try {

            $data = gurustaff::Paginate(6);
            return view('admin.gurustaff', [
                'title' => 'Guru dan Staff',

            ], compact('data'));
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan dalam memuat halaman', 'Silahkan coba bebarapa saat lagi');
            return redirect()->back()->withInput();
        }
    }

    public function delete($id)
    {
        $gurustaff = Gurustaff::findOrFail($id);
        $gurustaff->delete();
        return redirect()->route('gurustaff.index');
    }

    public function store(Request $request)
    {

        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'nama_guru' => 'required',
                    'jeniskelamin' => 'required',
                ]
            );
            if ($validator->fails()) {
                Alert::warning('sepertinya ada kesalahan pada proses menginput data', 'Silahkan coba beberapa saat lagi');

                return redirect()->back()->withInput()->withErrors($validator);
            }


            $userId = Auth::id();
            //memasukkan data ke database
            $data['nama'] = $request->nama_guru;
            $data['jenis_kelamin'] = $request->jeniskelamin;
            $data['user_id'] = $userId;
            gurustaff::create($data);
            Alert::success('data Guru dan Staff Berhasil Ditambah', 'Success Message');

            return redirect()->route('gurustaff.index');
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan saat memuat data', 'Silahkan coba beberapa saat lagi');
            return redirect()->back();
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $data = Gurustaff::findOrFail($id);
            $data->nama = $request->nama_guru;
            $data->jenis_kelamin = $request->jeniskelamin;
            $data->user_id = Auth::id();
            $data->save();

            // Tampilkan pesan sukses menggunakan package SweetAlert
            Alert::success('Data Berhasil di Update', 'Success Message');

            // Redirect ke halaman index
            return redirect()->route('gurustaff.index');
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan dalam mengedit data', 'Silahkan coba  lagi');
            return redirect()->back()->withInput();
        }
    }
}
