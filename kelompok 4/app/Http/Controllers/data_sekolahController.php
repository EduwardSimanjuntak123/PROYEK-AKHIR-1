<?php

namespace App\Http\Controllers;

use App\Models\data_sekolah;
use App\Models\data_siswa;
use App\Models\tahun_ajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class data_sekolahController extends Controller
{
    public function index()
    {
       
            $data = data_sekolah::get();
            $data_siswa = data_siswa::get();

            return view('admin.data_sekolah', [
                'title' => 'Data sekolah'
            ], compact('data','data_siswa'));
        
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'akreditas' => 'string|size:1',
                'operator' => 'string',
                'nama_kepala_sekolah' => 'string',
            ]
        );
        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);
        $data = [];
        if ($request->has('akreditas')) {
            $data['akreditas'] = $request->akreditas;
        }
        if ($request->has('operator')) {
            $data['operator'] = $request->operator;
        }
        if ($request->has('nama_kepala_sekolah')) {
            $data['nama_kepala_sekolah'] = $request->nama_kepala_sekolah;
        }
        
        data_sekolah::whereId($id)->update($data);
        Alert::success('Data Sekolah Berhasil di Update', 'Success Message');
        return redirect()->route('data_sekolah.index');
    }
    public function update_datasiswa(Request $request, $id)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'jumlah_laki_laki' => 'nullable|integer|min:0',
            'jumlah_perempuan' => 'nullable|integer|min:0',
            'jumlah_tingkat_7' => 'nullable|integer|min:0',
            'jumlah_tingkat_8' => 'nullable|integer|min:0',
            'jumlah_tingkat_9' => 'nullable|integer|min:0',
        ]);
    
        // Cek apakah validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Siapkan data untuk pembaruan
        $data = $request->only([
            'jumlah_laki_laki',
            'jumlah_perempuan',
            'jumlah_tingkat_7',
            'jumlah_tingkat_8',
            'jumlah_tingkat_9',
        ]);
    
        // Filter out null values to ensure only present fields are updated
        $data = array_filter($data, function($value) {
            return !is_null($value);
        });
    
        // Update data siswa jika ada perubahan
        if (!empty($data)) {
            data_siswa::whereId($id)->update($data);
            Alert::success('Data Siswa Berhasil di Update', 'Success Message');
        } else {
            Alert::info('Tidak ada perubahan data', 'Info Message');
        }
    
        return redirect()->route('data_sekolah.index');
    }
    

    public function store(Request $request)
    {
            $validator = Validator::make(
                $request->all(),
                [
                    'akreditas' => 'string|size:1',
                    'operator' => 'string',
                    'nama_kepala_sekolah' => 'string',
                ]
            );
            if ($validator->fails()) {
                Alert::warning('Sepertinya ada kesalahan pada proses menginput data', 'Silahkan coba beberapa saat lagi');
                return redirect()->back()->withInput()->withErrors($validator);
            }
    
            $userId = Auth::id();
            // Memasukkan data ke database
            $data = [
                'nama_kepala_sekolah' => $request->nama_kepala_sekolah,
                'operator' => $request->operator,
                'akreditas' => $request->akreditas,
                'user_id' => $userId,
                'tahun_ajaran_id' => $request->tahun_ajaran_id, // Mengambil nilai jabatan dari input
            ];
            data_sekolah::create($data);
            Alert::success('Data sekolah Berhasil Ditambah', 'Success Message');
            return redirect()->route('data_sekolah.index');
    }
}