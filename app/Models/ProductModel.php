<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table= 'vp_products';
    protected $primaryKey= 'prod_id';
    protected $guarded= [];
    public static function listproduct()
    {
        return DB::table('vp_products')->join('vp_categories', 'vp_products.prod_cate', '=', 'vp_categories.cate_id')->orderBy('prod_id', 'desc')->get();
     }
}
