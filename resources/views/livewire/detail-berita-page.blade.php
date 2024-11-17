<link rel="stylesheet" href="css/filament/style.css">
<script type="module" src="js/main.js"></script>

<div>
    {{-- Hero --}}
    <section class="bg-white">
        <div class="relative w-full bg-cover bg-center" style="background-image: url('{{ asset('storage/' . $berita->image) }}');">
            <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
            <div class="relative max-w-5xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-12 text-white text-center flex flex-col items-center justify-center">
                <h1 class="mt-8 text-4xl lg:text-4xl font-semibold">{{ $berita->judul }}</h1>
                <h3 class="mt-4 text-lg font-semibold">
                    <a href="/" class="text-white hover:underline">Beranda</a> &gt; <span><a href="/berita" class="text-white hover:underline">Berita</a> &gt; </span><span>{{ $berita->slug }}</span>
                </h3>
            </div>
        </div>
    </section>

    {{-- Berita --}}
    <section class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">

            <div class="col-span-2 space-y-8">
                <div class="space-y-4">
                    <div>
                        <img src="{{ asset('storage/' . $berita->image) }}" width="800" height="450" alt="Featured Image"
                            class="aspect-video overflow-hidden rounded-xl object-cover" />
                    </div>
                    <div class="space-y-4">
                        <h1 class="text-[#16423C] text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl xl:text-[3.4rem] 2xl:text-[3.75rem]">
                            {{ $berita->judul }}
                        </h1>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <div class="border-l h-4"></div>
                            <div>{{ \Carbon\Carbon::parse($berita->created_at)->format('d F Y') }}</div>
                        </div>
                        <p class="text-[#002500] md:text-xl">{{ $berita->deskripsi }}</p>
                    </div>
                </div>

                <div class="prose prose-gray dark:prose-invert text-[#002500]">
                    {!! nl2br(e($berita->konten)) !!}
                </div>
            </div>

            <div class="space-y-6">
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <h3 class="text-lg font-semibold text-[#16423C]">Cari Berita</h3>
                    {{-- <form action="{{ route('berita.search') }}" method="GET" class="mt-4">
                        <input type="text" name="q" class="w-full p-2 border rounded-md" placeholder="Cari berita..." value="{{ request()->input('q') }}" />
                        <button type="submit" class="w-full mt-2 bg-[#16423C] text-white p-2 rounded-md">Cari</button>
                    </form> --}}

                </div>

                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-[#16423C]">Berita Terbaru</h3>
                    <div class="grid gap-4">
                        @foreach ($recentBeritas as $recent)
                            <a href="{{ route('berita.show', $recent->slug) }}" class="grid grid-cols-[100px_1fr] items-center gap-4">
                                <img src="{{ asset('storage/' . $recent->image) }}" width="100" height="60" alt="Related News"
                                    class="aspect-[5/3] overflow-hidden rounded-md object-cover" />
                                <div class="space-y-1">
                                    <h4 class="text-sm font-medium leading-tight text-[#16423C]">{{ $recent->judul }}</h4>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">{{ \Carbon\Carbon::parse($recent->created_at)->format('d-m-Y') }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
