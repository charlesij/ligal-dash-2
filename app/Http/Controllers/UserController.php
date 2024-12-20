<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserActivity;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(Request $request)
    {
        $userIp = $request->ip();
        $userId = optional(UserActivity::where('user_ip', $userIp)->first())->user_id;

        if ($userId === null) 
        {
            return redirect(route('dashboard'));
        }
        $user = User::with('userDetails')->where('id', $userId)->first();
        
        return view('dashboard.profile', [
            'userData' => $user,
            'userDetails' => $user->userDetails,
        ]);
    }

    private function autoCreateUser($user_ip)
    {
        return '';
    }
}
