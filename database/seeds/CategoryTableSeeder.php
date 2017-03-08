<?php

use codedelivery\Models\Category;
use codedelivery\Models\Product;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 10)->create()->each(function ($c) {

            for ($i = 0; $i < 10; $i++) {

                $c->products()->save(factory(Product::class)->make());
            }
        });
    }
}
