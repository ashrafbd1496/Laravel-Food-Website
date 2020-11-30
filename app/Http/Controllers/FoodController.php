<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
	/**
	 * Blog Page Show
	 */
   public function showBlogPage()
   {
   		return view('foods.blog');
   }
}
