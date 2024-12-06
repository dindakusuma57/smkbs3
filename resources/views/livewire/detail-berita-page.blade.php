<link rel="stylesheet" href="css/filament/style.css">
<script type="module" src="js/main.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div>
    {{-- Hero --}}
    <section class="bg-white">
        <div class="relative w-full bg-cover bg-center"
            style="background-image: url('{{ asset('img/landing2.jpeg') }}');">
            <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
            <div
                class="relative max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-12 text-white text-center flex flex-col items-center justify-center">
                <h1 class="mt-8 text-lg sm:text-3xl lg:text-4xl font-semibold">{{ $berita->judul }}</h1>
                <h3 class="mt-4 text-sm sm:text-lg font-semibold">
                    <a href="/berita" class="text-white hover:underline">Berita</a> &gt;
                    </span><span>{{ $berita->slug }}</span>
                </h3>
            </div>
        </div>
    </section>

    {{-- Berita utama --}}
    <section class="py-10 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

            <div class="col-span-1 sm:col-span-2 space-y-8">
                <div class="space-y-4" data-aos="fade-up">
                    {{-- Gambar --}}
                    <div data-aos="zoom-out" class="w-full mb-8">
                        @php
                            $images = is_array($berita->image) ? $berita->image : explode(',', $berita->image);
                        @endphp

                        {{-- Gambar Utama --}}
                        <img src="{{ asset('storage/' . $images[0]) }}" alt="{{ $berita->judul }}"
                            class="aspect-video overflow-hidden rounded-xl object-cover w-full"
                            id="mainImage" style="max-width: 800px; height: 450px;">

                        {{-- Thumbnail Gambar --}}
                        <div class="flex gap-4 py-4 justify-center overflow-x-auto">
                            @foreach ($images as $image)
                                <img src="{{ asset('storage/' . trim($image)) }}" alt="Thumbnail"
                                    class="w-20 h-20 sm:w-24 sm:h-24 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                                    onclick="changeImage(this.src)">
                            @endforeach
                        </div>
                    </div>

                    <div data-aos="fade-up" class="space-y-4">
                        <h1
                            class="text-[#16423C] text-2xl sm:text-3xl md:text-4xl font-bold tracking-tighter">
                            {{ $berita->judul }}
                        </h1>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <div class="border-l h-4"></div>
                            <div>{{ \Carbon\Carbon::parse($berita->created_at)->format('d F Y') }}</div>
                        </div>
                        <p class="text-[#002500] text-justify text-base">{{ $berita->deskripsi }}</p>
                    </div>
                </div>

                <div data-aos="fade-up" class="prose prose-gray dark:prose-invert text-[#002500]">
                    {!! nl2br(e($berita->konten)) !!}
                </div>
            </div>

            {{-- Berita terbaru --}}
            <div data-aos="fade-up" class="space-y-6 px-8">
                {{-- berita --}}
                <div class="space-y-4">
                    <h3 class="text-lg font-semibold text-[#16423C] leading-7 inline border-b-4 border-[#6A9C89] pb-2 max-w-max">Berita Terbaru</h3>
                    <div class="grid gap-4">
                        @foreach ($recentBeritas as $recent)
                            <a href="{{ route('berita.show', $recent->slug) }}"
                                class="grid grid-cols-[100px_1fr] items-center gap-4">

                                @php
                                    $images = is_array($recent->image) ? $recent->image : explode(',', $recent->image);
                                @endphp

                                <img src="{{ asset('storage/' . trim($images[0])) }}" width="100" height="60"
                                    alt="Related News" class="aspect-[5/3] overflow-hidden rounded-md object-cover" />

                                <div class="space-y-1">
                                    <h4 class="text-sm font-medium leading-tight text-[#16423C]">{{ $recent->judul }}
                                    </h4>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">
                                        {{ \Carbon\Carbon::parse($recent->created_at)->format('d-m-Y') }}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    function changeImage(src) {
        document.getElementById('mainImage').src = src;
    }
</script>
