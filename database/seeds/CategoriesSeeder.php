<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		App\Category::create([
			'name' => 'Uncategory',
			'slug' => 'uncategory'
		]);
		App\Category::create([
			'name' => 'Category',
			'slug' => 'category'
		]);

    }
}
