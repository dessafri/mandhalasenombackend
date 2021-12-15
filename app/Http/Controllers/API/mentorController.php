<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mentorModel;

class mentorController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $nama = $request->input('nama');
        $jabatan = $request->input('jabatan');
        $photo = $request->input('photo');

        $mentor = mentorModel::all();
        if ($id) {
            $mentor = mentorModel::findOrFail($id);

            return ResponseFormatter::success(
                $mentor,
                'Data Berhasil Di Temukan'
            );
        }
        if ($jabatan == 'Relawan' || $jabatan == 'relawan') {
            $mentor = mentorModel::whereRaw('LOWER(`jabatan`) LIKE ?', [
                $jabatan,
            ])->get();

            if ($mentor) {
                return ResponseFormatter::success(
                    $mentor,
                    'Data Berhasil Di Temukan'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data transaksi tidak ada',
                    404
                );
            }
        } else {
            $mentor = mentorModel::whereRaw(
                'LOWER(`jabatan`) NOT LIKE ?',
                'Relawan'
            )->get();

            if ($mentor) {
                return ResponseFormatter::success(
                    $mentor,
                    'Data Berhasil Di Temukan'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data transaksi tidak ada',
                    404
                );
            }
        }

        return ResponseFormatter::success($mentor, 'Data Berhasil Di Temukan');
    }
}
