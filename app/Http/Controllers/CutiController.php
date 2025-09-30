<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuti;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['page'] = 'Cuti';
        $data['judul_page'] = 'Page Cuti';
        $data['cutis'] = Cuti::orderBy('id', 'asc')->get();


        return view('admin.cutis.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['page'] = 'Cuti';
        $data['judul_page'] = 'Page Cuti';
        return view('admin.cutis.create', $data);
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
        Cuti::create($validated);

        return redirect()->route('cuti.index')->with('success', 'Cuti Berhasil Ditambahkan.');
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
         $data['page'] = 'Cuti';
        $data['judul_page'] = 'Edit Cuti';
         $data['cuti'] = Cuti::find($id);

        return view('admin.cutis.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
         $validated = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string',
        ]);


        // Jika Berhasil
        $cuti = Cuti::findOrFail($id);
        $cuti->update($validated);


        return redirect()->route('cuti.index')->with('success', 'Cuti berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         Cuti::destroy($id);
        return redirect()->route('cuti.index')->with('success', 'Cuti berhasil dihapus.');
    }
}
