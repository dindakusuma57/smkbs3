<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div>
    <section class="bg-white">
        <div class="relative w-full bg-cover bg-center" style="background-image: url('img/landing2.jpeg');">
            <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
            <div class="relative max-w-5xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-12 text-white text-center flex flex-col items-center justify-center">
                <h1 class="mt-8 text-4xl lg:text-4xl font-semibold">Visi Misi</h1>
                <h3 class="mt-4 text-lg font-semibold">
                    <a href="#" class="text-white hover:underline">Profile</a> &gt; <span>Visi Misi</span>
                </h3>
            </div>
        </div>
    </section>

    {{-- Visi --}}
    <section class="bg-gray-100">
        <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <div class="max-w-lg">
                    @foreach ($visis as $visi )
                    <h2 class="text-3xl font-extrabold text-[#16423C] sm:text-6xl" data-aos="fade-up">Visi</h2>
                    <p class="sm:text-4xl text-[#16423C] font-medium mt-4" data-aos="fade-up">SMK Bina Sejahtera 3</p>
                    <p class="text-justify mt-4 mx-2 text-[#16423C] text-lg border-l-4 border-[#6A9C89] pl-4" data-aos="fade-up" data-aos-delay="200">
                      {{ $visi -> deskripsi }}
                    </p>
                  </div>

                  <div class="mt-12 md:mt-0" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ $visi ? asset('storage/' . $visi->image) : '' }}" alt="About Us Image"
                         class="object-cover rounded-lg shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Misi --}}
    <section>
    <div class="bg-[#C4DAD2] px-2 py-10">
        <div id="features" class="mx-auto max-w-6xl text-center" data-aos="fade-up" data-aos-delay="5">
            <h1 class="text-3xl font-extrabold text-[#16423C] sm:text-4xl" data-aos="fade-up">Misi</h1>
            <p class="font-medium sm:text-2xl text-[#16423C] mt-2 text-center text-base leading-7 inline-block border-b-4 border-[#6A9C89] pb-2">
                SMK Bina Sejahtera 3
            </p>

          <ul class="mt-16 grid grid-cols-1 gap-6 text-center text-slate-700 md:grid-cols-3">
            @foreach ($misis as $misi )
            <li data-aos="flip-left" data-aos-delay="100" class="rounded-xl bg-white hover:bg-[rgba(205,213,210,0.7)] px-6 py-8 shadow-sm hover:shadow-lg hover:scale-105 transition-transform duration-200">
                <div class="flex justify-center mb-1">
                    <img src="{{ $misi ? asset('storage/' . $misi->image) : '' }}" alt="Lock Icon" class="w-40 h-40 object-cover mb-2">
                </div>
              <h3 class=" font-display text-2xl font-extrabold text-[#16423C]">{{ $misi->judul }}</h3>
              <p class="mt-1.5 text-sm leading-6 text-[#16423C]">
                {{ $misi->deskripsi }}              </p>
            </li>
            @endforeach
          </ul>
        </div>
        <div>
        </section>

        {{-- Tujuan --}}
        <section>
        <div data-aos="fade-up" class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0 mt-5">
            <h1 class="text-3xl font-extrabold text-[#16423C] sm:text-4xl">Tujuan</h1>
            <p class="mb-5 font-medium sm:text-2xl text-[#16423C] mt-2 text-base leading-7 inline border-b-4 border-[#6A9C89] pb-2 max-w-max">
                SMK Bina Sejahtera 3
            </p>

            @foreach ($tujuans as $tujuan )
            <div class="w-full">
                <div class="flex flex-col mb-10 w-3/4 ">
                    <div class="w-full mb-5 sm:mb-0  ">
                        <div data-aos="fade-up-left" class="relative h-full ml-0 mr-0 sm:mr-10 hover:shadow-lg hover:scale-105 transition-transform duration-200">
                            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-[#C4DAD2] rounded-lg"></span>
                            <div class="relative h-full p-5 bg-[#C4DAD2]  rounded-lg">
                                <p class="text-justify mb-2 text-[#16423C] border-l-4 border-[#6A9C89] pl-4">{{$tujuan -> deskripsi}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </section>
</div>
