<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }


    public function add()

    {

        return view('admin.category.add');
    }

    public function insert(Category $category, Request $request)
    {

     //   $category = new Category();

    //  $validated = $request->validate([
    //     'cakename' => 'required|string|max:60',
    //     'slug' =>  'required|string|max:60',
    // ]);

    // $validated['status'] = $request->input('status')==TRUE?'1':'0';
    // $validated['popular'] = $request->input('popular')==TRUE?'1':'0';

    // Category::create( $validated);

    // return  $validated;

    $request->validate([
        'cakename'=> 'required',
        'slug'=> 'required',
        'original_price'=> 'required',
        'selling_price'=> 'required',
        'cakeflavour'=> 'required',
        'cakeshape'=> 'required',
        'weight'=> 'required',
        'caketype'=> 'required',
        'quantity'=> 'required',
        'image'=> 'required',


     ]);
        $category->cakename = $request->input('cakename');
        $category->slug= $request->input('slug');
        $category->original_price= $request->input('original_price');
        $category->selling_price= $request->input('selling_price');
        $category->cakeflavour = $request->input('cakeflavour');
        $category->cakeshape = $request->input('cakeshape');
        $category->weight = $request->input('weight');
        $category->caketype = $request->input('caketype');

        $category->status = $request->input('status')==TRUE?'1':'0';
        $category->popular = $request->input('popular')==TRUE?'1':'0';
        $category->quantity = $request->input('quantity');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category/', $filename);
            $category->image = $filename;
        }

        $category->save();
        return redirect('/dashboard')->with('status', "Cake  Added Successfully");
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if ($request->hasFile('image'))
        {
            $path = 'assets/uploads/category/' . $category->image;
            if (File::exists($path))
                {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/category/', $filename);
            $category->image = $filename;
        }

        $category->cakename = $request->input('cakename');
        $category->slug= $request->input('slug');
        $category->original_price= $request->input('original_price');
        $category->selling_price= $request->input('selling_price');
        $category->cakeflavour = $request->input('cakeflavour');
        $category->cakeshape = $request->input('cakeshape');
        $category->weight = $request->input('weight');
        $category->caketype = $request->input('caketype');

        $category->status = $request->input('status')==TRUE?'1':'0';
        $category->popular = $request->input('popular')==TRUE?'1':'0';
        $category->quantity = $request->input('quantity');

        $category->update();
        return  redirect('/dashboard')->with('status', "Cake Updated Successfully");
    }

    public function delete($id)
    {
         $category= Category::find($id);
         if($category->image)
         {
            $path = 'assets/uploads/category/' . $category->image;
         if (File::exists($path))
         {
         File::delete($path);
     }

     $category->delete();
     return  redirect('categories')->with('status', "cake deleted Successfully");

 }
}

}
