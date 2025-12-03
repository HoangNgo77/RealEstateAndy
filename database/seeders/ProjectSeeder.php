<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        $projects = [
            [
                'title' => 'Modern Villa Construction in District 2',
                'slug' => 'modern-villa-construction-district-2',
                'excerpt' => 'A luxurious modern villa featuring contemporary architecture with smart home integration and sustainable design.',
                'content' => '<h3>Project Overview</h3>
                <p>This stunning modern villa in District 2 showcases the perfect blend of contemporary design and functional living spaces. The project spans over 500 square meters and includes 4 bedrooms, 5 bathrooms, and an infinity pool.</p>
                
                <h3>Key Features</h3>
                <ul>
                    <li>Smart Home System Integration</li>
                    <li>Solar Panel Installation</li>
                    <li>Rainwater Harvesting System</li>
                    <li>Premium Italian Marble Flooring</li>
                    <li>Floor-to-ceiling Windows</li>
                    <li>Infinity Swimming Pool with Deck</li>
                    <li>Landscaped Garden with BBQ Area</li>
                </ul>
                
                <h3>Construction Timeline</h3>
                <p>The construction began in January 2024 and was completed in November 2024. Our team worked diligently to ensure every detail met the highest standards.</p>
                
                <h3>Materials Used</h3>
                <p>We used only premium materials including imported marble, high-grade steel, and energy-efficient glass throughout the construction.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'Luxury Apartment Complex - Thao Dien',
                'slug' => 'luxury-apartment-complex-thao-dien',
                'excerpt' => 'High-end apartment complex with resort-style amenities in the heart of Thao Dien, featuring 120 luxury units.',
                'content' => '<h3>Project Description</h3>
                <p>A prestigious 15-story apartment complex offering 120 luxury units with panoramic city and river views. Each unit is designed with meticulous attention to detail and premium finishes.</p>
                
                <h3>Amenities</h3>
                <ul>
                    <li>Rooftop Infinity Pool & Bar</li>
                    <li>State-of-the-art Fitness Center</li>
                    <li>Children\'s Playground</li>
                    <li>24/7 Security & Concierge</li>
                    <li>Underground Parking (2 levels)</li>
                    <li>Retail Shops on Ground Floor</li>
                    <li>Landscaped Gardens</li>
                    <li>Multi-purpose Event Hall</li>
                </ul>
                
                <h3>Construction Highlights</h3>
                <p>The project utilized cutting-edge construction techniques including precast concrete panels for faster assembly and better quality control. Completed in 18 months from groundbreaking to handover.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(25),
            ],
            [
                'title' => 'Eco-Friendly Townhouse Development',
                'slug' => 'eco-friendly-townhouse-development',
                'excerpt' => 'Sustainable townhouse community with green building certifications, solar energy, and eco-friendly materials.',
                'content' => '<h3>About This Project</h3>
                <p>A pioneering eco-friendly townhouse development featuring 45 units designed with sustainability at its core. Each home is built using environmentally responsible materials and technologies.</p>
                
                <h3>Green Features</h3>
                <ul>
                    <li>LEED Gold Certification</li>
                    <li>Solar Panels on Every Roof</li>
                    <li>Rainwater Collection System</li>
                    <li>LED Lighting Throughout</li>
                    <li>Natural Ventilation Design</li>
                    <li>Recycled Building Materials</li>
                    <li>Green Roof Gardens</li>
                    <li>Electric Vehicle Charging Stations</li>
                </ul>
                
                <h3>Community Spaces</h3>
                <p>The development includes shared organic gardens, a community center powered by renewable energy, and pedestrian-friendly walkways lined with native trees.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(40),
            ],
            [
                'title' => 'Heritage Building Restoration - Dong Khoi Street',
                'slug' => 'heritage-building-restoration-dong-khoi',
                'excerpt' => 'Careful restoration of a 1920s colonial building while preserving its historical character and architectural significance.',
                'content' => '<h3>Restoration Project</h3>
                <p>This delicate restoration project involved bringing a beautiful 1920s colonial building back to life while maintaining its historical integrity and architectural heritage.</p>
                
                <h3>Preservation Work</h3>
                <ul>
                    <li>Original Façade Restoration</li>
                    <li>Hand-carved Wooden Details Repair</li>
                    <li>Antique Tile Reproduction</li>
                    <li>Historical Paint Colors Research</li>
                    <li>Period-appropriate Hardware</li>
                    <li>Structural Reinforcement</li>
                    <li>Modern MEP Systems Integration</li>
                </ul>
                
                <h3>Challenges & Solutions</h3>
                <p>Working with heritage buildings requires specialized knowledge and techniques. Our team consulted with historians and used traditional craftsmanship methods alongside modern engineering to ensure the building\'s longevity.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(55),
            ],
            [
                'title' => 'Contemporary Office Tower - CBD Area',
                'slug' => 'contemporary-office-tower-cbd',
                'excerpt' => 'A 25-story Grade-A office building with smart building technology and LEED Platinum certification.',
                'content' => '<h3>Premium Office Space</h3>
                <p>This state-of-the-art office tower sets new standards for commercial real estate in the city. With 25 floors of Grade-A office space, it offers businesses a prestigious address with cutting-edge facilities.</p>
                
                <h3>Building Features</h3>
                <ul>
                    <li>LEED Platinum Certified</li>
                    <li>Smart Building Management System</li>
                    <li>High-speed Elevators (8 units)</li>
                    <li>Raised Floor System</li>
                    <li>Energy-efficient Curtain Wall</li>
                    <li>Backup Generator System</li>
                    <li>Conference Facilities</li>
                    <li>Executive Lounge</li>
                    <li>Food Court & Cafeteria</li>
                </ul>
                
                <h3>Technical Specifications</h3>
                <p>The building incorporates advanced BIM (Building Information Modeling) from design through construction, ensuring precision and efficiency. Floor-to-ceiling height of 3.5m provides flexible office layouts.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(70),
            ],
            [
                'title' => 'Beach Resort Villas - Vung Tau',
                'slug' => 'beach-resort-villas-vung-tau',
                'excerpt' => 'Exclusive beachfront villas with private pools, modern amenities, and stunning ocean views.',
                'content' => '<h3>Seaside Luxury Living</h3>
                <p>A collection of 12 exclusive beachfront villas offering direct beach access, private pools, and unobstructed ocean views. Each villa is uniquely designed to maximize the coastal experience.</p>
                
                <h3>Villa Features</h3>
                <ul>
                    <li>Direct Beach Access</li>
                    <li>Private Infinity Pools</li>
                    <li>Outdoor Living Spaces</li>
                    <li>Floor-to-ceiling Glass Walls</li>
                    <li>Gourmet Kitchen</li>
                    <li>Master Suite with Ocean View</li>
                    <li>Smart Home Automation</li>
                    <li>Private Garden & Terrace</li>
                </ul>
                
                <h3>Construction Approach</h3>
                <p>Special attention was given to using corrosion-resistant materials and finishes suitable for the coastal environment. The design incorporates natural ventilation to reduce cooling costs.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(85),
            ],
            [
                'title' => 'Mixed-Use Development - Binh Thanh District',
                'slug' => 'mixed-use-development-binh-thanh',
                'excerpt' => 'Integrated mixed-use complex combining residential, retail, and office spaces in a vibrant urban setting.',
                'content' => '<h3>Urban Integration Project</h3>
                <p>This ambitious mixed-use development seamlessly integrates residential living, retail experiences, and office spaces into one cohesive community hub spanning 3 hectares.</p>
                
                <h3>Development Components</h3>
                <ul>
                    <li>2 Residential Towers (35 & 40 stories)</li>
                    <li>Shopping Mall (5 floors)</li>
                    <li>Office Tower (28 stories)</li>
                    <li>Hotel (20 stories)</li>
                    <li>Underground Parking (3 levels)</li>
                    <li>Sky Garden & Observation Deck</li>
                    <li>Food & Beverage Outlets</li>
                    <li>Cinema Complex</li>
                </ul>
                
                <h3>Infrastructure</h3>
                <p>The project includes a dedicated substation, water treatment plant, and advanced waste management system to ensure sustainability and self-sufficiency.</p>',
                'is_published' => true,
                'published_at' => now()->subDays(100),
            ],
            [
                'title' => 'Smart Home Renovation - Traditional House',
                'slug' => 'smart-home-renovation-traditional-house',
                'excerpt' => 'Complete renovation of a traditional Vietnamese house with modern smart home technology integration.',
                'content' => '<h3>Blending Old & New</h3>
                <p>This renovation project transformed a traditional Vietnamese tube house into a modern smart home while preserving its cultural character and architectural elements.</p>
                
                <h3>Smart Features Integrated</h3>
                <ul>
                    <li>Voice-controlled Lighting</li>
                    <li>Automated Climate Control</li>
                    <li>Smart Security System</li>
                    <li>App-controlled Appliances</li>
                    <li>Energy Monitoring Dashboard</li>
                    <li>Automated Curtains & Blinds</li>
                    <li>Water Leak Detection</li>
                    <li>Video Intercom System</li>
                </ul>
                
                <h3>Preservation Elements</h3>
                <p>Original wooden roof trusses were restored and reinforced. Traditional tile work was carefully preserved and complemented with modern lighting to highlight architectural details.</p>',
                'is_published' => false,
                'published_at' => now()->addDays(5),
            ],
        ];

        foreach ($projects as $projectData) {
            Project::create([
                'title' => $projectData['title'],
                'slug' => $projectData['slug'],
                'excerpt' => $projectData['excerpt'],
                'content' => $projectData['content'],
                'is_published' => $projectData['is_published'],
                'published_at' => $projectData['published_at'],
                'user_id' => $user?->id,
            ]);
        }

        $this->command->info('Created ' . count($projects) . ' projects successfully!');
    }
}
