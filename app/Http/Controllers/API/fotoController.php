<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fotoModel;

class fotoController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $nama = $request->input('nama');
        $tanggal = $request->input('tanggal');
        $photo = $request->input('photo');

        $agenda = fotoModel::all();
        if ($id) {
            $agenda = fotoModel::findOrFail($id);

            return ResponseFormatter::success(
                $agenda,
                'Data Berhasil Di Temukan'
            );
        }

        return ResponseFormatter::success($agenda, 'Data Berhasil Di Temukan');
    }
}
