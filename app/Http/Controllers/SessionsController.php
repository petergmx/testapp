<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){
      return view('sessions.create');
    }

    public function store(){

      $attributes = request()->validate([
        'email' => ['required', 'email', 'exists:users,email'],
        'password' => ['required']
      ]);

        if (!auth()->attempt($attributes)){
          throw ValidationException::withMessages([
            'email' => 'Prihlasovacie údaje sa nepodarilo overiť'
          ]);
        }

        /* to isté inak:
        return back()
          ->withInput()
          ->withErrors(['email' => 'Prihlasovacie údaje sa nepodarilo overiť']);
        */

        session()->regenerate();

        return redirect('/')->with('success', 'Prihlásenie úspešné');
    }

    public function destroy(){
      auth()->logout();
      return redirect('/')->with('success', 'Používateľ bod odhlásený');
    }
}
