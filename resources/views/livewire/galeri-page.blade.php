<link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div>
    <section class="bg-white">
        <div class="relative w-full bg-cover bg-center" style="background-image: url('img/landing2.jpeg');">
            <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
            <div
                class="relative max-w-5xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-12 text-white text-center flex flex-col items-center justify-center">
                <h1 class="mt-8 text-4xl lg:text-4xl font-semibold">Galeri</h1>
                <h3 class="mt-4 text-lg font-semibold">
                    <a href="#" class="text-white hover:underline">Beranda</a> &gt; <span>Galeri</span>
                </h3>
            </div>
        </div>
    </section>

    {{-- Keterangan Galeri --}}
    <section>
        <div class="max-w-5xl mt-8 mx-auto  text-center mb-10 lg:mb-10">
            <h1 data-aos="fade-up" class="text-3xl font-extrabold text-[#16423C] sm:text-4xl" data-aos="fade-up">Galeri
            </h1>
            <p data-aos="fade-up"
                class="font-medium sm:text-2xl text-[#16423C] mt-2 text-center text-base leading-7 inline-block border-b-4 border-[#6A9C89] pb-2">
                SMK Bina Sejahtera 3
            </p>
        </div>
    </section>

    {{-- gambar --}}
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mb-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($galeris as $galeri)
                <div class="grid gap-4">
                    <div data-aos="fade-up">
                        <a href="{{ asset('storage/' . $galeri->image) }}" data-fancybox="gallery"
                            data-caption="{{ $galeri->judul }}">
                            <img class="h-auto max-w-full rounded-lg"
                                src="{{ $galeri ? asset('storage/' . $galeri->image) : '' }}"
                                alt="{{ $galeri->judul }}">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8 flex justify-center">
            <ul class="inline-flex items-center space-x-1">
                @if ($galeris->onFirstPage())
                    <li class="text-gray-500 px-3 py-1 rounded-md cursor-not-allowed">&laquo; Previous</li>
                @else
                    <li>
                        <a href="{{ $galeris->previousPageUrl() }}"
                            class="px-3 py-1 rounded-md bg-[#6A9C89] text-white hover:bg-[#5e8b7d]">&laquo; Previous</a>
                    </li>
                @endif

                @foreach ($galeris->getUrlRange(1, $galeris->lastPage()) as $page => $url)
                    <li>
                        <a href="{{ $url }}"
                            class="{{ $page == $galeris->currentPage() ? 'bg-[#16423C] text-white' : 'bg-[#6A9C89] text-white' }} px-3 py-1 rounded-md hover:bg-[#5e8b7d]">
                            {{ $page }}
                        </a>
                    </li>
                @endforeach

                @if ($galeris->hasMorePages())
                    <li>
                        <a href="{{ $galeris->nextPageUrl() }}"
                            class="px-3 py-1 rounded-md bg-[#6A9C89] text-white hover:bg-[#5e8b7d]">Next &raquo;</a>
                    </li>
                @else
                    <li class="text-gray-500 px-3 py-1 rounded-md cursor-not-allowed">Next &raquo;</li>
                @endif
            </ul>
        </div>
    </section>
</div>
