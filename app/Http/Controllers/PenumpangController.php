<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penumpang;//add Penumpang Model - Data is coming from the database via Model.
use App\Models\Jenis;
class PenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penumpang = Penumpang::all();
        return view ('penumpang.index')->with('penumpang',$penumpang);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis_kelamin = Jenis::all();
        return view('penumpang.create', compact('jenis_kelamin'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input =$request->all();
        Penumpang::create($input);

        return redirect('penumpang')->with('flash_message', 'Penumpang Addedd');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penumpang = Penumpang::find($id);
        return view('penumpang.show')->with('penumpang', $penumpang);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response 
     */
    public function edit(string $id)
    {
        $penumpang = Penumpang::find($id);
        $jenis_kelamin = Jenis::all();

        // return view('penumpang.edit')->with('penumpang', $penumpang);
        return view('penumpang.edit', compact('jenis_kelamin','penumpang'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'no_telp' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $penumpang = Penumpang::find($id);
        $penumpang ->nama = $request->nama;
        $penumpang ->no_telp = $request->no_telp;
        $penumpang ->jenis_kelamin = $request->jenis_kelamin;
        $penumpang ->save();

        return to_route('penumpang.index')->with('success', 'Data Di Tambah');
    }
    
    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        Penumpang::destroy($id);
        return redirect('penumpang')->with('flash_message', 'Penumpang deleted!');
    }
}
