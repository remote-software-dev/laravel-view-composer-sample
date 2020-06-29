<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Socks',
                'price'=>5,
                'created_at'=>date(now()),
                'updated_at'=>date(now()),
            ],[
                'name'=>'T-Shirt',
                'price'=>40,
                'created_at'=>date(now()),
                'updated_at'=>date(now()),
            ],
            [
                'name'=>'Gloves',
                'price'=>13,
                'created_at'=>date(now()),
                'updated_at'=>date(now()),
            ],
            [
                'name'=>'Shoes',
                'price'=>93,
                'created_at'=>date(now()),
                'updated_at'=>date(now()),
            ],
        ]);
    }
}
