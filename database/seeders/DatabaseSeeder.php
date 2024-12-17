<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Visitor;
use App\Models\Categories;
use App\Models\RandomQuote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $randomQuote = [
            "Welcome! Let's embark on your data adventure.",
            "Ready to guide you through the exciting world of data.",
            "Your data, your rules. Happy exploring!",
            "Welcome to your data headquarters!",
            "Uncover valuable insights hidden within your data.",
            "Make smarter decisions with better data.",
            "Boost your business efficiency with accurate data.",
            "Your data is your map to success. Let's explore together!",
            "Your data world, your rules. Be creative!",
            "Data is your best friend. Let's strengthen the bond!",
            "Welcome to Your Finance Dashboard! Uncover valuable insights hidden within your data.",
        ];
        foreach ($randomQuote as $item) {
            RandomQuote::create([
                'random_quote' => $item,
                'personalized_quote' => null,
            ]);
        }

        Visitor::create([
            'total_visitor' => 0,
            'day' => Carbon::now(),
        ]);   
        
        $categories = [
            'Automotive',
            'Household',
            'Electronics',
            'Books',
            'Kitchen',
            'Kids & Baby Fashion',
            'Muslim Fashion',
            "Men's Fashion",
            "Women's Fashion",
            'Movies & Music',
            'Gaming',
            'Mobile Phones & Tablets',
            'Mother & Baby',
            'Beauty',
            'Health',
            'Computers & Laptops',
            'Toys & Hobbies',
            'Foods & Beverages',
            'Office & Stationery',
            'Sports',
            'Pet Care',
            'Body Care',
            'Body Accesories',
            'Party Supplies',
            'Hardware',
            'Property',
            'Tickets, Travel, Vouchers',
            'Others',
        ];

        foreach ($categories as $category) {
            Categories::create([
                'category_name' => $category
            ]);
        }

        $this->call(UserSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
