<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // function hienThiNguoiDung(){
    //     $users = DB::table('users')->get();
    //     return view('users',[
    //         'users' => $users
    //     ]);
    // }
    function hienThiNguoiDung(){
        $users =  new users;
        $faker = Faker\Factory::create();
        for($i=0; $i<5; $i++){
            DB::table('users')->insert([
                'name' => $faker->Name,
                'email' => $faker->unique()->safeEmail,
                'password' => $faker->password
            ]);
            
        }
    } 
}
