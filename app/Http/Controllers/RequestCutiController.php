<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequestCuti;
use App\Models\Cuti;
use App\Models\User;

class RequestCutiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['page'] = 'Request Cuti';
        $data['judul_page'] = 'List Request Cuti';
        $data['request_cutis'] = RequestCuti::all();

        return view('admin.request_cutis.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['page'] = 'Request Cuti';
        $data['judul_page'] = 'Create Request Cuti';
        $data['users'] = User::all()->sortBy('name');
        $data['cutis'] = Cuti::all()->sortBy('name');

        return view('admin.request_cutis.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'cuti_id' => 'required|exists:cutis,id',
            'reason' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',


            'status' => 'required|string',
        ]);
        //         //Jika Berhasil
        RequestCuti::create($validated);

        return redirect()->route('request_cuti.index')->with('success', 'Request Cuti Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data['page'] = 'Request Cuti';
        $data['judul_page'] = 'Detail Request Cuti';
        $data['request_cutis'] = RequestCuti::find($id);
        return view('admin.request_cutis.show', $data);
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
