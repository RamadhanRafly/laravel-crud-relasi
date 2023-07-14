<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;//add Jenis Model - Data is coming from the database via Model.

class JkController extends Controller
{
    /**
     * Display a listing of the resource.
     */   
    public function index()
    {
        $jenis_kelamin = Jenis::all();
        return view ('jenis_kelamin.index')->with('jenis_kelamin',$jenis_kelamin);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis_kelamin.create');
        
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
        Jenis::create($input);

        return redirect('jenis_kelamin')->with('flash_message', 'Jenis Addedd');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jenis_kelamin = Jenis::find($id);
        return view('jenis_kelamin.show')->with('jenis_kelamin', $jenis_kelamin);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response 
     */
    public function edit(string $id)
    {
        return view('jenis_kelamin.edit')->with([
            'jenis_kelamin' => Jenis::find($id),
        ]);
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
            'jeniskelamin' => 'required',
        ]);

        $jenis_kelamin = Jenis::find($id);
        $jenis_kelamin->jeniskelamin = $request->jeniskelamin;
        $jenis_kelamin->save();

        return to_route('jenis_kelamin.index')->with('succes', 'data di tambah');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        Jenis::destroy($id);
        return redirect('jenis_kelamin')->with('flash_message', 'Jenis deleted!');
    }
}
