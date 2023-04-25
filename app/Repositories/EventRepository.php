<?php

namespace App\Repositories;

use App\Models\EventOccurrence;
use Carbon\Carbon;

class EventRepository
{
    public function getNextHighlightedEventOccurrences()
    {
        $currentDate = Carbon::now();
        $formattedDate = $currentDate->format('Y-m-d');
        $formattedTime = $currentDate->format('H:i:s');

        $result = [];

        try {
            return EventOccurrence::whereHas('event', function ($query) {
                $query->where('highlighted', true);
            })->with('event')
            ->where('occurrence_date', '>=', $formattedDate)
            ->whereRaw("CONCAT(occurrence_date, ' ', start_time) >= ?", [$formattedDate . ' ' . $formattedTime])
            ->orderByRaw("CONCAT(occurrence_date, ' ', start_time) ASC")
            ->get();
        } catch (\Throwable $th) {
            // @TODO: capture exception for ex with sentry
            // for now we throw the exception anyways:
            throw $th;
        }

        return $result;
    }
}
