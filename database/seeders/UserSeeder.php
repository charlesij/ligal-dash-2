<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Str;
use App\Models\UserActivity;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'uid' => Str::uuid(),
                'name' => 'guest-202412010000',
                'email' => 'guest-202412010000@gmail.com',
                'password' => bcrypt('visitor@Ligal-Dash-2'),
            ],
            [
                'uid' => Str::uuid(),
                'name' => 'Diki Hidayatullah',
                'email' => 'kiki@lintasinovasiglobal.com',
                'password' => bcrypt('kuncinyasamakiki'),
            ],
            [
                'uid' => Str::uuid(),
                'name' => 'Maryono Pane',
                'email' => 'maryo@lintasinovasiglobal.com',
                'password' => bcrypt('kuncinyasamamaryo'),
            ],
            [
                'uid' => Str::uuid(),
                'name' => 'Charles',
                'email' => 'charles@lintasinovasiglobal.com',
                'password' => bcrypt('kuncinyasamacharles'),
            ],
            [
                'uid' => Str::uuid(),
                'name' => 'Irwan Setiawan',
                'email' => 'irwan@lintasinovasiglobal.com',
                'password' => bcrypt('kuncinyasamairwan'),
            ],
            [
                'uid' => Str::uuid(),
                'name' => 'Ein Carvi',
                'email' => 'carvi@lintasinovasiglobal.com',
                'password' => bcrypt('kuncinyasamacarvi'),
            ],
            [
                'uid' => Str::uuid(),
                'name' => 'Renaldy',
                'email' => 'aldi@lintasinovasiglobal.com',
                'password' => bcrypt('kuncinyasamaaldi'),
            ],
            [
                'uid' => Str::uuid(),
                'name' => 'Eko Wijaya',
                'email' => 'eko@lintasinovasiglobal.com',
                'password' => bcrypt('kuncinyasamaeko'),
            ],
        ];
        $usersDetails = [
            [
                'user_id' => 1,
                'profession' => 'Project Manager (P.M.)',
                'profile_photo' => 'profile/guest.jpg',
                'profile_background' => 'background/guest.jpg',
                'personal_bio' => '
                My name is [Name], and I am thrilled to explore this wonderful platform. I have a deep passion for discovering new ideas, learning about innovative concepts, and connecting with like-minded individuals. This journey allows me to engage with creativity and knowledge in ways that inspire growth and curiosity.

                As a guest here, I am eager to dive deeper into the incredible opportunities this platform provides. Whether it’s engaging content, insightful discussions, or creative tools, I believe there’s something valuable here for everyone to enjoy and benefit from.

                I am genuinely excited about this journey of exploration and discovery. Thank you for the warm welcome, and I look forward to contributing and learning alongside this amazing community!',
                'projects' => '115',
                'success_rate' => '77.68%',
                'earning' => 'IDR 10.5M',
                'city' => 'Bali',
                'state' => 'Indonesia',
                'website' => 'lintasinovasiglobal.com',
                'experience' => '12 Years',
                'skills' => 'Project Management, Data Analysis, Marketing Strategy, Graphic Design, Content Creation, Event Planning, Finance, Negotiation Skills',
            ],
            [
                'user_id' => 2,
                'profession' => 'Chief Executive Officer/Director',
                'profile_photo' => 'profile/profile-1.webp',
                'profile_background' => 'background/ceo.jpg',
                'personal_bio' => 'My name is Diki Hidayatullah, and I am thrilled to explore this wonderful platform. I have a deep passion for discovering new ideas, learning about innovative concepts, and connecting with like-minded individuals. This journey allows me to engage with creativity and knowledge in ways that inspire growth and curiosity.

                As a guest here, I am eager to dive deeper into the incredible opportunities this platform provides. Whether it’s engaging content, insightful discussions, or creative tools, I believe there’s something valuable here for everyone to enjoy and benefit from.

                I am genuinely excited about this journey of exploration and discovery. Thank you for the warm welcome, and I look forward to contributing and learning alongside this amazing community!',
                'projects' => '101',
                'success_rate' => '87.68%',
                'earning' => 'IDR 10.5M',
                'city' => 'Jakarta',
                'state' => 'Indonesia',
                'website' => 'lintasinovasiglobal.com',
                'experience' => '12 Years',
                'skills' => 'Project Management, Data Analysis, Marketing Strategy, Graphic Design, Content Creation, Event Planning, Finance, Negotiation Skills',
            ],
            [
                'user_id' => 3,
                'profession' => 'Chief Executive Officer/Director',
                'profile_photo' => 'profile/profile-2.webp',
                'profile_background' => 'background/ceo.jpg',
                'personal_bio' => 'My name is Maryo Pane, and I am thrilled to explore this wonderful platform. I have a deep passion for discovering new ideas, learning about innovative concepts, and connecting with like-minded individuals. This journey allows me to engage with creativity and knowledge in ways that inspire growth and curiosity.

                As a guest here, I am eager to dive deeper into the incredible opportunities this platform provides. Whether it’s engaging content, insightful discussions, or creative tools, I believe there’s something valuable here for everyone to enjoy and benefit from.

                I am genuinely excited about this journey of exploration and discovery. Thank you for the warm welcome, and I look forward to contributing and learning alongside this amazing community!',
                'projects' => '102',
                'success_rate' => '87.68%',
                'earning' => 'IDR 10.5M',
                'city' => 'Medan',
                'state' => 'Indonesia',
                'website' => 'lintasinovasiglobal.com',
                'experience' => '12 Years',
                'skills' => 'Project Management, Data Analysis, Marketing Strategy, Graphic Design, Content Creation, Event Planning, Finance, Negotiation Skills',
            ],
            [
                'user_id' => 4,
                'profession' => 'Chief Executive Officer/Director',
                'profile_photo' => 'profile/profile-3.webp',
                'profile_background' => 'background/ceo.jpg',
                'personal_bio' => 'Hey y\'all!! 
                My name is Charles, and I am a dedicated Backend Developer with a strong foundation in Laravel. My journey into programming began with this framework, and it has fueled my passion for creating robust, efficient, and secure applications. I specialize in designing and developing backend systems that ensure smooth functionality, scalability, and a user-friendly experience.
                
                Beyond my technical expertise, I am an avid learner who thrives on exploring new technologies and programming trends. I am currently expanding my skillset by diving into clean code principles, unit testing, and experimenting with various backend frameworks like Express.js to enhance my versatility as a developer.
                
                Outside of coding, I have a deep passion for **automotive topics**—from exploring the latest innovations in vehicles to following content from renowned creators. I also enjoy playing games, which has inspired me to venture into game development. I am currently learning **pixel art design** and planning to develop a **real-time RPG game using WebSocket technology**. This project combines my technical skills and creative interests, with the goal of building an engaging and immersive gaming experience.
                
                In everything I do, I strive for excellence by balancing functionality, security, and efficiency. My dream is to create impactful software and contribute to the world of technology, while continuously growing as a professional and a creator.
                
                Let\'s connect and bring innovative ideas to life!'
                ,
                'projects' => '7',
                'success_rate' => '80%',
                'earning' => 'IDR 10.5M',
                'city' => 'Bogor',
                'state' => 'Indonesia',
                'website' => 'lintasinovasiglobal.com',
                'experience' => '4 Years',
                'skills' => 'Adaptive Learner, Laravel Environment, PhpUnit Testing, Swagger Documentation, Content Creation, Project Management, Team Collaboration',
            ],
            [
                'user_id' => 5,
                'profession' => 'Chief Executive Officer/Director',
                'profile_photo' => 'profile/profile-4.webp',
                'profile_background' => 'background/ceo.jpg',
                'personal_bio' => 'My name is Irwan Setiawan, and I am thrilled to explore this wonderful platform. I have a deep passion for discovering new ideas, learning about innovative concepts, and connecting with like-minded individuals. This journey allows me to engage with creativity and knowledge in ways that inspire growth and curiosity.

                As a guest here, I am eager to dive deeper into the incredible opportunities this platform provides. Whether it’s engaging content, insightful discussions, or creative tools, I believe there’s something valuable here for everyone to enjoy and benefit from.

                I am genuinely excited about this journey of exploration and discovery. Thank you for the warm welcome, and I look forward to contributing and learning alongside this amazing community!',
                'projects' => '102',
                'success_rate' => '87.68%',
                'earning' => 'IDR 10.5M',
                'city' => 'Batam',
                'state' => 'Indonesia',
                'website' => 'lintasinovasiglobal.com',
                'experience' => '12 Years',
                'skills' => 'Project Management, Data Analysis, Marketing Strategy, Graphic Design, Content Creation, Event Planning, Finance, Negotiation Skills',
            ],
            [
                'user_id' => 6,
                'profession' => 'Chief Executive Officer/Director',
                'profile_photo' => 'profile/profile-5.webp',
                'profile_background' => 'background/ceo.jpg',
                'personal_bio' => 'My name is Ein Carvi, and I am thrilled to explore this wonderful platform. I have a deep passion for discovering new ideas, learning about innovative concepts, and connecting with like-minded individuals. This journey allows me to engage with creativity and knowledge in ways that inspire growth and curiosity.

                As a guest here, I am eager to dive deeper into the incredible opportunities this platform provides. Whether it’s engaging content, insightful discussions, or creative tools, I believe there’s something valuable here for everyone to enjoy and benefit from.

                I am genuinely excited about this journey of exploration and discovery. Thank you for the warm welcome, and I look forward to contributing and learning alongside this amazing community!',
                'projects' => '102',
                'success_rate' => '87.68%',
                'earning' => 'IDR 10.5M',
                'city' => 'Sukabumi',
                'state' => 'Indonesia',
                'website' => 'lintasinovasiglobal.com',
                'experience' => '12 Years',
                'skills' => 'Project Management, Data Analysis, Marketing Strategy, Graphic Design, Content Creation, Event Planning, Finance, Negotiation Skills',
            ],
            [
                'user_id' => 7,
                'profession' => 'Chief Executive Officer/Director',
                'profile_photo' => 'profile/profile-6.webp',
                'profile_background' => 'background/ceo.jpg',
                'personal_bio' => 'My name is Renaldy, and I am thrilled to explore this wonderful platform. I have a deep passion for discovering new ideas, learning about innovative concepts, and connecting with like-minded individuals. This journey allows me to engage with creativity and knowledge in ways that inspire growth and curiosity.

                As a guest here, I am eager to dive deeper into the incredible opportunities this platform provides. Whether it’s engaging content, insightful discussions, or creative tools, I believe there’s something valuable here for everyone to enjoy and benefit from.

                I am genuinely excited about this journey of exploration and discovery. Thank you for the warm welcome, and I look forward to contributing and learning alongside this amazing community!',
                'projects' => '102',
                'success_rate' => '87.68%',
                'earning' => 'IDR 10.5M',
                'city' => 'Tangerang',
                'state' => 'Indonesia',
                'website' => 'lintasinovasiglobal.com',
                'experience' => '12 Years',
                'skills' => 'Project Management, Data Analysis, Marketing Strategy, Graphic Design, Content Creation, Event Planning, Finance, Negotiation Skills',
            ],
            [
                'user_id' => 8,
                'profession' => 'Chief Executive Officer/Director',
                'profile_photo' => 'profile/profile-7.webp',
                'profile_background' => 'background/ceo.jpg',
                'personal_bio' => 'My name is Eko Wijaya, and I am thrilled to explore this wonderful platform. I have a deep passion for discovering new ideas, learning about innovative concepts, and connecting with like-minded individuals. This journey allows me to engage with creativity and knowledge in ways that inspire growth and curiosity.

                As a guest here, I am eager to dive deeper into the incredible opportunities this platform provides. Whether it’s engaging content, insightful discussions, or creative tools, I believe there’s something valuable here for everyone to enjoy and benefit from.

                I am genuinely excited about this journey of exploration and discovery. Thank you for the warm welcome, and I look forward to contributing and learning alongside this amazing community!',
                'projects' => '102',
                'success_rate' => '87.68%',
                'earning' => 'IDR 10.5M',
                'city' => 'Tangerang',
                'state' => 'Indonesia',
                'website' => 'lintasinovasiglobal.com',
                'experience' => '12 Years',
                'skills' => 'Project Management, Data Analysis, Marketing Strategy, Graphic Design, Content Creation, Event Planning, Finance, Negotiation Skills',
            ],
        ];
        
        foreach ($users as $user) {
            User::create([
                'uid' => $user['uid'],
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
            ]);
        }

        foreach ($usersDetails as $userDetail) {
            UserDetails::create([
                'user_id' => $userDetail['user_id'],
                'profession' => $userDetail['profession'],
                'profile_photo' => $userDetail['profile_photo'],
                'profile_background' => $userDetail['profile_background'],
                'personal_bio' => $userDetail['personal_bio'],
                'projects' => $userDetail['projects'],
                'success_rate' => $userDetail['success_rate'],
                'earning' => $userDetail['earning'],
                'city' => $userDetail['city'],
                'state' => $userDetail['state'],
                'website' => $userDetail['website'],
                'experience' => $userDetail['experience'],
                'skills' => $userDetail['skills'],
            ]);
        }


        UserActivity::create([
            'user_id' => 1,
            'user_ip' => "192.168.3.247",
            'route' => "dashboard",
            'activity' => "visit dashboard",
            'last_login' => Carbon::now(),
        ]);
    }
}
