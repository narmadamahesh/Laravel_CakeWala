<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function index()
    {

         $featuredcake = Category::where('popular','1')->take(15)->get();
         $statuscake = Category::where('status','1')->take(15)->get();

         return view('frontend.index',compact('featuredcake','statuscake'));
    }


   public function viewcake($slug)
   {

     if(Category::where('slug',$slug)->exists())
     {
          $category=Category::where('slug',$slug)->first();
         // $cakey=Category::where('id',$category->id)->where('status','0')->get();
           $cakey=Category::where('id',$category->id)->get();
          return view('frontend.cakes.index',compact('category','cakey'));

     }
     else
     {
         return redirect('/')->with('status','slug doesnt exist');
     }
   }

}
