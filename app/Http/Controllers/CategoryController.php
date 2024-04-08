<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

  public function index() {
    $uid = auth()->user()->id;
    return view('categories.index', [
      'categories' => DB::table('categories')->where('user_id', $uid)->get()
    ]);
  }


    public function show(Category $category) {
      return view('categories.show', [
        'category' => $category
      ]);
    }


    public function create() {
      return view('categories.create');
    }


    public function store() {

      $attributes = request()->validate([
         'name' => ['required', 'min:3', 'max:255', 'unique:categories,name'],
        ]);

      $attributes["user_id"] = auth()->user()->id;

      Category::create($attributes);
      return redirect('/categories')->with('success', 'Category created.');
    }


    public function edit(Category $category) {
      return view('categories.edit', [
        'category' => $category
      ]);
    }


    public function update(Category $category){

      $attributes = request()->validate([
        'name' => ['required', 'min:3', 'max:255', Rule::unique('categories', 'name')->ignore($category->id)],
      ]);

      $category->update($attributes);
      return redirect('/categories')->with('success', 'Category updated.');
    }


    public function destroy(Category $category) {
      $category->delete();
      return redirect('/categories')->with('success', 'Category deleted.');
    }
}
