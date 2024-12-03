<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Attributes\Title;
use Livewire\Component;
use Carbon\Carbon;

#[Title('Kalender - SMK Bina Sejahtera 3')]
class KalenderPage extends Component
{
    public $events;
    public $currentMonth;
    public $currentYear;

    public function mount()
    {
        $this->currentMonth = Carbon::now()->month;
        $this->currentYear = Carbon::now()->year;

        $this->events = Event::whereMonth('start_at', $this->currentMonth)
            ->whereYear('start_at', $this->currentYear)
            ->get()
            ->map(function ($event) {
                $startDate = Carbon::parse($event->start_at);
                $endDate = Carbon::parse($event->end_at);

                if ($startDate->isSameDay($endDate)) {
                    $endDate = $startDate->copy()->endOfDay();
                }

                return [
                    'id' => $event->id,
                    'title' => $event->title,
                    'start' => $startDate->format('Y-m-d'),
                    'end' => $endDate->format('Y-m-d'),
                    'color' => $event->color,
                ];
            });
    }

    public function render()
    {
        return view('livewire.kalender-page', [
            'events' => $this->events,
        ]);
    }
}
