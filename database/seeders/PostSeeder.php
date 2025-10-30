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
            'https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
            'https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
            'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1200&q=80',
        ];

        foreach ($posts as $post) {
            // 70% chance to add a featured image
            if (rand(1, 10) <= 7) {
                try {
                    $post->addMediaFromUrl($imageUrls[array_rand($imageUrls)])
                        ->toMediaCollection('featured_image');
                } catch (\Exception $e) {
                    // Log error if image download fails
                    \Illuminate\Support\Facades\Log::error("Failed to add featured image to post {$post->id}: " . $e->getMessage());
                }
            }
        }
    }
}
