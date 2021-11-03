<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mentorModel;
use App\Http\Requests\mentorRequest;
use Illuminate\Support\Str;

class mentorController extends Controller
{
    public function index()
    {
        $items = mentorModel::all();
        return view('pages.mentor.index')->with([
            'items' => $items,
        ]);
    }

    public function create()
    {
        return view('pages.mentor.create');
    }
    public function store(mentorRequest $request)
    {
        $data = $request->all();
        $data['photo'] = $request
            ->file('photo')
            ->store('assets/mentor', 'public');
        mentorModel::create($data);
        return redirect()->route('mentor.index');
    }
    public function edit($id)
    {
        $item = mentorModel::findOrFail($id);
        return view('pages.mentor.edit')->with(['item' => $item]);
    }
    public function update(mentorRequest $request, $id)
    {
        $data = $request->all();
        $data['photo'] = $request
            ->file('photo')
            ->store('assets/mentor', 'public');
        $item = mentorModel::findOrFail($id);
        $item->update($data);
        return redirect()->route('mentor.index');
    }

    public function destroy($id)
    {
        $item = mentorModel::findOrFail($id);
        $item->delete();

        return redirect()->route('mentor.index');
    }
}
