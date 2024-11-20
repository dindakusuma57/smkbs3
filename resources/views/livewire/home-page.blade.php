<link rel="stylesheet" href="css/filament/style.css">
<script type="module" src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
<link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div>
    {{-- HERO START --}}
    <section class="bg-cover bg-center sm:bg-cover md:bg-cover lg:bg-center xl:bg-cover bg-gray-50"
        style="background-image: url('img/newhero.png'); background-size: cover; background-position: center;">
        <div
            class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
            <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left"
                data-aos="fade-in">
                <h1 class="text-5xl font-bold leading-none sm:text-4xl md:text-5xl text-white">Selamat Datang</h1>
                <h1 class="mt-4 text-4xl font-bold leading-none sm:text-3xl md:text-4xl text-white">di SMK Bina
                    Sejahtera 3</h1>
                <p class="mt-8 mb-8 text-lg sm:mb-12 text-white">
                    Sekolah Impian bersama, kami wujudkan pendidikan yang komprehensif untuk menciptakan generasi
                    berprestasi, berakhlakul mulia dan siap menyongsong masa depan
                </p>
                <div class="flex flex-col sm:items-center sm:justify-center sm:flex-row sm:space-x-4 lg:justify-start">
                    <a href="/ppdb"
                        class="px-8 py-3 text-lg font-semibold rounded-full bg-[#C4DAD2] dark:text-black hover:bg-[#16423C] hover:text-white shadow-md">Info
                        PPDB</a>
                </div>
            </div>
        </div>
    </section>
    {{-- HERO END --}}

    {{-- Alasan START --}}
    <section id="reason" class="bg-gray-50 py-8 px-4" data-aos="fade-up">
        <div class="container mx-auto text-center px-4">
            <h1 class="text-4xl font-bold text-[#16423C] mb-10">Kenapa SMK Bina Sejahtera 3?</h1>
            <div class="flex flex-wrap -mx-4 mt-4">
                @foreach ($choices as $choice)
                    <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="100">
                        <div
                            class="bg-white p-8 shadow-md rounded-lg flex flex-col h-full hover:shadow-lg hover:scale-105 transition-transform duration-200">
                            <div class="flex justify-center mb-2">
                                <img src="{{ $choice ? asset('storage/' . $choice->image) : '' }}" alt="Choice Image"
                                    class="w-40 h-40 object-cover mb-2">
                            </div>
                            <h3 class="text-xl font-bold text-[#16423C] mb-2">{{ $choice->judul }}</h3>
                            <p class="text-[#16423C]">{{ $choice->deskripsi }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Alasan END --}}

    {{-- ABOUT US SECTION --}}
    <section id="about" class="relative overflow-hidden bg-gray-50">
        <div class="absolute top-0 right-0 bg-[#C4DAD2] w-full md:w-3/4 h-full"></div>
        <div class="relative container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            @foreach ($tentangs as $tentang)
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                    <div class="mt-8 md:mt-0">
                        <img src="{{ $tentang ? asset('storage/' . $tentang->image) : '' }}" alt="About Us Image"
                            class="object-cover w-full h-64 sm:h-80 md:h-96 rounded-lg shadow-md transition-transform transform hover:scale-105 hover:shadow-lg"
                            data-aos="zoom-out">
                    </div>
                    <div class="max-w-2xl">
                        <h2 data-aos="fade-up" class="text-3xl font-extrabold text-[#16423C] sm:text-4xl">
                            Tentang <br> SMK Bina Sejahtera 3
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="100"
                            class="mt-4 text-[#16423C] text-lg text-justify leading-relaxed">
                            {{ $tentang->deskripsi }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- STATISTIK START --}}
    <section class="bg-gray-50">
        <div class="relative w-full bg-cover bg-center" style="background-image: url('img/landing2.jpeg');">
            <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
            <div class="relative max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-20 text-center">
                <dl class="mt-10 text-center sm:max-w-3xl sm:mx-auto sm:grid sm:grid-cols-3 sm:gap-8" data-aos="fade-up"
                    data-aos-delay="100">
                    @foreach ($statistiks as $statistik)
                        <div class="flex flex-col">
                            <dt class="order-2 mt-2 text-2xl leading-6 font-medium text-white">{{ $statistik->judul }}
                            </dt>
                            <dd class="order-1 text-7xl font-extrabold text-white purecounter"
                                data-purecounter-start="0" data-purecounter-end="{{ $statistik->deskripsi }}"
                                data-purecounter-duration="1"></dd>
                        </div>
                    @endforeach
                </dl>
            </div>
        </div>
    </section>
    {{-- STATISTIK END --}}

    {{-- TESTI START --}}
    <section id="testi" class="bg-gray-100 mt-10">
        <div
            class="half-green-card mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:items-center lg:gap-16">
                <div class="max-w-xl text-left sm:text-left">
                    <h2 data-aos="fade-up" class="text-2xl font-bold tracking-tight text-[#6A9C89] sm:text-2xl">
                        TESTIMONI
                    </h2>
                    <h1 data-aos="fade-up" class="text-3xl font-bold tracking-tight text-[#16423C] sm:text-4xl">
                        What Students Say About Us
                    </h1>
                    <div class="hidden lg:mt-8 lg:flex lg:gap-4">
                        <button aria-label="Previous slide" id="keen-slider-previous-desktop"
                            class="rounded-full border border-[#16423C] p-3 text-[#16423C] transition hover:bg-[#16423C] hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5 rtl:rotate-180">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                        <button aria-label="Next slide" id="keen-slider-next-desktop"
                            class="rounded-full border border-[#16423C] p-3 text-[#16423C] transition hover:bg-[#16423C] hover:text-white">
                            <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="-mx-6 lg:col-span-2 lg:mx-0">
                    {{-- Card --}}
                    <div id="keen-slider" class="keen-slider" data-aos="fade-left" data-aos-delay="100">
                        @foreach ($testimonis as $testimoni)
                            @php
                                $backgroundClass = ['bg-[#0FA3B1]', 'bg-[#FF5733]', 'bg-[#4CAF50]'][$loop->index % 3];
                            @endphp

                            <div class="keen-slider__slide">
                                <blockquote
                                    class="rounded-xl flex h-full flex-col justify-between {{ $backgroundClass }} p-6 shadow-sm sm:p-8 lg:p-12">
                                    <div>
                                        <div class="mt-4">
                                            <p class="mt-4 leading-relaxed text-white">
                                                {{ $testimoni->deskripsi }}
                                            </p>
                                        </div>
                                    </div>

                                    <footer class="mt-4 text-sm font-medium text-white sm:mt-6 flex items-center">
                                        <img src="{{ $testimoni ? asset('storage/' . $testimoni->image) : '' }}"
                                            alt="Michael Scott" class="w-10 h-10 rounded-full mr-2">
                                        {{ $testimoni->nama }}
                                    </footer>
                                </blockquote>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-center gap-4 lg:hidden">
                <button aria-label="Previous slide" id="keen-slider-previous"
                    class="rounded-full border border-[#16423C] p-4 text-[#16423C] transition hover:bg-[#16423C] hover:text-white">
                    <svg class="size-5 -rotate-180 transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>

                <button aria-label="Next slide" id="keen-slider-next"
                    class="rounded-full border border-[#16423C] p-4 text-[#16423C] transition hover:bg-[#16423C] hover:text-white">
                    <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
    {{-- TESTI END --}}

    {{-- Latest News START --}}
    <section class="bg-gray-100 py-8 px-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="font-manrope text-4xl font-bold text-[#16423C] text-center mb-4">Berita
                Terbaru</h1>
            <div
                class="flex justify-center  gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8">
                {{-- Card --}}
                @foreach ($recentBeritas as $recent)
                    @php
                        $images = is_array($recent->image) ? $recent->image : explode(',', $recent->image);
                    @endphp
                    <a href="{{ route('berita.show', $recent->slug) }}">
                        <div
                            class="group w-full max-lg:max-w-xl lg:w-1/3 border border-gray-300 rounded-2xl shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                            <div class="flex items-center">
                                <img src="{{ asset('storage/' . trim($images[0])) }}" alt="blogs tailwind section"
                                    class="rounded-t-2xl w-full h-48 object-cover">
                            </div>
                            <div class="p-4 lg:p-6 transition-all duration-300 rounded-b-2xl group-hover:bg-gray-50">
                                <span
                                    class="text-[#16423C] font-medium mb-3 block">{{ \Carbon\Carbon::parse($recent->created_at)->format('d-m-Y') }}</span>
                                <h4 class="text-xl text-[#16423C] font-medium leading-8 mb-5">{{ $recent->judul }}
                                </h4>
                                <p class="text-sm text-[#116453] mt-2 mb-4">{{ Str::limit($recent->deskripsi, 80) }}
                                </p>
                                <a href="{{ route('berita.show', $recent->slug) }}"
                                    class="cursor-pointer text-lg text-[#16423C] font-semibold flex justify-end">Baca
                                    Selengkapnya..</a>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <a href="/berita"
                class="mt-4 cursor-pointer bg-[#6A9C89] text-white hover:text-[#116453] hover:bg-[#116453] shadow-sm rounded-full py-3.5 px-7 w-52 flex justify-center items-center font-semibold mx-auto transition-all duration-300">Lihat
                Semua</a>
        </div>
    </section>
    {{-- End Latest News --}}

    {{-- TEAM SECTION START --}}
    <section class="py-4 px-4 bg-gray-50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center flex-col lg:flex-row md:mt-20">
                <div class="w-full lg:w-1/2">
                    <h2 class="font-manrope text-5xl text-[#16423C] font-bold leading-[4rem] text-center lg:text-left">
                        Pengajar</h2>
                    <h2
                        class="font-manrope text-5xl text-[#16423C] font-bold leading-[4rem] mb-7 text-center lg:text-left">
                        SMK Bina Sejahtera 3</h2>
                    <a href="/guru"><button
                            class="cursor-pointer py-3 px-8 w-60 bg-[#6A9C89] text-white text-base font-semibold transition-all duration-500 block text-center rounded-full hover:bg-[#16423C] mx-auto lg:mx-0">
                            Lihat Semua Pengajar
                        </button>
                    </a>
                </div>
                <div class="w-full lg:w-1/2 lg:mt-0 md:mt-40 py-8 max-lg:max-w-2xl">
                    <div class="grid grid-cols-1 min-[450px]:grid-cols-2 md:grid-cols-3 gap-8">
                        @foreach ($pengajars as $pengajar)
                            <div
                                class="relative transition-transform transform hover:scale-105 hover:shadow-lg shadow-md w-44 h-56 rounded-2xl mx-auto min-[450px]:ml-0 md:mx-auto">
                                <img src="{{ asset('storage/' . $pengajar->image) }}" alt="{{ $pengajar->nama }}"
                                    class="absolute inset-0 w-full h-full rounded-2xl object-cover">

                                <div
                                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300 rounded-2xl">
                                    <p class="text-sm text-center font-medium text-white">{{ $pengajar->nama }} <br>
                                        {{ $pengajar->keterangan }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- TEAM END --}}

    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
