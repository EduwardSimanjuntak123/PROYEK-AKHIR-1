<?php

namespace App\Http\Controllers;

use App\Models\data_sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class data_sekolahController extends Controller
{
    public function index()
    {
        try {
            $data = data_sekolah::get();

            return view('admin.data_sekolah', [
                'title' => 'Data sekolah'
            ], compact('data'));
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan dalam memuat halaman', 'Silahkan coba  lagi');
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
                    'NPSN' => 'integer',
                    'status' => 'string',
                    'Bentuk_kepemilikan' => 'string',
                    'Tanggal_SK_pendirian_sekolah' => 'date',
                    'SK_pendirian_sekolah' => 'string',
                    'SK_ijin_operasional' => 'string',
                    'tanggak_SK_ijin_operasional' => 'date',
                    'status_kepemilikan' => 'string',
                    'akreditas' => 'string|size:1',
                    'operator' => 'string',
                    'nama_kepala_sekolah' => 'string',
                    'jumlah_laki_laki' => 'integer',
                    'jumlah_perempuan' => 'integer',
                    'jumlah_tingkat_7' => 'integer',
                    'jumlah_tingkat_8' => 'integer',
                    'jumlah_tingkat_9' => 'integer',
                    'status_BOS' => 'string',
                    'Waku_Penyelenggaraan' => 'string',
                    'Sumber_Listrik' => 'string',
                    'Daya_Listrik' => 'string',
                    'Kecepatan_Internet' => 'string',

                ]
            );


            if ($validator->fails()) {
                Alert::warning('maaf terjadi kesalahan dalam menginput data', 'Silahkan coba lagi');

                return redirect()->back()->withInput()->withErrors($validator);
            }

            // agar data yang dihapus adlah hanya data kolom yang ingin diedit

            $data = [];

            if ($request->has('NPSN')) {
                $data['NPSN'] = $request->NPSN;
            }

            if ($request->has('status')) {
                $data['status'] = $request->status;
            }

            if ($request->has('Bentuk_kepemilikan')) {
                $data['Bentuk_kepemilikan'] = $request->Bentuk_kepemilikan;
            }

            if ($request->has('Tanggal_SK_pendirian_sekolah')) {
                $data['Tanggal_SK_pendirian_sekolah'] = $request->Tanggal_SK_pendirian_sekolah;
            }

            if ($request->has('SK_pendirian_sekolah')) {
                $data['SK_pendirian_sekolah'] = $request->SK_pendirian_sekolah;
            }

            if ($request->has('SK_ijin_operasional')) {
                $data['SK_ijin_operasional'] = $request->SK_ijin_operasional;
            }

            if ($request->has('tanggak_SK_ijin_operasional')) {
                $data['tanggak_SK_ijin_operasional'] = $request->tanggak_SK_ijin_operasional;
            }

            if ($request->has('status_kepemilikan')) {
                $data['status_kepemilikan'] = $request->status_kepemilikan;
            }

            if ($request->has('akreditas')) {
                $data['akreditas'] = $request->akreditas;
            }

            if ($request->has('operator')) {
                $data['operator'] = $request->operator;
            }

            if ($request->has('nama_kepala_sekolah')) {
                $data['nama_kepala_sekolah'] = $request->nama_kepala_sekolah;
            }

            if ($request->has('jumlah_laki_laki')) {
                $data['jumlah_laki_laki'] = $request->jumlah_laki_laki;
            }

            if ($request->has('jumlah_perempuan')) {
                $data['jumlah_perempuan'] = $request->jumlah_perempuan;
            }

            if ($request->has('jumlah_tingkat_7')) {
                $data['jumlah_tingkat_7'] = $request->jumlah_tingkat_7;
            }

            if ($request->has('jumlah_tingkat_8')) {
                $data['jumlah_tingkat_8'] = $request->jumlah_tingkat_8;
            }

            if ($request->has('jumlah_tingkat_9')) {
                $data['jumlah_tingkat_9'] = $request->jumlah_tingkat_9;
            }

            if ($request->has('status_BOS')) {
                $data['status_BOS'] = $request->status_BOS;
            }

            if ($request->has('Waku_Penyelenggaraan')) {
                $data['Waku_Penyelenggaraan'] = $request->Waku_Penyelenggaraan;
            }

            if ($request->has('Sumber_Listrik')) {
                $data['Sumber_Listrik'] = $request->Sumber_Listrik;
            }

            if ($request->has('Daya_Listrik')) {
                $data['Daya_Listrik'] = $request->Daya_Listrik;
            }

            if ($request->has('Kecepatan_Internet')) {
                $data['Kecepatan_Internet'] = $request->Kecepatan_Internet;
            }

            data_sekolah::whereId($id)->update($data);
            Alert::success('Data Sekolah Berhasil di Update', 'Success Message');

            return redirect()->route('data_sekolah.index');
        } catch (\Exception $e) {
            Alert::warning('maaf terjadi kesalahan dalam memngedit data', 'Silahkan coba  lagi');
            return redirect()->back()->withInput();
        }
    }
}
