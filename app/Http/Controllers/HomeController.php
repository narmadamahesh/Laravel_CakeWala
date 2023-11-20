<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {




         $featuredcake = Category::where('popular','1')->take(15)->get();
         $statuscake = Category::where('status','1')->take(15)->get();
         return view('home',compact('featuredcake','statuscake'));


    }


   public function viewcake($slug)
   {
     if(Category::where('slug',$slug)->exists())
     {
          $category=Category::where('slug',$slug)->first();
          $cakey=Category::where('id',$category->id)->where('status','0')->get();
          return view('frontend.cakes.index',compact('category','cakey'));
     }
   }

}
