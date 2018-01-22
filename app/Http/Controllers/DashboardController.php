<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class DashboardController extends Controller
{
    //

    public function index()
    {   
        $categories = Category::all();

        // return $articles;
        return view('layouts.admin.dashboard', compact('categories'));
    }

    public function categories()
    {
    	$categories = Category::all();

    	// return $articles;
    	return view('layouts.admin.categories', compact('categories'));
    }
}
