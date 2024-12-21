<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Visitor;
use App\Models\RandomQuote;
use App\Models\UserDetails;
use Illuminate\Support\Str;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $this->updateActivity(auth()->user(), $request->ip());
        
        $visitor = Visitor::first();
        $randomQuote = RandomQuote::all()->random();
        return view('dashboard.index', [
            'randomQuote' => $randomQuote,
            'visitor' => $visitor,
        ]);
    }

    private function updateActivity($user, $userIp): void
    {
        if ($user) {
            $existingActivity = UserActivity::where('user_id', $user->id)->first();
    
            if (!$existingActivity) {
                UserActivity::create([
                    'user_id' => $user->id,
                    'user_ip' => $userIp,
                    'route' => 'dashboard',
                    'activity' => 'visit dashboard',
                    'last_login' => Carbon::now(),
                ]);
            } elseif ($existingActivity->user_ip !== $userIp) {
                $existingActivity->update([
                    'user_ip' => $userIp,
                    'route' => 'dashboard',
                    'activity' => 'visit dashboard',
                    'last_login' => Carbon::now(),
                ]);
            }
        } else {
            $existingActivity = UserActivity::where('user_ip', $userIp)->first();
    
            if ($existingActivity) {
                $existingActivity->update([
                    'route' => 'dashboard',
                    'activity' => 'visit dashboard',
                    'last_login' => Carbon::now(),
                ]);
            } else {
                $newUser = 'guest-'.Carbon::now()->format('YmdHis');
                $guestUser = User::create([
                    'uid' => Str::uuid(),
                    'name' => $newUser,
                    'email' => $newUser.'@gmail.com',
                    'password' => bcrypt('visitor@Ligal-Dash-2'),
                ]);
    
                UserActivity::create([
                    'user_id' => $guestUser->id,
                    'user_ip' => $userIp,
                    'route' => 'dashboard',
                    'activity' => 'visit dashboard',
                    'last_login' => Carbon::now(),
                ]);

                UserDetails::create([
                    'user_id' => $guestUser->id,
                    'profession' => 'Project Manager (P.M.)',
                    'profile_photo' => 'profile/guest.jpg',
                    'profile_background' => 'background/guest.jpg',
                    'personal_bio' => 'Hello there! My name is [Name], and I am thrilled to be visiting this wonderful platform. I enjoy exploring new ideas, learning about innovative concepts, and connecting with like-minded individuals. Although I am currently just a guest here, I am curious to dive deeper into what this platform offers and see how it can inspire me. Whether it is engaging content, insightful discussions, or creative tools, I am sure there is something valuable here for everyone. Looking forward to this journey of exploration and discovery. Thank you for welcoming me!',
                    'projects' => '115',
                    'success_rate' => '77.68%',
                    'earning' => 'IDR 10.5M',
                    'city' => 'Bali',
                    'state' => 'Indonesia',
                    'website' => 'lintasinovasiglobal.com',
                    'experience' => '12 Years',
                    'skills' => 'Project Management, Data Analysis, Marketing Strategy, Graphic Design, Content Creation, Event Planning, Finance, Negotiation Skills',
                ]);
            }
        }
    }

    public function signIn()
    {
        return view('signin');
    }

    public function signUp()
    {
        return view('signup');
    }

    public function loginAttempt(Request $request)
    {
        return $request;
    }

    public function firebaseLogin(Request $request)
    {
        try {
            $request->validate([
                'uid' => 'string|required',
                'name' => 'string|required',
                'email' => 'email|required',
            ]);
    
            $validData = [
                'uid' => $request->uid,
                'name' => $request->name,
                'email' => $request->email,
            ];
    
            $user = User::where([
                ['uid', '=', $validData['uid']],
                ['name', '=', $validData['name']],
                ['email', '=', $validData['email']],
            ])->first();

            if (!$user) {
                $user = User::create([
                    'uid' => $validData['uid'],
                    'name' => $validData['name'],
                    'email' => $validData['email'],
                ]);

                UserDetails::create([
                    'user_id' => $user->id,
                    'profession' => 'Project Manager (P.M.)',
                    'profile_photo' => 'profile/guest.jpg',
                    'profile_background' => 'background/guest.jpg',
                    'personal_bio' => 'Hello there! My name is '.$request->name.', and I am thrilled to be visiting this wonderful platform. I enjoy exploring new ideas, learning about innovative concepts, and connecting with like-minded individuals. Although I am currently just a guest here, I am curious to dive deeper into what this platform offers and see how it can inspire me. Whether it is engaging content, insightful discussions, or creative tools, I am sure there is something valuable here for everyone. Looking forward to this journey of exploration and discovery. Thank you for welcoming me!',
                    'projects' => '115',
                    'success_rate' => '77.68%',
                    'earning' => 'IDR 10.5M',
                    'city' => 'Bali',
                    'state' => 'Indonesia',
                    'website' => 'lintasinovasiglobal.com',
                    'experience' => '12 Years',
                    'skills' => 'Project Management, Data Analysis, Marketing Strategy, Graphic Design, Content Creation, Event Planning, Finance, Negotiation Skills',
                ]);
                return response()->json([
                    'status' => 'success',
                    'message' => 'New user has login.',
                ], 404);
            } else {
                // if ($user)
            }
            
            Auth::login($user);

            return response()->json([
                'status' => 'success',
                'message' => 'Login berhasil',
                'redirect' => route('dashboard'),
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error', 
                'message'=> $e->getMessage()
            ]
            );
        }
    }
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
    public function resetPassword()
    {
        return 'kamu mau reset? Sini om crotin';
    }


}
