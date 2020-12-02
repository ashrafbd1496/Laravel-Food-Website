<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{

	/**
	 * Home Page Show
	 */
   public function showHomePage()
   {
   		return view('foods.home');
   }
	/**
	 * Blog Page Show
	 */
   public function showBlogPage()
   {
   		return view('foods.blog');
   }

   /**
	 * Menu Page Show
	 */
   public function showMenuPage()
   {
   		return view('foods.menu');
   }

   /**
	 * News Page Show
	 */
   public function showNewsPage()
   {
   		return view('foods.news');
   }

   /**
	 * Location Page Show
	 */
   public function showLocationPage()
   {
   		return view('foods.location');
   }
    /**
	 * Reservation Page Show
	 */
   public function showReservPage()
   {
   		return view('foods.reservation');
   }


   /**
	 * Staff Page Show
	 */
   public function showStaffPage()
   {
   		return view('foods.staff');
   }

    /**
	 * Gallery Page Show
	 */
   public function showGalleryPage()
   {
   		return view('foods.gallery');
   }


 














}//foodController class end
