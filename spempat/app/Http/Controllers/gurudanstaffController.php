<?php

namespace App\Http\Controllers;

use App\Models\gurustaff;
use App\Models\role_guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class gurudanstaffController extends Controller
{
    public function index()
    {
        try {
            $data = Gurustaff::join('role_guru', 'gurustaff.jabatan_id', '=', 'role_guru.id')
            ->select('gurustaff.*', 'role_guru.jabatan')
            ->get(); 
            $roles = Role_guru::all(); 
            return view('admin.gurustaff', [
                'title' => 'Guru dan Staff',
                'data' => $data, 
                'roles' => $roles, 
            ]);
        } catch (\Exception $e) {
            Alert::warning('Maaf terjadi kesalahan dalam memuat halaman', 'Silakan coba beberapa saat lagi');
            return redirect()->back()->withInput();
        }
    }

    public function delete($id)
    {
        $gurustaff = Gurustaff::findOrFail($id);
        $gurustaff->delete();
        Alert::success('data Guru dan Staff Berhasil Dihapus', 'Success Message');
        return redirect()->route('gurustaff.index');
    }

    public function store(Request $request)
{
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required',
                'NIP' => 'required',
                'jenis_kelamin' => 'required',
                'jabatan_id' => 'required', // Pastikan validasi untuk jabatan
            ]
        );
        if ($validator->fails()) {
            Alert::warning('Sepertinya ada kesalahan pada proses menginput data', 'Silahkan coba beberapa saat lagi');
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $userId = Auth::id();
        // Memasukkan data ke database
        $data = [
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'NIP' => $request->NIP,
            'user_id' => $userId,
            'jabatan_id' => $request->jabatan_id, // Mengambil nilai jabatan dari input
        ];
        Gurustaff::create($data);
        Alert::success('Data Guru dan Staff Berhasil Ditambah', 'Success Message');
        return redirect()->route('gurustaff.index');
}
    public function jabatan_store(Request $request)
    {

        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'jabatan' => 'required',
                ]
            );
            if ($validator->fails()) {
                Alert::warning('sepertinya ada kesalahan pada proses menginput data', 'Silahkan coba beberapa saat lagi');

                return redirect()->back()->withInput()->withErrors($validator);
            }


            $userId = Auth::id();
            //memasukkan data ke database
            $data['jabatan'] = $request->jabatan;


            role_guru::create($data);
            Alert::success('data jabatan Berhasil Ditambah', 'Success Message');

            return redirect()->route('gurustaff.index');
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan saat memuat data', 'Silahkan coba beberapa saat lagi');
            return redirect()->back();
        }
    }


    public function update(Request $request, $id)
    {
        
            // Ambil data guru staff berdasarkan ID
            $data = Gurustaff::findOrFail($id);
    
            // Update data dengan nilai yang diterima dari request
            $data->nama = $request->nama_guru;
            $data->NIP = $request->NIP;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->jabatan_id = $request->jabatan_id;
            $data->user_id = Auth::id();
    
            // Simpan perubahan
            $data->save();
    
            // Tampilkan pesan sukses menggunakan package SweetAlert
            Alert::success('Data Berhasil di Update', 'Success Message');
    
            // Redirect ke halaman index
            return redirect()->route('gurustaff.index');
        // } catch (\Exception $e) {
        //     // Tangani kesalahan jika terjadi
        //     Alert::warning('Maaf, terjadi kesalahan dalam mengedit data', 'Silahkan coba lagi');
        //     return redirect()->back()->withInput();
        // }
    }
}