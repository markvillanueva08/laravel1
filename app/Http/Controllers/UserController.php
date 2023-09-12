<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'hello from UserController';
    }
    public function show($id){

        
        return view('user')
            ->with('name', 'mark')
            ->with('age', '22')
            ->with('email', 'acme@gmail.com')
            ->with('id', $id);
    }
}