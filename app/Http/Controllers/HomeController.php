<?php

namespace App\Http\Controllers;

use App\Models\EventOccurrence;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentDate = Carbon::now();
        $formattedDate = $currentDate->format('Y-m-d');
        $formattedTime = $currentDate->format('H:i:s');


        $nextHighlightedOccurrences = EventOccurrence::whereHas('event', function ($query) {
            $query->where('highlighted', true);
        })->with('event')
        ->where('occurrence_date', '=', $formattedDate)
        ->where('start_time', '>', $formattedTime)
        ->orderBy('start_time')
        ->get();

        $events = [
            'highlighted' => $nextHighlightedOccurrences
        ];

        return view('home', compact('events'));
    }
}
