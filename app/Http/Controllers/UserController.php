<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $users = user::all(); 
        
   return view('user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
            'name' => 'required',
            'email' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
          ]);

    

          $input = $request->all();
        
          $user = user::create($input);
         
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
        $user = user::findOrFail($id);
   
   return view('user.edit', [
          'user' => $user
   ]);

   $user = user::find(Auth::user()->id);
        return view('backend.settings.updatepassword',compact('user'));
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
            'name' => 'required|max:20',
            'email' => 'required',
    
         ]);
    
        
         $user = user::find($id)->update($request->all()); 
                
         return back()->with('success',' Data telah diperbaharui!');
    }
    public function reset(Request $request, $id)
    {
        $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirmpassword' => 'required'
        ]);

        $data = user::find($id)->first();
        
        if (Hash::check($request->oldpassword,$data->password)) {
            
            if ($request->newpassword == $request->confirmpassword){
                user::find($id)->update([
                    'password' => Hash::make($request->newpassword)
                ]);
                return back()->with('success',' Password Telah Diubah!');

            }else{
                return back()->with('danger','Password Baru Tidak Sesuai');
            }
          
        
        }
        else{
            return back()->with('danger','Password Lama Tidak Sesuai');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $user = user::find($id);
        $user->delete();
     
        return back()->with('success',' Penghapusan berhasil.');
    }

}
