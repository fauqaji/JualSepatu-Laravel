<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    public function index()
    {
        return view('content.tambahMerk');
    }
    public function index2()
    {
        $merk = Merk::latest()->get();
        return view('content.merk', compact('merk'));
    }

    public function update(Merk $merk, Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',

        ]);

        $merk->update($validated);

        return redirect('/datamerk');

    }

    public function edit(Merk $merk)
    {
        return view('content.editMerk', [
            'merk' => $merk,
        ]);
    }

    public function delete(Merk $merk)
    {
        $merk->delete();
        return back();

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
        ]);

        Merk::create($validated);

        return back();
    }
}
