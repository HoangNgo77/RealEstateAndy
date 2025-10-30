<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = Property::factory(20)->create();

        $imageUrls = [
            'https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg',
            'https://images.pexels.com/photos/323780/pexels-photo-323780.jpeg',
            'https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg',
        ];

        foreach ($properties as $property) {
            $property->addMediaFromUrl($imageUrls[array_rand($imageUrls)])
                ->toMediaCollection('featured_image');
        }
    }
}
