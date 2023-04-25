<?php

namespace App\View\Composers;

use App\Repositories\EventRepository;
use Illuminate\View\View;

class HomeComposer
{
    /**
     * The user repository implementation.
     *
     * @var \App\Repositories\EventRepository
     */
    protected $events;

    /**
     * Create a new profile composer.
     *
     * @param  \App\Repositories\EventRepository  $events
     * @return void
     */
    public function __construct(EventRepository $events)
    {
        // Dependencies are automatically resolved by the service container...
        $this->events = $events;
    }

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('nextHighlightedEventOccurrences', $this->events->getNextHighlightedEventOccurrences());
    }
}
