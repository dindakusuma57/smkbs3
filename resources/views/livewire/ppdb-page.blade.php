<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<div>
    <section class="bg-white">
        <div class="relative w-full bg-cover bg-center" style="background-image: url('img/landing2.jpeg');">
            <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
            <div
                class="relative max-w-5xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-12 text-white text-center flex flex-col items-center justify-center">
                <h1 class="mt-8 text-= lg:text-4xl font-semibold">PPDB</h1>
                <h3 class="mt-4 text-lg font-semibold">
                    <a href="#" class="text-white hover:underline">Beranda</a> &gt; <span>PPDB</span>
                </h3>
            </div>
        </div>
    </section>

    {{-- Keterangan Kurikulum --}}
    <section>
        @foreach ($ppdbs as $ppdb)
            <div class="max-w-6xl mt-8 mx-auto  mb-10 lg:mb-8">
                <div class="text-center">
                    <h1 class=" text-3xl font-extrabold  text-[#16423C] sm:text-4xl" data-aos="fade-up">Penerimaan
                        Peserta
                        Didik Baru</h1>
                    <p data-aos="fade-up" class="font-bold sm:text-2xl text-[#16423C] mt-2  text-base leading-7 ">
                        SMK Bina Sejahtera 3
                    </p>
                    <p data-aos="fade-up"
                        class="font-medium sm:text-2xl text-[#16423C] mt-2  text-base leading-7 inline-block border-b-4 border-[#6A9C89] pb-2">
                        Tahun Ajaran 2025/2026
                    </p>
                </div>

                <p data-aos="fade-up" data-aos-delay="50"
                    class="font-medium text-[#16423C] mt-4 text-justify text-base">
                    {{ $ppdb->deskripsi }}
                </p>
            </div>
        @endforeach
    </section>

    {{-- link start --}}
    <section>
        <div class="mb-8 text-center">
            <a href="https://linktr.ee/ppdb_smkbs34"
                class="inline-flex items-center justify-center p-5 text-base font-medium bg-[#C4DAD2] text-[#16423C] hover:text-white rounded-lg hover:bg-[#16423C]">
                <span class="w-full">PPDB Online SMK Bina Sejahtera 3 Bogor</span>
                <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </section>

</div>
