<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['cate_name'=>'Iphone',
                'cate_slug'=>Str::slug('iphone')],
            ['cate_name'=>'Samsung',
                'cate_slug'=>Str::slug('Samsung')],
        ];
    }
}
