<?php

namespace App\Http\Controllers;

use App\Models\Category; 
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() 
    {
    
        $categories = Category::with(['posts' => function ($query) {
            $query->latest();
        }])->get();

        return view('categories', [
            'title' => 'All Categories',
            'categories' => $categories
        ]);
    }
}