<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function  index()
    {   
        //return view('products.index', ['products' =>Product::latest()->get()]);/// latest for showing from latest product first
        return view('products.index', ['products' =>Product::latest()->paginate(3)]); // for pagination
     }
    public function  create()
    {
        return view('products.create');
    }
    public function store(Request $r)
    { 

        // validate data
        $r->validate([
             'name' => 'required',
             'description' => 'required',
             'image' => 'required|mimes:png,jpg,jpeg,gif|max:100000',

        ]);

       //upload image file
      $imageName=time().'.'.$r->image->extension();
      $r->image->move(public_path('products_img'),$imageName);
      // data upload to database
      $product= new Product();
      $product->name=$r->name;
      $product->description=$r->description;
      $product->image=$imageName;
      $product->save();

      return back()->withSuccess('Product created successfully');
    }
 
    //----------   edit product --------------------------------
    public function  edit($id)
    {   
        $product=Product::where('id',$id)->first();
        return view('products.edit',['pro'=>$product]);
    }
        //----------   edit update --------------------------------
    public function  update(Request $r,$id)
    {   
        // validate data
        $r->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg,gif|max:100000',

       ]);

       $product=Product::where('id',$id)->first();

       if(isset($r->image))
       {
      //upload image file
      $imageName=time().'.'.$r->image->extension();
      $r->image->move(public_path('products_img'),$imageName);
      $product->image=$imageName;
       }

        // data upload to database
        $product->name=$r->name;
        $product->description=$r->description;
        $product->save();

     return back()->withSuccess('Product updated successfully');
    }

    //----------   delete product --------------------------------
    //----------   edit product --------------------------------
    public function  delete($id)
    {   
        $product=Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('This product has been deleted successfully');

    }

    //----------   show product --------------------------------
    public function  show($id)
    {   
        $product=Product::where('id',$id)->first();
        return view('products.show',['pro'=>$product]);
    }
}
