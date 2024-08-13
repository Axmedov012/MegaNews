<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::all();
        return response()->json($category);
    }
public function store(StoreCategoryRequest $request)
 {
        $request->validated();
        $category = Category::create([
            'name'=>$request->name,
        ]);
        return response()->json($category);
 }
}
