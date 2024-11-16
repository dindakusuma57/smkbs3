<link rel="stylesheet" href="css/filament/style.css">
<script type="module" src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
<link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div>
    {{-- HERO START --}}
    <section class="bg-gradient-to-b from-[#116453] to-[#032830]">
        <div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
            <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left"
                data-aos="fade-in">
                <h1 class="text-5xl font-bold leading-none sm:text-5xl text-white">Selamat Datang</h1>
                <h1 class="mt-4 text-5xl font-bold leading-none sm:text-4xl text-white">di SMK Bina Sejahtera 3</h1>
                <p class="mt-8 mb-8 text-lg sm:mb-12 text-white">
                    Sekolah Impian bersama, kami wujudkan pendidikan yang komprehensif untuk menciptakan generasi
                    berprestasi, berakhlakul mulia dan siap menyongsong masa depan
                </p>
                <div
                    class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
                    <a href="#"
                        class="px-8 py-3 text-lg font-semibold rounded-lg bg-[#C4DAD2] dark:text-black hover:bg-[#16423C] hover:text-white shadow-md">Info
                        PPDB</a>
                </div>
            </div>
            <div class="flex items-center justify-center h-72 sm:h-90 lg:h-96 xl:h-112 2xl:h-128">
                <img src="img/hero1.png" class="object-cover h-full w-full" alt="Hero Image" loading="lazy">
            </div>
        </div>
    </section>
    {{-- HERO END --}}

    {{-- SERVICE START --}}
    <section class="bg-gray-100 py-8 px-4" data-aos="fade-up" data-aos-delay="100">
        <div class="container mx-auto text-center px-4">
            <h1 class="text-4xl font-bold text-[#002500] mb-10">Kenapa SMK Bina Sejahtera 3?</h1>
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
    {{-- SERVICE END --}}

    {{-- ABOUT US SECTION --}}
    <section class="relative overflow-hidden">
        <div class="absolute top-0 right-0 bg-[#C4DAD2] w-3/4 h-full"></div>
        <div class="relative container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            @foreach ($tentangs as $tentang )
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <div class="mt-12 md:mt-0">
                    <img src="{{ $tentang ? asset('storage/' . $tentang->image) : '' }}" alt="About Us Image" class="object-cover rounded-lg shadow-md">
                </div>
                <div class="max-w-2xl">
                    <h2 class="text-3xl font-extrabold text-[#16423C] sm:text-4xl">Tentang <br> SMK Bina Sejahtera 3</h2>
                    <p class="mt-4 text-gray-600 text-lg text-justify">{{ $tentang -> deskripsi }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    {{-- STATISTIK START --}}
    <section class="bg-white">
        <div class="relative w-full bg-cover bg-center" style="background-image: url('img/landing2.jpeg');">
            <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
            <div class="relative max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-20">
                <dl class="mt-10 text-center sm:max-w-3xl sm:mx-auto sm:grid sm:grid-cols-4 sm:gap-8" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="flex flex-col">
                        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-white">Components</dt>
                        <dd class="order-1 text-5xl font-extrabold text-white purecounter" data-purecounter-start="0"
                            data-purecounter-end="1600" data-purecounter-duration="1"></dd>
                    </div>
                    <div class="flex flex-col mt-10 sm:mt-0">
                        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-white">Free</dt>
                        <dd class="order-1 text-5xl font-extrabold text-white purecounter" data-purecounter-start="0"
                            data-purecounter-end="1600" data-purecounter-duration="1"></dd>
                    </div>
                    <div class="flex flex-col mt-10 sm:mt-0">
                        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-white">Dark Mode</dt>
                        <dd class="order-1 text-5xl font-extrabold text-white purecounter" data-purecounter-start="0"
                            data-purecounter-end="1200" data-purecounter-duration="1"></dd>
                    </div>
                    <div class="flex flex-col mt-10 sm:mt-0">
                        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-white">Categories</dt>
                        <dd class="order-1 text-5xl font-extrabold text-white purecounter" data-purecounter-start="0"
                            data-purecounter-end="90" data-purecounter-duration="1"></dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>
    {{-- STATISTIK END --}}

    {{-- TESTI START --}}
    <section class="bg-white mt-10">
        <div class="half-green-card mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:items-center lg:gap-16">
                <div class="max-w-xl text-left sm:text-left" data-aos="fade-up">
                    <h2 class="text-2xl font-bold tracking-tight text-[#6A9C89] sm:text-2xl">
                        TESTIMONI
                    </h2>
                    <h1 class="text-3xl font-bold tracking-tight text-[#16423C] sm:text-4xl">
                        What Students Say About Us
                    </h1>
                    <div class="hidden lg:mt-8 lg:flex lg:gap-4">
                        <button aria-label="Previous slide" id="keen-slider-previous-desktop"
                            class="rounded-full border border-[#16423C] p-3 text-[#16423C] transition hover:bg-[#16423C] hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-5 rtl:rotate-180">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                        <button aria-label="Next slide" id="keen-slider-next-desktop"
                            class="rounded-full border border-[#16423C] p-3 text-[#16423C] transition hover:bg-[#16423C] hover:text-white">
                            <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                    class="rounded-full border border-rose-600 p-4 text-rose-600 transition hover:bg-rose-600 hover:text-white">
                    <svg class="size-5 -rotate-180 transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </svg>
                </button>

                <button aria-label="Next slide" id="keen-slider-next"
                    class="rounded-full border border-rose-600 p-4 text-rose-600 transition hover:bg-rose-600 hover:text-white">
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
    <section class="py-8 px-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="mt-4 font-manrope text-4xl font-bold text-[#16423C] text-center mb-8" data-aos="fade-up">Berita
                Terbaru</h1>

            <div class="flex justify-center  gap-y-8 lg:gap-y-0 flex-wrap md:flex-wrap lg:flex-nowrap lg:flex-row lg:justify-between lg:gap-x-8"
                >
                {{-- Card --}}
                <div
                    class="group w-full max-lg:max-w-xl lg:w-1/3 border border-gray-300 rounded-2xl shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                    <div class="flex items-center">
                        <img src="https://pagedone.io/asset/uploads/1696244317.png" alt="blogs tailwind section"
                            class="rounded-t-2xl w-full object-cover">
                    </div>
                    <div class="p-4 lg:p-6 transition-all duration-300 rounded-b-2xl group-hover:bg-gray-50">
                        <span class="text-[#16423C] font-medium mb-3 block">Jan 01, 2023</span>
                        <h4 class="text-xl text-[#16423C] font-medium leading-8 mb-5">Clever ways to invest in product
                            to organize your portfolio</h4>
                        <p class="text-[#16423C] leading-6 mb-10">Discover smart investment strategies to streamline
                            and
                            organize your portfolio..</p>
                        <a href="javascript:;" class="cursor-pointer text-lg text-[#16423C] font-semibold">Read
                            more..</a>
                    </div>
                </div>
            </div>
            <a href="/berita"
                class="mt-8 cursor-pointer border border-gray-300 shadow-sm rounded-full py-3.5 px-7 w-52 flex justify-center items-center text-[#16423C] font-semibold mx-auto transition-all duration-300 hover:bg-gray-100">View
                All</a>
        </div>
    </section>
    {{-- End Latest News --}}

    {{-- TEAM SECTION START --}}
    <section class="py-4 px-4 bg-gray-50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center flex-col lg:flex-row md:mt-20">
                <div class="w-full lg:w-1/2">
                    <h2 class="font-manrope text-5xl text-[#16423C] font-bold leading-[4rem] text-center lg:text-left">
                        Tenaga Pendidik</h2>
                    <h2
                        class="font-manrope text-5xl text-[#16423C] font-bold leading-[4rem] mb-7 text-center lg:text-left">
                        SMK Bina Sejahtera 3</h2>
                    <button
                        class="cursor-pointer py-3 px-8 w-60 bg-[#6A9C89] text-white text-base font-semibold transition-all duration-500 block text-center rounded-full hover:bg-[#16423C] mx-auto lg:mx-0">
                        Lihat Semua Guru
                    </button>
                </div>
                <div class="w-full lg:w-1/2 lg:mt-0 md:mt-40 mt-16 max-lg:max-w-2xl">
                    <div class="grid grid-cols-1 min-[450px]:grid-cols-2 md:grid-cols-3 gap-8">
                        <img src="https://pagedone.io/asset/uploads/1696238644.png" alt="Team tailwind section"
                            class="transition-transform transform hover:scale-105 hover:shadow-lg shadow-md w-44 h-56 rounded-2xl object-cover md:mt-20 mx-auto min-[450px]:mr-0" />
                        <img src="https://pagedone.io/asset/uploads/1696238665.png" alt="Team tailwind section"
                            class="transition-transform transform hover:scale-105 hover:shadow-lg shadow-md w-44 h-56 rounded-2xl object-cover mx-auto min-[450px]:ml-0 md:mx-auto" />
                        <img src="https://pagedone.io/asset/uploads/1696238684.png" alt="Team tailwind section"
                            class="transition-transform transform hover:scale-105 hover:shadow-lg shadow-md w-44 h-56 rounded-2xl object-cover md:mt-20 mx-auto min-[450px]:mr-0 md:ml-0" />
                        <img src="https://pagedone.io/asset/uploads/1696238702.png" alt="Team tailwind section"
                            class="transition-transform transform hover:scale-105 hover:shadow-lg shadow-md w-44 h-56 rounded-2xl object-cover mx-auto min-[450px]:ml-0 md:mr-0 md:ml-auto" />
                        <img src="https://pagedone.io/asset/uploads/1696238720.png" alt="Team tailwind section"
                            class="transition-transform transform hover:scale-105 hover:shadow-lg shadow-md w-44 h-56 rounded-2xl object-cover md:-mt-20 mx-auto min-[450px]:mr-0 md:mx-auto" />
                        <img src="https://pagedone.io/asset/uploads/1696238737.png" alt="Team tailwind section"
                            class="transition-transform transform hover:scale-105 hover:shadow-lg shadow-md w-44 h-56 rounded-2xl object-cover mx-auto min-[450px]:ml-0 md:mr-0" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- TEAM END --}}
</div>
