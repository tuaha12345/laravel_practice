<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index ()
    {
        $product=Product::all();
        return view('index',['data'=>$product]);
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        // validation 
        $data=$request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $new_product=Product::create($data); /// save product in database
        return redirect(route('product.index'));
    }



    public function edit(Product $product_need_to_edit)
    {
        return view('edit',['p'=>$product_need_to_edit]); 
    }

    public function update(Product $product_need_to_be_updated,Request $request )
    {
               // validation 
               $data=$request->validate([
                'name' => 'required',
                'qty' => 'required|numeric',
                'price' => 'required|decimal:0,2',
                'description' => 'nullable',
            ]);
        $product_need_to_be_updated->update($data);
         return redirect(route('product.index'))->with('success',"Edited product successfully updated");
        // return redirect(route('product.index'));

    }

    public function delete(Product $id_of_deleted_product)
    {
        $id_of_deleted_product->delete();
        return redirect(route('product.index'))->with('success',"Your product has been deleted!!!");
    }


}
