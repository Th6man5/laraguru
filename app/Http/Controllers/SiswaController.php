<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = siswa::all(); 
        
   return view('siswa.index', ['siswas' => $siswas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required'
          ]);
        
          $input = $request->all();
        
          $siswa = siswa::create($input);
         
          return back()->with('success',' Data baru berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = siswa::findOrFail($id);
   
   return view('siswa.edit', [
          'siswa' => $siswa
   ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
         ]);
               
         $siswa = siswa::find($id)->update($request->all()); 
                
         return back()->with('success',' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        
        $siswa = siswa::find($id);
        $siswa->delete();
     
        return back()->with('success',' Penghapusan berhasil.');
    }
}
