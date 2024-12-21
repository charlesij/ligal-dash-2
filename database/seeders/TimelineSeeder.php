<?php

namespace Database\Seeders;

use App\Models\ProjectTimeline;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TimelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectTimeline::create([
            'title' => 'Project Started',
            'description' => 'The development of Lintas Inovasi Global Dashboard Templates has started today. We are optimizing the landing page, enhancing the dashboard system, and adding new assets.',
            'icon' => '<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-player-play"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" /></svg>',
            'color' => 'primary',
            'day' => 'Monday',
            'time' => '16:09',
            'date' => 'December 9, 2024',
        ]);
    }
}
