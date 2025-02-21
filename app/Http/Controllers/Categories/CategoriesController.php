<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Jobttt;

class CategoriesController extends Controller
{
    
    public function singleCatgory($id)
    {
        $category = Category::find($id);
        // dd($category);
        // echo $category->name;
        $jobs = Jobttt::where('category_id', $id)
        ->orderBy('created_at', 'desc')
        ->paginate(5);

        return view('categories.single', compact('jobs', 'category'));
    }
}
