<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create(['name' => 'Travel']);
        Tag::create(['name' => 'Travel info']);
        Tag::create(['name' => 'Montenegro']);
        Tag::create(['name' => 'sky']);
        Tag::create(['name' => 'Montenegro']);
    }
}
