<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Rules\FileTypeValidate;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $pageTitle = 'Category';

        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.categories.list', compact('pageTitle', 'categories'));
    }

    public function create(Request $request)
    {

        $request->validate([
            'image' => ['required', 'image', new FileTypeValidate(['jpg', 'jpeg', 'png'])],
            'name' => 'required|string|max:40',
        ]);

        $category = new Category();

        if ($request->hasFile('image')) {
            try {
                $category->image = fileUploader($request->image, getFilePath('categoryList'), getFileSize('categoryList'));
            } catch (\Exception $exp) {
                $notify[] = ['error', $exp->getMessage()];
                return back()->withNotify($notify);
            }
        }
        $category->name = $request->name;
        $category->status = Status::YES;
        $category->save();

        $notify[] = ['success', 'Category added successfully'];
        return back()->withNotify($notify);
    }
    public function update(Request $request, $id)
    {
        $validationRule = $id ? 'nullable' : 'required';

        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => [
                $validationRule,
                'image',
                new FileTypeValidate(['jpg', 'jpeg', 'png'])
            ],
        ]);
        $categories = Category::findOrFail($id);
        $old = $categories->image;

        if ($request->hasFile('image')) {
            try {
                $old = $categories->image;
                $categories->image = fileUploader($request->image, getFilePath('categoryList'), getFileSize('categoryList'), $old);
            } catch (\Exception $exp) {
                $notify[] = ['error', 'Couldn\'t upload item image'];
                return back()->withNotify($notify);
            }
        }
        $categories->name = $request->name;
        $categories->status = Status::YES;
        $categories->save();
        $notify[] = ['success', 'Item added successfully'];
        return back()->withNotify($notify);
    }
    public function status($id)
    {
        return Category::changeStatus($id);
    }
}
