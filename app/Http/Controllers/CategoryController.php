<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

use App\Http\Requests\StoreCategoryRequest;

use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);

        return redirect()->back()->with(['success'=>'Categoria creata con successo']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {

        return view('categories.show', compact('category'));

        // return view('categoriese.show', [
        //     'category'=>$category,
        // ]);
    }

    // public function show($category)
    // {
    //     $category = Category::findOrFail($category);
    //     return view('categoriese.show');
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);

        return redirect()->back()->with(['success'=>'Categoria modificata con successo']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back()->with(['success'=>'Categoria eliminata con successo']);
    }
}
