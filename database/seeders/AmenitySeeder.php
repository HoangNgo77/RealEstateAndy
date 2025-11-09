<?php

namespace Database\Seeders;

use App\Models\Amenity;
use Illuminate\Database\Seeder;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amenities = [
            'Swimming Pool',
            'Gym',
            'Parking',
            'Air Conditioning',
            'Heating',
            'Elevator',
            'Laundry',
            'Balcony',
            'Garden',
            'Terrace',
            'Security',
            'Concierge',
            'Pet Friendly',
            'Furnished',
            'Fireplace',
            'Hardwood Floors',
            'Walk-in Closet',
            'Dishwasher',
            'Microwave',
            'Refrigerator',
            'Washer/Dryer',
            'Cable TV',
            'Internet',
            'WiFi',
            'Doorman',
            'Wheelchair Access',
            'Storage',
            'Bike Storage',
            'Roof Deck',
            'BBQ Area',
            'Playground',
            'Tennis Court',
            'Basketball Court',
            'Spa',
            'Sauna',
            'Jacuzzi',
            'Golf Course',
            'Water View',
            'Mountain View',
            'City View',
            'Lake View',
            'Ocean View',
        ];

        foreach ($amenities as $amenity) {
            Amenity::firstOrCreate(['name' => $amenity]);
        }
    }
}
