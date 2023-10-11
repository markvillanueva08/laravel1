<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

use function Laravel\Prompts\confirm;

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
    public function store(Request $request) {
        $validated = $request->validate([
            "name"=> ['required', 'min:4'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:6'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);

        auth()->login($user);

        
    }
    public function show($id){

        
        return view('user')
            ->with('name', 'mark')
            ->with('age', '22')
            ->with('email', 'acme@gmail.com')
            ->with('id', $id);
    }

}