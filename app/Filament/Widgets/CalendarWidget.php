<?php

namespace App\Filament\Widgets;

use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use App\Filament\Resources\EventResource;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\ColorPicker;
use Saade\FilamentFullCalendar\Actions\CreateAction;
use Saade\FilamentFullCalendar\Actions\EditAction;
use Saade\FilamentFullCalendar\Actions\DeleteAction;
use Filament\Forms\Form;
use Filament\Actions\Action;
use Saade\FilamentFullCalendar\Actions\ViewAction;

class CalendarWidget extends FullCalendarWidget
{
    public Model | string | null $model = Event::class;

    public function config(): array
    {
        return [
            'firstDay' => 1,
            'headerToolbar' => [
                'left' => 'dayGridWeek,dayGridDay',
                'center' => 'title',
                'right' => 'prev,next today',
            ],
        ];
    }

    public function fetchEvents(array $fetchInfo): array
    {
        return Event::query()
            ->whereBetween('start_at', [$fetchInfo['start'], $fetchInfo['end']])
            ->get()
            ->map(
                fn(Event $event) => [
                    'id'                    => $event->id,
                    'title'                 => $event->title,
                    'color'                 => $event->color,
                    'start'                 => $event->start_at,
                    'end'                   => $event->end_at,
                ]
            )
            ->all();
    }

    public function getFormSchema(): array
    {
        return [
            TextInput::make(name: 'title'),
            ColorPicker::make(name: 'color'),

            Grid::make()
                ->schema([
                    DateTimePicker::make(name: 'start_at'),

                    DateTimePicker::make(name: 'end_at'),
                ]),
        ];
    }

    protected function headerActions(): array
    {
        return [
            CreateAction::make()
                ->label(label: 'Add Event'),
        ];
    }

    protected function modalActions(): array
    {
        return [
            CreateAction::make()
                ->mountUsing(
                    callback: function (Forms\Form $form, array $arguments) {
                        $form->fill([
                            'start_at' => $arguments['start'] ?? null,
                            'end_at' => $arguments['end'] ?? null
                        ]);
                    }
                ),

            EditAction::make()
                ->mountUsing(
                    function (Event $record, Form $form, array $arguments) {
                        $form->fill([
                            'title' => $record->title,
                            'color' => $record->color,
                            'start_at' => $arguments['event']['start'] ?? $record->start_at,
                            'end_at' => $arguments['event']['end'] ?? $record->end_at
                        ]);
                    }
                ),
            DeleteAction::make(),
        ];
    }

    public function eventDidMount(): string
    {
        return <<<JS
        function({ event, timeText, isStart, isEnd, isMirror, isPast, isFuture, isToday, el, view }){
            el.setAttribute("x-tooltip", "tooltip");
            el.setAttribute("x-data", "{ tooltip: '"+event.title+"' }");
        }
    JS;
    }

    protected function viewAction(): Action{
        return ViewAction::make()
            ->modalFooterActions(actions: fn (ViewAction $action) => [
                EditAction::make(),
                DeleteAction::make(),
                $action->getModalCancelAction(),

            ]);
    }
}
