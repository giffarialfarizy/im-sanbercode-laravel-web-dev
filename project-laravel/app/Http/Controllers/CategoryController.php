<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('category.list', ['categories' => $categories]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function destroy($id)
    {
        DB::table('categories')->where('id', '=', $id)->delete();

        return redirect('/category');
    }

    public function edit($id)
    {
        $category = DB::table('categories')->find($id);

        return view('category.edit', ['category' => $category]);
    }

    public function show($id)
    {
        $category = DB::table('categories')->find($id);

        return view('category.detail', ['category' => $category]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|min:2',
            ],
            [
                'name.required' => 'A Category Name is required',
                'name.min' => 'Category Name should be at least :min characters',
            ]
        );

        DB::table('categories')->insert([
            'name' => $request->input('name'),
        ]);

        return redirect('/category');
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required|min:2',
            ],
            [
                'name.required' => 'A Category Name is required',
                'name.min' => 'Category Name should be at least :min characters',
            ]
        );

        $category = DB::table('categories')
            ->where('id', $id)
            ->update(
                [
                    'name' => $request->input('name'),
                ]
            );

        return redirect('/category');
    }
}
