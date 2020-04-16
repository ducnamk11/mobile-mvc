<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryModel extends Model
{
    protected $table = 'vp_categories';
    protected $primaryKey = 'cate_id';
    protected $guarded = [];

    public static function listCategory()
    {
        return CategoryModel::all();
    }


    public static function form(Request $request)
    {
        if (isset($request->id)) {
            $category = CategoryModel::find($request->id);
            $category->cate_name = $request->name;
            $category->cate_slug = Str::slug($request->name);
            $category->save();
        } else {
            $category = new CategoryModel();
            $category->cate_name = $request->name;
            $category->cate_slug = Str::slug($request->name);
            $category->save();
        }
    }

    public static function deleteCategory($request)
    {
        return CategoryModel::destroy($request);
    }

}
