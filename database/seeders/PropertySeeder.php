<?php

namespace Database\Seeders;

use App\Models\Amenity;
use App\Models\Property;
use Illuminate\Database\Seeder;

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

        // Get all amenity IDs
        $amenityIds = Amenity::pluck('id');

        foreach ($properties as $property) {
            // Add featured image
            $property->addMediaFromUrl($imageUrls[array_rand($imageUrls)])
                ->toMediaCollection('featured_image');
                
            // Attach 3-8 random amenities to each property
            $property->amenities()->attach(
                $amenityIds->random(rand(3, min(8, $amenityIds->count())))
            );
        }
    }
}
