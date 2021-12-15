<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agendaModel;
use App\Http\Requests\agendaRequest;
use Illuminate\Support\Str;

class agendaController extends Controller
{
    public function index()
    {
        $items = agendaModel::all();
        return view('pages.agenda.index')->with([
            'items' => $items,
        ]);
    }

    public function create()
    {
        return view('pages.agenda.create');
    }
    public function store(agendaRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['photo'] = $request
            ->file('photo')
            ->store('assets/agenda', 'public');
        agendaModel::create($data);
        return redirect()->route('agenda.index');
    }
    public function edit($id)
    {
        $item = agendaModel::findOrFail($id);
        return view('pages.agenda.edit')->with(['item' => $item]);
    }
    public function update(agendaRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $item = agendaModel::findOrFail($id);
        $item->update($data);
        return redirect()->route('agenda.index');
    }

    public function destroy($id)
    {
        $item = agendaModel::findOrFail($id);
        $item->delete();

        return redirect()->route('agenda.index');
    }
}
