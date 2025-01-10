<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::insert([
            [
            'title' => 'Coffee terbaru',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum',
            'image' => 'hallo.jpg'
            ],
            [
            'title' => 'Coffee terbaru 2',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium pra',
            'image' => 'hallo.jpg'
            ],
            [
            'title' => 'Coffee terbaru 3',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium pra',
            'image' => 'hallo.jpg'
            ],
            [
            'title' => 'Coffee terbaru 4',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium pra',
            'image' => 'hallo.jpg'
            ],
            [
            'title' => 'Coffee terbaru 5',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium pra',
            'image' => 'hallo.jpg'
            ],
        ]);
    }
}
