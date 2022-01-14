<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal;
use App\Models\guru;
use App\Models\ruangan;
use App\Models\kelas;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = jadwal::join('gurus', 'gurus.id', '=', 'jadwals.id_guru')
        ->join('kelas','kelas.id','=','jadwals.id_kelas')
        ->join('ruangans', 'ruangans.id','=','jadwals.id_ruangan')
        ->get(['jadwals.*','gurus.nama as nama_guru','kelas.nama as nama_kelas','ruangans.nama as nama_ruangan']);
        return view('jadwal.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
        'guru' => guru::select('id','nama')->get(),
        'ruangan'=>ruangan::select('id','nama')->get(),
        'kelas'=>kelas::select('id','nama')->get(),
        ];
        return view('jadwal.create',$data);
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
            'id_guru' => 'required',
            'id_kelas' => 'required',
            'id_ruangan' => 'required',
            'mulai' => 'required',
            'akhir' => 'required',
            'tanggal' => 'required',
          ]);
        //   return $request->all();
        
          $input = $request->all();
        //   return $input;
        
          $data = jadwal::create($input);
         
          return back()->with('success',' data telah berhasil dibuat.');
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
        $data = jadwal::findOrFail($id);
   
        return view('jadwal.edit', [
               'jadwal' => $data
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
            'id_guru' => 'required',
            'id_kelas' => 'required',
            'id_ruangan' => 'required',
            'mulai' => 'required',
            'akhir' => 'required',
            'tanggal' => 'required',
          ]);
               
         $data = jadwal::find($id)->update($request->all()); 
                
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
        $data = jadwal::find($id);
        $data->delete();

        return back()->with('success','Data telah dihapus!');
    }
}
