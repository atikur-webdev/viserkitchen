<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Rules\FileTypeValidate;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $pageTitle = 'Products';
        $categories = Category::where('status', Status::YES)->get();
        $products = Product::orderBy('id', 'desc')->with('category', 'images')->get();
        return view('admin.products.index', compact('pageTitle', 'categories', 'products'));
    }
    public function create()
    {
        $pageTitle = 'Create Product';
        $categories = Category::where('status', Status::YES)->get();
        return view('admin.products.create', compact('pageTitle', 'categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'regular_price' => 'required',
            'sales_price' => 'nullable',
            'delivery_time' => 'required',
            'short_description' => 'required',
            'ingredients' => 'required',
            'spicy_level' => 'required',
            'cooking_time' => 'required',
            'calories' => 'required',
            'description' => 'nullable',
            'image' => ['image', 'required', new FileTypeValidate(['jpg', 'png', 'jpeg'])],
            'photos' => 'nullable|array',
            'photos.*' => ['image', new FileTypeValidate(['jpg', 'jpeg', 'png'])],
        ]);

        $product = new Product();

        if ($request->hasFile('image')) {
            try {
                $product->image = fileUploader($request->image, getFilePath('products'), getFileSize('products'), null);
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
        $product->delivery_time = $request->delivery_time;
        $product->short_description = $request->short_description;
        $product->ingredients = $request->ingredients;
        $product->spicy_level = $request->spicy_level;
        $product->cooking_time = $request->cooking_time;
        $product->calories = $request->calories;
        $product->description = $request->description;
        $product->status = Status::YES;
        $product->save();

        if ($request->photos) {
            foreach ($request->photos as  $photo) {
                $img = new Image();
                $img->product_id = $product->id;
                try {
                    $img->image = fileUploader($photo, getFilePath('productImages'), getFileSize('productImages'), thumb: getFileThumb('productImages'));
                } catch (\Exception $exp) {
                    $notify[] = ['error', $exp->getMessage()];
                    return back()->withNotify($notify);
                }
                $img->save();
            }
        }

        $notify[] = ['success', 'Product added successfully'];
        return back()->withNotify($notify);
    }
    public function edit($id)
    {
        $pageTitle = 'Edit Product';
        $categories = Category::where('status', Status::YES)->get();
        $product = Product::where('id', $id)->with('images')->first();
        return view('admin.products.edit', compact('pageTitle', 'product', 'categories'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'                      => 'required',
            'image' => ['nullable', 'image', new FileTypeValidate(['jpg', 'jpeg', 'png'])],
            'category_id' => 'required',
            'regular_price' => 'integer|required',
            'sales_price' => 'integer|required',
            'delivery_time' => 'required',
            'short_description' => 'required',
            'ingredients' => 'required',
            'spicy_level' => 'required',
            'cooking_time' => 'required',
            'calories' => 'required',
            'max_rating' => 'integer|min:1|max:5'
        ]);

        $product = Product::findOrFail($id);
        $old = $product->image;
        if ($request->hasFile('image')) {
            try {
                $product->image = fileUploader($request->image, getFilePath('products'), getFileSize('products'), $old);
            } catch (\Exception $exp) {
                $notify[] = ['error', 'Couldn\'t upload item image'];
                return back()->withNotify($notify);
            }
        }
        $product->name                  = $request->name;
        $product->category_id           = $request->category_id;
        $product->ratings               = $request->max_rating;
        $product->regular_price         = $request->regular_price;
        $product->sales_price           = $request->sales_price;
        $product->delivery_time         = $request->delivery_time;
        $product->short_description     = $request->short_description;
        $product->ingredients           = $request->ingredients;
        $product->spicy_level           = $request->spicy_level;
        $product->cooking_time          = $request->cooking_time;
        $product->calories              = $request->calories;
        $product->description           = $request->description;
        $product->save();

        $oldImage = $request?->old;
        $recentImage = Image::where('product_id', $id)->get()->pluck('id')->toArray();
        $diffImage = array_diff($recentImage ?? [], $oldImage ?? []);
        $deleteImage = Image::whereIn('id', $diffImage)->get();

        foreach ($deleteImage as $img) {
            fileManager()->removeFile(getFilePath('productImages') . '/' . $img->image);
            fileManager()->removeFile(getFilePath('productImages') . '/thumb_' . $img->image);
            $img->delete();
        }

        if ($request->photos) {
            foreach ($request->photos as  $photo) {
                $img = new Image();
                $img->product_id = $product->id;
                try {
                    $img->image = fileUploader($photo, getFilePath('productImages'), getFileSize('productImages'), thumb: getFileThumb('productImages'));
                } catch (\Exception $exp) {
                    $notify[] = ['error', $exp->getMessage()];
                    return back()->withNotify($notify);
                }
                $img->save();
            }
        }
        $notify[] = ['success', 'Product updated successfully'];
        return back()->withNotify($notify);
    }
    public function status($id)
    {
        return Product::changeStatus($id);
    }
}
