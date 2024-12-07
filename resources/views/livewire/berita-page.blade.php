<link rel="stylesheet" href="css/filament/style.css">
<script type="module" src="js/main.js"></script>
<script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<div>
    {{-- Hero Start --}}
    <section class="bg-white">
        <div class="relative w-full bg-cover bg-center" style="background-image: url('img/landing2.jpeg');">
            <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
            <div
                class="relative max-w-5xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-12 text-white text-center flex flex-col items-center justify-center">
                <h1 class="mt-8 text-4xl lg:text-4xl font-semibold">Berita</h1>
                <h3 class="mt-4 text-lg font-semibold">
                    <a href="/" class="text-white hover:underline">Beranda</a> &gt; <span>Berita</span>
                </h3>
            </div>
        </div>
    </section>
    {{-- Hero End --}}

    {{-- Latest News --}}
    <section id="newsupdate">
        <div class="mx-auto mt-8 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-extrabold text-[#16423C] sm:text-4xl" data-aos="fade-up">Berita Terbaru</h1>
            <p data-aos="fade-up"
                class="mb-5 font-medium sm:text-2xl text-[#16423C] mt-2 text-base leading-7 inline border-b-4 border-[#6A9C89] pb-2 max-w-max">
                SMK Bina Sejahtera 3
            </p>

            @foreach ($recentBeritas as $recent)
                @php
                    $images = is_array($recent->image) ? $recent->image : explode(',', $recent->image);
                @endphp

                <div data-aos="zoom-out"
                    class="mt-8 flex flex-col sm:flex-row items-center shadow-md bg-white rounded-lg p-6 transition-transform transform hover:scale-105 hover:shadow-lg">
                    <div class="flex-1 mb-4 sm:mb-0 sm:w-1/2">
                        <img class="bg-cover rounded-lg w-full h-auto" src="{{ asset('storage/' . trim($images[0])) }}"
                            alt="" />
                    </div>
                    <div class="flex-1 sm:px-10 sm:w-1/2">
                        <h1 class="text-[#16423C] font-bold text-2xl sm:text-3xl my-2">{{ $recent->judul }}</h1>
                        <p class="text-[#16423C] mb-2 md:mb-6 text-base sm:text-lg">
                            {{ Str::limit($recent->deskripsi, 150) }}....
                        </p>
                        <div class="flex justify-between mb-2">
                            <span
                                class="font-thin text-sm text-[#16423C]">{{ \Carbon\Carbon::parse($recent->created_at)->format('d-m-Y') }}</span>
                            <a href="{{ route('berita.show', $recent->slug) }}">
                                <span class="block sm:hidden mb-2 text-[#16423C] font-semibold">Baca Selengkapnya ...</span>
                                <span class="hidden sm:block mb-2 text-[#16423C] font-semibold">Baca Selengkapnya ...</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Latest news end --}}

    {{--  All berita --}}
    <section id="news" class="mx-auto py-16 px-4 sm:px-6 lg:px-8">

        {{-- Category --}}
        <div class="flex flex-col sm:flex-row space-x-2 mb-2 justify-between">
            <h1 class="text-3xl font-extrabold text-[#16423C] sm:text-4xl mb-6" data-aos="fade-up">
                Berita
            </h1>

            <div>
                <span onclick="selectCategory('all')"
                    id="allCategoryButton"
                    class="category-button mx-2 cursor-pointer text-sm font-semibold px-5 py-1 rounded-full hover:bg-[#16423C] hover:text-white">
                    Semua
                </span>
                @foreach ($categories as $category)
                    <button onclick="selectCategory({{ $category->id }})"
                        class="category-button text-sm font-semibold px-5 py-1 rounded-full hover:bg-[#16423C] hover:text-white"
                        data-category-id="{{ $category->id }}">
                        {{ $category->judul }}
                    </button>
                @endforeach
            </div>
        </div>

        {{-- Category End --}}

        {{-- Card --}}
        <div data-aos="fade-up" class="grid md:grid-cols-4 gap-6">
            @forelse ($beritas as $berita)
                @php
                    $images = is_array($berita->image) ? $berita->image : explode(',', $berita->image);
                @endphp

                <a href="{{ route('berita.show', $berita->slug) }}" class="block berita-item"
                    data-category-id="{{ $berita->category_id }}">
                    <div
                        class="bg-white rounded-lg shadow-lg p-4 transition-transform transform hover:scale-105 flex flex-col h-full">
                        <img class="rounded-lg mb-4 w-full h-48 object-cover"
                            src="{{ asset('storage/' . $images[0]) }}" alt="Gambar Berita">
                        <h2 class="text-lg font-bold text-[#116453] mb-2 flex-grow">{{ $berita->judul }}</h2>
                        <p class="text-sm text-[#116453] mt-2 mb-4 flex-grow">{{ Str::limit($berita->deskripsi, 80) }}
                        </p>
                        <span
                            class="text-xs text-gray-600 mt-auto">{{ \Carbon\Carbon::parse($berita->created_at)->format('d-m-Y') }}</span>
                    </div>
                </a>
            @empty
                <p class="col-span-3 text-center text-gray-500">Tidak ada berita ditemukan.</p>
            @endforelse
        </div>

        <div class="mt-8 flex justify-center">
            <ul class="inline-flex items-center space-x-1">
                @if ($beritas->onFirstPage())
                    <li class="text-gray-500 px-3 py-1 rounded-md cursor-not-allowed">Previous</li>
                @else
                    <li>
                        <a href="{{ $beritas->previousPageUrl() }}"
                            class="px-3 py-1 rounded-md bg-[#6A9C89] text-white hover:bg-[#5e8b7d]">Previous</a>
                    </li>
                @endif

                @foreach ($beritas->getUrlRange(1, $beritas->lastPage()) as $page => $url)
                    <li>
                        <a href="{{ $url }}"
                            class="{{ $page == $beritas->currentPage() ? 'bg-[#16423C] text-white' : 'bg-[#6A9C89] text-white' }} px-3 py-1 rounded-md hover:bg-[#5e8b7d]">
                            {{ $page }}
                        </a>
                    </li>
                @endforeach

                @if ($beritas->hasMorePages())
                    <li>
                        <a href="{{ $beritas->nextPageUrl() }}"
                            class="px-3 py-1 rounded-md bg-[#6A9C89] text-white hover:bg-[#5e8b7d]">Next</a>
                    </li>
                @else
                    <li class="text-gray-500 px-3 py-1 rounded-md cursor-not-allowed">Next</li>
                @endif
            </ul>
        </div>
    </section>

    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
