<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function indexs(){
        //$products=Product::get();
        $products=Product::latest()->paginate(1);
        return view('products.index',['products'=>$products]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        //dd($request);
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'mrp'=>'required|numeric',
            'price'=>'required|numeric',
            'image'=>'required|mimes:png,jpg,jpeg,gif|max:10000'
        ]);

        $imageName=time().".".$request->image->extension();
        $request->image->move(public_path('products'),$imageName);

        $product=new Product;
        $product->image = $imageName;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->mrp=$request->mrp;
        $product->price=$request->price;
        $product->save();
        return back()->withSuccess('Product Details Added Success....');
    }

    public function show($id){
        $product=Product::where('id',$id)->first();
        return view('products.show',['product'=>$product]);
    }
    public function edit($id){
        $product=Product::where('id',$id)->first();
        return view('products.edit',['product'=>$product]);
    }
    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'mrp'=>'required|numeric',
            'price'=>'required|numeric',
            'image'=>'nullable|mimes:png,jpg,jpeg,gif|max:10000'
        ]);
        
        $product=Product::where('id',$id)->first();

        if (isset($request->image)) {
            $imageName=time().".".$request->image->extension();
            $request->image->move(\public_path('products'),$imageName);
            $product->image=$imageName;
        }
        

        $product->name=$request->name;
        $product->description=$request->description;
        $product->mrp=$request->mrp;
        $product->price=$request->price;
        $product->save();
        return back()->withSuccess('Product Details Updated Success....');
    }

    public function destroy($id){
        $product=Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('Product Details Deleted Success...');
    }
}
