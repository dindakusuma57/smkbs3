<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
<script type="module" src="js/main.js"></script>

<div>
    <!-- Section Header -->
    <section class="bg-white">
        <div class="relative w-full bg-cover bg-center" style="background-image: url('img/landing2.jpeg');">
            <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
            <div
                class="relative max-w-5xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-12 text-white text-center flex flex-col items-center justify-center">
                <h1 class="mt-8 text-4xl lg:text-4xl font-semibold">Kalender Akademik</h1>
                <h3 class="mt-4 text-lg font-semibold">
                    <a class="text-white hover:underline">Akademik</a> &gt; <span>Kalender</span>
                </h3>
            </div>
        </div>
    </section>

    <div class="container mx-auto flex flex-col lg:flex-row gap-4 p-4">
        <!-- Event List -->
        <div
            class="bg-[#C4DAD2] event-list w-full lg:w-1/3 border rounded p-4 overflow-y-auto max-h-[600px] shadow-lg">
            <h3 class="text-lg text-[#16423C] font-bold mb-4">Agenda</h3>
            @foreach ($events as $event)
                <div class="event-item mb-3 pb-3 border-b last:border-b-0">
                    <span class="event-color inline-block w-4 h-4 rounded-full mr-2"
                        style="background-color: {{ $event['color'] }};"></span>
                    <strong class="text-[#16423C]">{{ $event['title'] }}</strong>
                    <div class="text-sm text-[#16423C]">
                        {{ \Carbon\Carbon::parse($event['start'])->format('d M Y') }} -
                        {{ \Carbon\Carbon::parse($event['end'])->format('d M Y') }}
                    </div>
                </div>
            @endforeach
        </div>
        <!-- FullCalendar -->
        <div class="calendar w-full lg:w-2/3 bg-white shadow-lg rounded p-4" id="calendar" data-events='@json($events)'></div>
    </div>
</div>
