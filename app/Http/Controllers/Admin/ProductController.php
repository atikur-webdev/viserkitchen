<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Rules\FileTypeValidate;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $pageTitle = 'Products';
        $categories = Category::where('status', Status::YES)->get();
        $products = Product::OrderBy('id', 'desc')->with('category')->get();
        return view('admin.products.index', compact('pageTitle', 'categories', 'products'));
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'regular_price' => 'required',
            'sales_price' => 'nullable',
            'image' => ['image', 'required', new FileTypeValidate(['jpg', 'png', 'jpeg', 'sv'])],
        ]);

        $product = new Product();
        if($request->hasFile('image')) {
            try{
                $product->image = fileUploader($request->image, getFilePath('products'), getFileSize('products'));
            } catch (\Exception $exp) {
                $notify[] = ['error', $exp->getMessage()];
                return back()->withNotify($notify);
            }
        }
        $product->name = $request->name;
        $product->ratings = $request->ratings;
        $product->category_id = $request->category_id;
        $product->regular_price = $request->regular_price;
        $product->sales_price = $request->sales_price;
        $product->save();

        $notify[] = ['success', 'Product added successfully'];
        return back()->withNotify($notify);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'image' => ['required', 'image', new FileTypeValidate(['jpg', 'jpeg', 'png', 'svg'])],
            'category_id' => 'required',
            'regular_price' => 'integer|required',
            'sales_price' => 'integer|required',
            'max_rating' => 'integer|min:1|max:5'
        ]);
        $product = Product::findOrFail($id);
        $old = $product->image;
        if($request->hasFile('image')) {
            try{
                $product->image = fileUploader($request->image, getFilePath('products'), getFileSize('products'), $old);
            } catch (\Exception $exp) {
                $notify[] = ['error', 'Couldn\'t upload item image'];
                return back()->withNotify($notify);
            }
        }
        $product->name = $request->name;
        $product->ratings = $request->max_rating;
        $product->regular_price = $request->regular_price;
        $product->sales_price = $request->sales_price;
        $product->save();
        $notify = ['success', 'Item updated successfully'];
        return back()->withNotify($notify);
    }
    // public function delete($id) {
    //     $product = Product::findOrFail($id);
    //     $product->delete();
    //     $notify[] = ['success', 'Product deleted successfully'];
    //     return back()->withNotify($notify);
    // }

    public function productStatus($id)
    {
        return Product::changeStatus($id);
    }
}
