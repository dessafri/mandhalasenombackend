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

        $agenda = mentorModel::all();
        if ($id) {
            $agenda = mentorModel::findOrFail($id);

            return ResponseFormatter::success(
                $agenda,
                'Data Berhasil Di Temukan'
            );
        }

        return ResponseFormatter::success($agenda, 'Data Berhasil Di Temukan');
    }
}
