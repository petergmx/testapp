<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
      return view('register.create');
    }


    public function store() {

      $attributes = request()->validate([
        'name' => ['required', 'min:3', 'max:255', 'unique:users,name'],
        'email' => ['required', 'email:filter', 'unique:users,email', 'max:255'],
        'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()]
      ]);

      // create the user
      $user = User::create($attributes);

      // log in the user
      auth()->login($user);

      return redirect('/')->with('success', 'Registrácia úspešná');
    }


}
