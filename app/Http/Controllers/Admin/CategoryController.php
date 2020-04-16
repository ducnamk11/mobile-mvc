<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public function getCategory()
    {
        $cateList = CategoryModel::listCategory();
        return view('backend.category', compact('cateList'));
    }

    public function postCategory(AddCategoryRequest $request)
    {
        $category = CategoryModel::form($request);
        return back();
    }

    public function getEditCategory($id)
    {
        $data['cate'] = CategoryModel::find($id);
        return view('backend/editcategory', $data);
    }

    public function postEditCategory(AddCategoryRequest $request, $id)
    {
        $category = CategoryModel::form($request);
        return redirect()->intended('admin/category/');
    }


    public function getDeleteCategory($id)
    {
        CategoryModel::deleteCategory($id);
        return back();
    }
}
