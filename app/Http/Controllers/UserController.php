<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user');
    }
    public function data(){
        return redirect()->route('user')->with('message','Dato agregado correctamente');
        //return redirect()->route('user')->with('error','Dato eliminado correctamente');
        //return redirect()->route('user')->with('warning','Estas seguro que quieres eliminar este dato?');
    }
}
