<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<div>
    {{-- HERO --}}
    <section class="bg-white">
        <div class="relative w-full bg-cover bg-center" style="background-image: url('img/landing2.jpeg');">
            <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
            <div
                class="relative max-w-5xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-12 text-white text-center flex flex-col items-center justify-center">
                <h1 class="mt-8 text-4xl lg:text-4xl font-semibold">Pengajar</h1>
                <h3 class="mt-4 text-lg font-semibold">
                    <a class="text-white hover:underline">Akademik</a> &gt; <span>Pengajar</span>
                </h3>
            </div>
        </div>
    </section>

    {{-- Kepsek --}}
    <section class="bg-gray-100">
        <div class="container mx-auto py-8 px-4 sm:px-6 lg:px-8">
            @foreach ($kepseks as $kepsek)
                <div class="grid grid-cols-1 md:grid-cols-3 items-center gap-8">
                    <div class="md:col-span-2 ">
                        <h2 class="mb-2 border-b-4 border-[#6A9C89] inline-block text-3xl font-extrabold text-[#16423C] sm:text-4xl"
                            data-aos="fade-up">Sambutan</h2>
                        <p class="sm:text-2xl text-[#16423C] font-medium" data-aos="fade-up">Kepala Sekolah</p>
                        <p class="sm:text-2xl text-[#16423C] font-medium" data-aos="fade-up">SMK Bina Sejahtera 3</p>
                        <p class="mt-4 text-[#16423C] text-lg" data-aos="fade-up" data-aos-delay="50">
                            {{ $kepsek->deskripsi }}
                        </p>
                    </div>

                    <div class="mt-12 md:mt-0 relative bg-[#C4DAD2] rounded-lg shadow-lg w-auto transition-transform transform hover:translate-y-2 hover:-translate-x-2 hover:scale-105 hover:shadow-2xl"
                        data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ $kepsek ? asset('storage/' . $kepsek->image) : '' }}" alt="Kepsek Image"
                            class="object-cover rounded-lg w-full h-auto">
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Team -->
    <section>
        <div class="max-w-full px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14" data-aos="fade-up">
                <h1 class="text-3xl font-extrabold text-[#16423C] sm:text-4xl">Guru - guru</h1>
                <p class="font-medium sm:text-2xl text-[#16423C] mt-2 text-center text-base leading-7 inline-block border-b-4 border-[#6A9C89] pb-2">
                    SMK Bina Sejahtera 3
                </p>
            </div>

            <!-- Grid untuk Team -->
            <div id="guru-container" class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4 md:gap-6" data-aos="zoom-in">
                @foreach ($pengajars as $pengajar)
                    <div class="text-center mt-4">
                        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto shadow-md transition-transform transform hover:scale-105 hover:shadow-lg w-full"
                            src="{{ $pengajar ? asset('storage/' . $pengajar->image) : asset('storage/default-avatar.jpg') }}"
                            alt="Avatar">
                        <div class="mt-2 sm:mt-4">
                            <h3 class="text-sm font-medium text-[#16423C] sm:text-base lg:text-lg">
                                {{ $pengajar->nama }}
                            </h3>
                            <p class="text-xs text-[#16423C] sm:text-sm lg:text-base">
                                {{ $pengajar->keterangan }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-8 flex justify-center">
                <ul class="inline-flex items-center space-x-1">
                    @if ($pengajars->onFirstPage())
                        <li class="text-gray-500 px-3 py-1 rounded-md cursor-not-allowed">Previous</li>
                    @else
                        <li>
                            <a href="{{ $pengajars->previousPageUrl() }}"
                                class="px-3 py-1 rounded-md bg-[#6A9C89] text-white hover:bg-[#5e8b7d]">
                                Previous</a>
                        </li>
                    @endif

                    @foreach ($pengajars->getUrlRange(1, $pengajars->lastPage()) as $page => $url)
                        <li>
                            <a href="{{ $url }}"
                                class="{{ $page == $pengajars->currentPage() ? 'bg-[#16423C] text-white' : 'bg-[#6A9C89] text-white' }} px-3 py-1 rounded-md hover:bg-[#5e8b7d]">
                                {{ $page }}
                            </a>
                        </li>
                    @endforeach

                    @if ($pengajars->hasMorePages())
                        <li>
                            <a href="{{ $pengajars->nextPageUrl() }}"
                                class="px-3 py-1 rounded-md bg-[#6A9C89] text-white hover:bg-[#5e8b7d]">Next</a>
                        </li>
                    @else
                        <li class="text-gray-500 px-3 py-1 rounded-md cursor-not-allowed">Next</li>
                    @endif
                </ul>
            </div>
        </div>
    </section>

</div>
