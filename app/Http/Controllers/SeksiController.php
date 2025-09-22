<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seksi;

class SeksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['page'] = 'Seksi';
        $data['judul_page'] = 'List Seksi';
        $data['seksis'] = Seksi::all();

        return view('admin.seksis.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['page'] = 'Seksi';
        $data['judul_page'] = 'Create Seksi';

        return view('admin.seksis.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string',
        ]);
        //         //Jika Berhasil
        Seksi::create($validated);

        return redirect()->route('seksi.index')->with('success', 'Seksi Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Jika Berhasil
        Seksi::destroy($id);
        return redirect()->route('seksi.index')->with('success', 'Seksi berhasil dihapus.');
    }
}
