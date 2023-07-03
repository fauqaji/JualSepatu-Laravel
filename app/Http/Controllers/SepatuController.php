<?php

namespace App\Http\Controllers;

use App\Models\Sepatu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SepatuController extends Controller
{
    public function index()
    {
        return view('content.tambahSepatu');
    }
    public function index2()
    {
        $sepatu = Sepatu::latest()->get();
        return view('content.dataSepatu', compact('sepatu'));
    }

    public function update(Sepatu $sepatu, Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'foto' => 'image|file',
            'harga' => 'required|integer',
            'model' => 'required',
            'ukuran' => 'required|integer',
            'warna' => 'required',
        ]);

        if ($request->file('foto')) {
            if ($sepatu->foto != null) {
                Storage::delete($sepatu->foto);
            }

            $validated['foto'] = $request->file('foto')->store('foto_sepatu');
        }

        $sepatu->update($validated);

        return redirect('/datasepatu');

    }

    public function edit(Sepatu $sepatu)
    {
        return view('content.editSepatu', [
            'sepatu' => $sepatu,
        ]);
    }

    public function delete(Sepatu $sepatu)
    {
        if ($sepatu->foto != null) {
            Storage::delete($sepatu->foto);
        }
        $sepatu->delete();
        return back();

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'foto' => 'image|file',
            'harga' => 'required|integer',
            'model' => 'required',
            'ukuran' => 'required|integer',
            'warna' => 'required',
        ]);

        if ($request->file('foto')) {
            $validated['foto'] = $request->file('foto')->store('foto_sepatu');
        }

        Sepatu::create($validated);

        return back();
    }

}
