<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Visitor;
use App\Models\RandomQuote;
use App\Models\UserActivity;
use Illuminate\Http\Request;

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
}
