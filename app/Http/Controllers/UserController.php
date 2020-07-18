<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id =Auth::id();
        $todos = ToDo::where('user_id','=',$user_id)->get();
        return view('home',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    public function edit()
    {
        $user_id = Auth::id();
        $usuario = User::find($user_id);
        return view('posts.edit',compact('usuario'));
    }

    public function update(Request $request)
    {
        $user_id = Auth::id();
        $usuario = User::find($user_id);
        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');

        if($request->get('status') != null){
            $usuario->status = 0;
        }else{
            $usuario->status = 1;
        }
        $usuario->save();
        return redirect(action('UserController@edit'))->with('status','El usuario ha sido modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
