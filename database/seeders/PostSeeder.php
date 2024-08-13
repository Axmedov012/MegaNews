<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                Post::create([
                    'user_id'=>1,
                    'title'=>'new title',
                    'description'=>'new description',
                    'tag_id'=>1,
                    'category_id'=>1,
                    'photo'=>'',
                ]);
                Post::create([
                    'user)id'=>2,
                    'title'=>'new title',
                    'description'=>'new description',
                    'tag_id'=>2,
                    'category_id'=>2,
                    'photo'=>'',
                ]);
                Post::create([
                    'user_id'=>2,
                    'title'=>'new title',
                    'description'=>'new description',
                    'tag_id'=>2,
                    'category_id'=>2,
                    'photo'=>'',
                ]);
    }
}
