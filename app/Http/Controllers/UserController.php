<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function index(){
        return 'hello from UserController';
    }

    public function login() {
        if(View::exists('user.login')){
            return view('user.login');
        }
        else{
            return abort(404);
        }
    }
    public function register() {
        if(View::exists('user.register')){
            return view('user.register');
        }
        else{
            return abort(404);
        }
    }
    public function show($id){

        
        return view('user')
            ->with('name', 'mark')
            ->with('age', '22')
            ->with('email', 'acme@gmail.com')
            ->with('id', $id);
    }

}