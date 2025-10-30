<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 20 blog posts
        $posts = \App\Models\Post::factory(20)->create();

        // Add featured images to some posts
        $imageUrls = [
            'https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg',
            'https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg',
            'https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg',
        ];

        foreach ($posts as $post) {
            try {
                $post->addMediaFromUrl($imageUrls[array_rand($imageUrls)])
                    ->toMediaCollection('featured_image');
            } catch (\Exception $e) {
                \Illuminate\Support\Facades\Log::error("Failed to add featured image to post {$post->id}: " . $e->getMessage());
            }
        }
    }
}
