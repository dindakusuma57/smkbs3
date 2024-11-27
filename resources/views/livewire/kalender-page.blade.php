<link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.0/main.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.0/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.0/main.min.js"></script>

<div>
    <section class="bg-white">
        <div class="relative w-full bg-cover bg-center" style="background-image: url('img/landing2.jpeg');">
            <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
            <div class="relative max-w-5xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-12 text-white text-center flex flex-col items-center justify-center">
                <h1 class="mt-8 text-4xl lg:text-4xl font-semibold">Kalender Akademik</h1>
                <h3 class="mt-4 text-lg font-semibold">
                    <a class="text-white hover:underline">Akademik</a> &gt; <span>Kalender</span>
                </h3>
            </div>
        </div>
    </section>

    <div class="container flex gap-4 p-4">
        <!-- Event List (on the left, 1/3 width) -->
        <div class="event-list w-1/3 border rounded p-4 overflow-y-auto max-h-[600px]">
            <h3 class="text-lg text-[#16423C] font-bold mb-4">Agenda</h3>
            @foreach ($events as $event)
                <div class="event-item mb-3 pb-3 border-b last:border-b-0">
                    <span class="event-color inline-block w-4 h-4 rounded-full mr-2"
                        style="background-color: {{ $event->color }};"></span>
                    <strong>{{ $event->title }}</strong>
                    <div class="text-sm text-gray-500">
                        {{ \Carbon\Carbon::parse($event->start_at)->format('d M Y') }} -
                        {{ \Carbon\Carbon::parse($event->end_at)->format('d M Y') }}
                    </div>
                </div>
            @endforeach
        </div>
    
        <!-- Calendar (on the right, 2/3 width) -->
        <div class="calendar w-2/3" id="calendar"></div>
    </div>
</div>
    
@push('styles')
    <!-- FullCalendar Styles (if the Saade plugin uses its own styles) -->
    <link href="https://unpkg.com/@fullcalendar/core@6.1.8/main.min.css" rel="stylesheet">
    <!-- Saade Plugin Styles if necessary -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/plugin-saade.min.css" rel="stylesheet">
@endpush

@push('scripts')
    <!-- FullCalendar Script -->
    <script src="https://unpkg.com/@fullcalendar/core@6.1.8/main.min.js"></script>
    <!-- FullCalendar Saade Plugin -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/plugin-saade.min.js"></script>

    <script>
        document.addEventListener('livewire:load', function () {
            var calendarEl = document.getElementById('calendar');

            // Initialize FullCalendar with Saade Plugin options
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth', // Initial view (Month View)
                events: {!! json_encode($events->map(function ($event) {
                    return [
                        'title' => $event->title,
                        'start' => $event->start_at,
                        'end' => $event->end_at,
                        'color' => $event->color,
                    ];
                })->toArray()) !!}, // Events from Livewire component

                // Saade plugin specific options (replace these with the plugin's specific features)
                plugins: ['saade'], // Ensure the Saade plugin is added
                selectable: true,  // Enable event selection
                editable: true,    // Enable event editing
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,dayGridWeek,dayGridDay',
                },

                // Other Saade specific options
                saadeOption1: true, // Replace with actual plugin options
                saadeOption2: 'value', // Replace with actual plugin options
            });

            calendar.render();
        });
    </script>
@endpush


    
