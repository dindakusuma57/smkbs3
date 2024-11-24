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
                <h1 class="mt-8 text-4xl lg:text-4xl font-semibold">Sejarah</h1>
                <h3 class="mt-4 text-lg font-semibold">
                    <a class="text-white hover:underline">Profil</a> &gt; <span>Sejarah</span>
                </h3>
            </div>
        </div>
    </section>

    <section class="bg-gray-100">
        <div class="container mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                @foreach ($sejarahs as $sejarah)
                    <div data-aos="fade-up" class="max-w-2xl">
                        <h2 class="text-3xl font-extrabold text-[#16423C] sm:text-4xl">Sejarah</h2>
                        <p class="mt-2 sm:text-2xl text-[#16423C] font-medium">SMK Bina Sejahtera 3
                        </p>
                        <p class="mt-4 text-[#16423C] text-lg text-justify">{{ $sejarah->deskripsi }}
                        </p>
                    </div>
                    <div class="mt-12 md:mt-0" data-aos="zoom-out" data-aos-delay="5">
                        <img src="{{ $sejarah ? asset('storage/' . $sejarah->image) : '' }}" alt="About Us Image"
                            class="object-cover rounded-lg shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
