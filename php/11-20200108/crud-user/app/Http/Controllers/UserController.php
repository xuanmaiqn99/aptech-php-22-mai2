<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   function index(){
       $users = User::get();
       return view('users.index', 
       [
           'users' => $users
       ]);
   }
   function show($id){
    //    dd($id);
        $user = User::where('id', $id)->first();
        // dd($user);
        return view('users.show', [
            'user' => $user  //ko co s, vi chi in 1 nguoi
        ]);
   }
}
