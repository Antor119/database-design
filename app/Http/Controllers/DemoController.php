<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        // return User::create([
        //     "email"=> "taojir45@gmail.com",
        // ]);

        // return User::where('id',5)->update([
        //     "email"=> "tonmoy45@gmail.com",
        // ]);


        // return User::where('id',7)->delete();

        // return User::updateOrCreate(
        //     ["email"=>"rabbi34@gmail.com"],
        //     ["email"=>"shakib47@gmail.com","id"=>4]

        // );
        $user = User::with('profile','post','comment')->get();
        return $user;
    }
}
