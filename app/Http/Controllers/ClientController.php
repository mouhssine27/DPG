<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
     public function index(){
        $idUser = Auth::id();
        $user = DB::table('users')->where('id', $idUser)->first();
         return view('client', compact('user'));
     }
}
