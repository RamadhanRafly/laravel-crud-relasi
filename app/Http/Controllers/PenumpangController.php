<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penumpang;//add Penumpang Model - Data is coming from the database via Model.

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
        return view('penumpang.create');
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
        return view('penumpang.edit')->with('penumpang', $penumpang);
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
        $penumpang = Penumpang::find($id);
        $input =$request->all();
        $penumpang->update($input);
        return redirect('penumpang')->with('flash_message', 'penumpang Updated!');
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
