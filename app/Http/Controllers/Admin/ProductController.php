<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function getProduct()
    {
        $productList = ProductModel::listproduct();
        return view('backend.product', compact('productList'));
    }

    public function getAddProduct()
    {
        $data['catelist'] = CategoryModel::all();
        return view('backend.addproduct', $data);
    }

    public function postAddProduct(AddProductRequest $request)
    {
        $extension = $request->img->getClientOriginalExtension();
        $filename = Str::random(8) . '.' . $extension;
        $product = new ProductModel();
        $product->prod_name = $request->name;
        $product->prod_slug = Str::slug($request->name);
        $product->prod_img = $filename;
        $product->prod_accessories = $request->accessories;
        $product->prod_price = $request->price;
        $product->prod_warranty = $request->warranty;
        $product->prod_promotion = $request->promotion;
        $product->prod_condition = $request->condition;
        $product->prod_status = $request->status;
        $product->prod_description = $request->description;
        $product->prod_cate = $request->cate;
        $product->prod_featured = $request->featured;
        $product->save();
        $request->img->storeAs('avatar', $filename);
        return redirect('admin/product');
    }

    public function getEditProduct($id)
    {
        $data['product'] = ProductModel::find($id);
        $data['listcate'] = CategoryModel::all();
        return view('backend.editproduct', $data);
    }

    public function postEditProduct(Request $request, $id)
    {
        $data['listcate'] = CategoryModel::all();
        $product = new ProductModel();
        $arr['prod_name'] = $request->name;
        $arr['prod_slug'] = Str::slug($request->name);
        $arr['prod_accessories'] = $request->accessories;
        $arr['prod_price'] = $request->price;
        $arr['prod_warranty'] = $request->warranty;
        $arr['prod_promotion'] = $request->promotion;
        $arr['prod_status'] = $request->status;
        $arr['prod_condition'] = $request->condition;
        $arr['prod_description'] = $request->description;
        $arr['prod_cate'] = $request->cate;
        $arr['prod_featured'] = $request->featured;
        if ($request->hasFile('img')) {
            $extension = $request->img->getClientOriginalExtension();
            $img = Str::random(8) . '.' . $extension;
            $arr['prod_img'] = $img;
            $request->img->storeAs('avatar', $img);
            $oldImg = ProductModel::find($id);
            @unlink('storage/app/avatar/' . $oldImg->prod_img); //delete old image
        };
        $product::where('prod_id', $id)->update($arr);
        return redirect('admin/product');
    }

    public function getDeleteProduct($id)
    {
        $oldImg = ProductModel::find($id);
        @unlink('storage/app/avatar/' . $oldImg->prod_img); //delete old image
        ProductModel::destroy($id);

        return back();
    }
}
