<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['page'] = 'Jabatan';
        $data['judul_page'] = 'List Jabatan';
        $data['jabatans'] = Jabatan::all();

        return view('admin.jabatans.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['page'] = 'Jabatan';
        $data['judul_page'] = 'Create Jabatan';

        return view('admin.jabatans.create', $data);
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
        Jabatan::create($validated);

        return redirect()->route('jabatan.index')->with('success', 'Jabatan Berhasil Ditambahkan.');
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
        //
    }
}
