<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<div>
    {{-- HERO --}}
    <section class="bg-white">
        <div class="relative w-full bg-cover bg-center" style="background-image: url('img/landing2.jpeg');">
            <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
            <div
                class="relative max-w-5xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-12 text-white text-center flex flex-col items-center justify-center">
                <h1 class="mt-8 text-= lg:text-4xl font-semibold">Kurikulum</h1>
                <h3 class="mt-4 text-lg font-semibold">
                    <a href="/" class="text-white hover:underline">Beranda</a> &gt; <span>Kurikulum</span>
                </h3>
            </div>
        </div>
    </section>

    {{-- Keterangan Kurikulum --}}
    <section>
        @foreach ($kurikulums as $kurikulum)
            <div class="max-w-6xl mt-8 mx-auto  text-center mb-10 lg:mb-20">
                <h1 class="text-3xl font-extrabold text-[#16423C] sm:text-4xl" data-aos="fade-up">Kurikulum</h1>
                <p data-aos="fade-up"
                    class="font-medium sm:text-2xl text-[#16423C] mt-2 text-center text-base leading-7 inline-block border-b-4 border-[#6A9C89] pb-2">
                    SMK Bina Sejahtera 3
                </p>
                <p data-aos="fade-up" data-aos-delay="50"
                    class="font-medium text-[#16423C] mt-4 justify-center text-base text-justify">
                    {{ $kurikulum->deskripsi }}
                </p>
            </div>
        @endforeach
    </section>

</div>
