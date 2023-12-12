<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $this->validate($request, [
                'name'=> 'required|max:30',
                'lastname'=> 'required|max:30',
                'email' => 'required|email|unique:users|max:60',
                'password'=> 'required|min:6',
                'role'=> 'required'
            ]);

            $user = User::create([
                'name'=> $request->name,
                'lastname'=> $request->lastname,
                'email'=> $request->email,
                'password' => Hash::make($request->password),
                'role'=> Str::lower($request->role)
            ]);

            return redirect()->route('login');
        }catch(\Exception $e){
            echo $e;
        }
    }

    public function login(Request $request){
        
        $user = $this->validate($request, [
            'email'=> 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email','password');
        $remember = $request->remember;

        $attempt = auth()->attempt( $credentials, $remember );

        if($attempt){
            return redirect()->route('dashboard',auth()->user()->name);
        }else{
            return back()->with('mensaje','Credenciales incorrectas');
        }
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
