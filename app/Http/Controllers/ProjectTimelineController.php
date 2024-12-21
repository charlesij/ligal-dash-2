<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ProjectTimeline;

class ProjectTimelineController extends Controller
{
    public function timeline()
    {
        $timelineData = ProjectTimeline::all();
        return view('dashboard.patch-timeline', [
            'data' => $timelineData,
        ]);
    }
    public function create()
    {
        return view('dashboard.patch-timeline-create');
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'string|required',
                'description' => 'string|required',
                'icon' => 'string|required',
                'color' => 'string|required',
                'date' => 'string|required', 
                'time' => 'string|required'
            ]);
    
            $date = $request->input('date');
    
            $day = Carbon::parse($date)->format('l');
    
            $insertData = [
                'title' => $request->title,
                'color' => $request->color,
                'description' => $request->description,
                'icon' => $request->icon,
                'day' => $day,
                'time' => $request->time,
                'date' => $request->date,
            ];
    
            ProjectTimeline::create($insertData);
    
            return redirect(route('timeline'))->with('success', 'New Timeline Addedd');
        } catch (\Exception $e) {
            return redirect(route('timeline'))->with('error', $e->getMessage());
        }
    }
}
