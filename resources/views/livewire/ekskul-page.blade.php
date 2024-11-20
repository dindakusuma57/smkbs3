<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div>
    {{-- header section --}}
    <section class="bg-white">
        <div class="relative w-full bg-cover bg-center" style="background-image: url('img/landing2.jpeg');">
            <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
            <div
                class="relative max-w-5xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-12 text-white text-center flex flex-col items-center justify-center">
                <h1 class="mt-8 text-4xl lg:text-4xl font-semibold">Ekstrakulikuler</h1>
                <h3 class="mt-4 text-lg font-semibold">
                    <a href="/" class="text-white hover:underline">Beranda</a> &gt; <span>Ekstrakulikuler</span>
                </h3>
            </div>
        </div>
    </section>

    {{-- Keterangan Ekskul --}}
    <section>
        @foreach ($deskeskuls as $deskeskul)
            <div class="max-w-6xl mt-8 mx-auto text-center mb-6 lg:mb-20">
                <h1 class="text-3xl font-extrabold text-[#16423C] sm:text-4xl" data-aos="fade-up">Ekstrakulikuler</h1>
                <p data-aos="fade-up"
                    class="font-medium sm:text-2xl text-[#16423C] mt-2 text-center text-base leading-7 inline-block border-b-4 border-[#6A9C89] pb-2">
                    SMK Bina Sejahtera 3
                </p>
                <p data-aos="fade-up" data-aos-delay="50"
                    class="font-medium text-[#16423C] mt-4 justify-center text-base">
                    {{ $deskeskul->deskripsi }}
                </p>
            </div>
    </section>

    {{-- alasan ekskul section --}}
    <section class="relative mt-4 ">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 mb-6">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mx-auto max-md:px-2 ">
                <div class="img">
                    <div class="img-box h-full max-lg:mx-auto ">
                        <img src="{{ $deskeskul ? asset('storage/' . $deskeskul->image) : '' }}"
                            alt="Yellow Tropical Printed Shirt image" data-aos="zoom-out" data-aos-delay="50"
                            class="h-full w-full transition-transform transform hover:scale-105 hover:shadow-lg object-cover rounded-lg shadow-md">
                    </div>
                </div>
                <div
                    class="data w-full lg:pr-8 pr-0 xl:justify-start justify-center flex items-center max-lg:pb-10 xl:my-2 lg:my-5 my-0">
                    <div class="data w-full max-w-xl">
                        <h2 data-aos="fade-up"
                            class="font-manrope font-bold text-4xl leading-10 text-[#6A9C89] mb-2 capitalize">
                            Alasan <span class="text-[#16423C]">Harus Ikut</span> <br> <span
                                class="text-[#16423C]">Ekstrakulikuler di</span> <span class="text-[#6A9C89]">SMK BS
                                3</span> </h2>

                        <ul data-aos="fade-up" data-aos-delay="50" class="grid gap-y-4 py-4 mb-8">
                            @foreach (explode("\n", $deskeskul->alasan) as $index => $alasan)
                                <li class="flex items-center gap-3">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="26" height="26" rx="13"
                                            fill="{{ $index % 2 == 0 ? '#16423C' : '#6A9C89' }}" />
                                        <path
                                            d="M7.66669 12.629L10.4289 15.3913C10.8734 15.8357 11.0956 16.0579 11.3718 16.0579C11.6479 16.0579 11.8701 15.8357 12.3146 15.3913L18.334 9.37183"
                                            stroke="white" stroke-width="1.6" stroke-linecap="round" />
                                    </svg>
                                    <span class="font-normal text-2xl text-gray-900">{{ $alasan }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    {{-- Card Ekskul --}}
    <section class="bg-[#C4DAD2]">
        {{-- ekskul list --}}
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Title -->
            <div class="max-w-2xl mx-auto text-center ">
                <h1 class="text-3xl font-extrabold text-[#16423C] sm:text-4xl" data-aos="fade-up">Ekstrakulikuler</h1>
                <p data-aos="fade-up"
                    class="font-medium sm:text-2xl text-[#16423C] mt-2 text-center text-base leading-7 inline-block border-b-4 border-[#6A9C89] pb-2">
                    SMK Bina Sejahtera 3
                </p>
            </div>
            <!-- End Title -->

            <!-- Grid -->
            <div class="mt-4 grid grid-cols-3 gap-8 md:gap-12">
                @foreach ($ekstrakulikulers as $ekstrakulikuler)
                    <div data-aos="fade-up" data-aos-delay="50"
                        class="relative mx-auto mt-2 sm:mt-4 flex w-full max-w-xs flex-col overflow-hidden rounded-lg border border-gray-100 bg-white shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                        <div class="relative mx-3 mt-3 flex h-60 overflow-hidden rounded-xl group">
                            <img class="object-cover w-full h-full"
                                src="{{ $ekstrakulikuler ? asset('storage/' . $ekstrakulikuler->image) : '' }}"
                                alt="product image" />
                            <div
                                class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300 group-hover:opacity-80">
                            </div>

                            <a href="{{ $ekstrakulikuler->deskripsi }}"
                                class="absolute inset-0 flex items-center justify-center opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <button
                                    class="rounded-md bg-[#4BB919] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#16423C] focus:outline-none focus:ring-4 focus:ring-blue-300">
                                    Pembina
                                </button>
                            </a>
                        </div>

                        <div class="mt-4 px-5 pb-5">
                            <h5 class="text-xl font-semibold text-[#16423C]">{{ $ekstrakulikuler->judul }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- End Grid -->
        </div>
    </section>

</div>
