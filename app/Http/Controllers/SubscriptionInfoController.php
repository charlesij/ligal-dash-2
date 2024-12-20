<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriptionInfo;

class SubscriptionInfoController extends Controller
{
    public function comingSoon()
    {
        return view('coming-soon');
    }
    public function storeEmails(Request $request)
    {
        $request->validate([
            'subscribers_emails' => 'string|email|max:255'
        ]);

        $validData = [
            'subs_email' => $request->subscribers_emails,
        ];


        if (SubscriptionInfo::where('subs_email', $request->subscribers_emails)->first() !== null){
            $subsSuccessInfo = [
                'You are already subscribed! Please wait for our latest updates.',
                'Subscription already confirmed! Stay tuned for the upcoming news.',
                'Thanks for staying with us! Updates will arrive in your inbox soon.',
                'You’ve already joined! Exciting updates are on the way.',
                'No need to subscribe again! We’ll keep you informed about the latest news.',
            ];
        } else {
            SubscriptionInfo::create($validData);
            $subsSuccessInfo = [
                'Your subscription is confirmed! Stay tuned for our latest updates.',
                'Thank you for subscribing! You\'ll be the first to receive updates and news.',
                'Thanks for joining us! Exciting updates are coming your way.',
                'We\'ve received your subscription. Be ready for our upcoming news and features!',
                'Subscription successful! We\'ll keep you updated with the latest news.',
            ];
        }

        $randomMessage = $subsSuccessInfo[array_rand($subsSuccessInfo)];
        
        return redirect(route('coming-soon'))->with('success', $randomMessage);
    }
}
