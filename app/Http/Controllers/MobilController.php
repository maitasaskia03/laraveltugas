<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MobilController extends Controller
{
    public function index(): View
    {
        $mobils = Mobil::latest()->paginate(5);
        return view('mobils.index', compact('mobils'));
    }
    public function create(): View
    {
        return view('mobils.create');
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama'        => 'required|min:5',
            'deskripsi'   => 'required|min:10',
            'harga'       => 'required|numeric',
            'stok'        => 'required|numeric'
        ]);

        Mobil::create([
            'nama'        => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'harga'       => $request->harga,
            'stok'        => $request->stok
        ]);

        //redirect to index
        return redirect()->route('mobil.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function show(string $id): View
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobils.show', compact('mobil'));
    }
    public function edit(string $id): View

    {
        $mobil = Mobil::findOrFail($id);
        return view('mobils.edit', compact('mobil'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama'         => 'required|min:5',
            'deskripsi'   => 'required|min:10',
            'harga'         => 'required|numeric',
            'stok'         => 'required|numeric'
        ]);

        //get product by ID
        $mobil = Mobil::findOrFail($id);

        //update product
        $mobil->update([
            'nama'         => $request->nama,
            'deskripsi'   => $request->deskripsi,
            'harga'         => $request->harga,
            'stok'         => $request->stok
        ]);

        //redirect to index
        return redirect()->route('mobil.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy(string $id): RedirectResponse
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();
        $mobil->delete();

        return redirect()->route('mobil.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    

}