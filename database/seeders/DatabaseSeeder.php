<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Visitor;
use App\Models\RandomQuote;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
    }
}
