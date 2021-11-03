<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fotoModel;
use App\Http\Requests\fotoRequest;
use Illuminate\Support\Str;

class fotoController extends Controller
{
    public function index()
    {
        $items = fotoModel::all();
        return view('pages.dokumentasi.index')->with([
            'items' => $items,
        ]);
    }

    public function create()
    {
        return view('pages.dokumentasi.create');
    }
    public function store(fotoRequest $request)
    {
        $data = $request->all();
        $data['photo'] = $request
            ->file('photo')
            ->store('assets/dokumentasi', 'public');
        fotoModel::create($data);
        return redirect()->route('dokumentasi.index');
    }
    public function edit($id)
    {
        $item = fotoModel::findOrFail($id);
        return view('pages.dokumentasi.edit')->with(['item' => $item]);
    }
    public function update(fotoRequest $request, $id)
    {
        $data = $request->all();
        $data['photo'] = $request
            ->file('photo')
            ->store('assets/dokumentasi', 'public');
        $item = fotoModel::findOrFail($id);
        $item->update($data);
        return redirect()->route('dokumentasi.index');
    }

    public function destroy($id)
    {
        $item = fotoModel::findOrFail($id);
        $item->delete();

        return redirect()->route('dokumentasi.index');
    }
}
