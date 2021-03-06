<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\agendaModel;
use Illuminate\Contracts\Support\Jsonable;

class agendaController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $title = $request->input('title');
        $slug = $request->input('slug');
        $keterangan = $request->input('Keterangan');
        $photo = $request->input('photo');
        $tanggal = $request->input('tanggal');

        if ($id) {
            $agenda = agendaModel::findOrFail($id)->first();

            return ResponseFormatter::success(
                $agenda,
                'Data Berhasil Di Temukan'
            );
        }
        $agenda = agendaModel::all();

        return ResponseFormatter::success($agenda, 'Data Berhasil Di Temukan');
    }
}
