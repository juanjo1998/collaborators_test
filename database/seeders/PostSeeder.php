<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* por cada post creado, se generan 4 imagenes */       

        Post::factory(100)->create()->each(function(Post $post){
            Image::factory(4)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class,
            ]);

            $post->tags()->attach([
                rand(1,4),
                rand(5,8),
            ]);
        });
    }
}
