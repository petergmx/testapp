<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Todo;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index() {

      $uid = auth()->user()->id;

      $todos = DB::table('todos')
        ->join('categories', 'todos.category_id', '=', 'categories.id')
        ->join('users', 'todos.user_id', '=', 'users.id')
        ->select('todos.*', 'categories.name as category_name', 'users.name as user_name')
        ->where('todos.user_id', '=', $uid)
        ->orderBy('bydate', 'desc')
        ->get();

      return view('todos.index', [
        'todos' => $todos
        //'todos' => Todo::all()
      ]);
    }


    public function show(Todo $todo) {
      return view('todos.show', [
        'todo' => $todo
      ]);
    }


    public function create() {
      $uid = auth()->user()->id;
      return view('todos.create', [
        'categories' => DB::table('categories')->where('user_id', $uid)->get()
      ]);
    }


    public function store() {

      $attributes = request()->validate([
         'name' => ['required', 'min:3', 'max:255'],
         'description' => ['required', 'min:3'],
         'bydate' => ['required', 'date'],
         'category_id' => ['required']
        ]);

      $attributes["user_id"] = auth()->user()->id;

      Todo::create($attributes);
      return redirect('/')->with('success', 'Todo created.');
    }


    public function edit(Todo $todo) {
      $uid = auth()->user()->id;
      return view('todos.edit', [
        'todo' => $todo,
        'categories' => DB::table('categories')->where('user_id', $uid)->get()
      ]);
    }


    public function update(Todo $todo){

      $attributes = request()->validate([
        'name' => ['required', 'min:3', 'max:255'],
        'description' => ['required', 'min:3'],
        'bydate' => ['required', 'date'],
        'category_id' => ['required']
      ]);

      $attributes["user_id"] = auth()->user()->id;

      $todo->update($attributes);
      return redirect('/')->with('success', 'Todo updated.');
    }


    public function destroy(Todo $todo) {
      $todo->delete();
      return redirect('/')->with('success', 'Todo deleted.');
    }

}
