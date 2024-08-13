<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name'=>'sport']);
        Category::create(['name'=>'travel']);
        Category::create(['name'=>'animal']);
        Category::create(['name'=>'technology']);
        Category::create(['name'=>'car']);
        Category::create(['name'=>'food']);
    }
}
