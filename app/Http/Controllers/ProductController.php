<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('product.create');

    }
    public function index(){
        $products = Product::all();
        return view('product.index',compact('products'));
    }

    public function edit($id){
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }
    public function store(Request $request){

        $product = Product::create($request->all());
        toastr()->success(trans('تم اضافة المنتج بنجاح'));
        return redirect()->route('product.index');
    }

    public function update(Request $request , $id){
        $product = Product::find($id);
        $product->update($request->all());
        toastr()->success(trans('تم تحديث المنتج بنجاح'));
        return redirect()->route('product.index');
    }
    public function delete($id){

        $product = Product::find($id);
        $product->delete();
        toastr()->error(trans('تم حذف المنتج بنجاح'));
        return redirect()->route('product.index');
    }

}
