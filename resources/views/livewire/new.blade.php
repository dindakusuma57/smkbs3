<section class="bg-white mt-10">
    <div class="half-green-card mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:me-0 lg:py-16 lg:pe-0 lg:ps-8 xl:py-24">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3 lg:items-center lg:gap-16">
          <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
            <h2 class="text-2xl font-bold tracking-tight text-[#6A9C89] sm:text-2xl">
                TESTIMONI
              </h2>
            <h1 class="text-3xl font-bold tracking-tight text-[#16423C] sm:text-4xl">
              What Students Say About Us
            </h1>
            <div class="hidden lg:mt-8 lg:flex lg:gap-4">
              <button aria-label="Previous slide" id="keen-slider-previous-desktop" class="rounded-full border border-[#16423C] p-3 text-[#16423C] transition hover:bg-[#16423C] hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 rtl:rotate-180">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                </svg>
              </button>
              <button aria-label="Next slide" id="keen-slider-next-desktop" class="rounded-full border border-[#16423C] p-3 text-[#16423C] transition hover:bg-[#16423C] hover:text-white">
                <svg class="size-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
              </button>
            </div>
          </div>

        <div class="-mx-6 lg:col-span-2 lg:mx-0">
          <div id="keen-slider" class="keen-slider">
            <div class="keen-slider__slide">
              <blockquote
                class="relative flex h-full flex-col justify-between bg-[#0FA3B1] p-6 shadow-sm sm:p-8 lg:p-12 overflow-hidden"
              >

                <div class="relative">
                  <div class="mt-4">
                    <p class="mt-4 leading-relaxed text-white">
                      No, Rose, they are not breathing. And they have no arms or legs … Where are
                      they? You know what? If we come across somebody with no arms or legs, do we
                      bother resuscitating them? I mean, what quality of life do we have there?
                    </p>
                  </div>
                </div>

                <footer class="relative mt-4 text-sm font-medium text-white sm:mt-6">
                  &mdash; Michael Scott
                </footer>
              </blockquote>
            </div>
        </div>


      <div class="mt-8 flex justify-center gap-4 lg:hidden">
        <button
          aria-label="Previous slide"
          id="keen-slider-previous"
          class="rounded-full border border-[#16423C] p-4 text-[#16423C] transition hover:bg-[#16423C] hover:text-white"
        >
          <svg
            class="size-5 -rotate-180 transform"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
          </svg>
        </button>

        <button
          aria-label="Next slide"
          id="keen-slider-next"
          class="rounded-full border border-[#16423C] p-4 text-[#16423C] transition hover:bg-[#16423C] hover:text-white"
        >
          <svg
            class="size-5"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
          </svg>
        </button>
      </div>
    </div>
  </section>


<script type="module">
    import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

    const keenSlider = new KeenSlider(
      '#keen-slider',
      {
        loop: true,
        slides: {
          origin: 'center',
          perView: 1.25,
          spacing: 16,
        },
        breakpoints: {
          '(min-width: 1024px)': {
            slides: {
              origin: 'auto',
              perView: 1.5,
              spacing: 32,
            },
          },
        },
      },
      []
    )

    const keenSliderPrevious = document.getElementById('keen-slider-previous')
    const keenSliderNext = document.getElementById('keen-slider-next')

    const keenSliderPreviousDesktop = document.getElementById('keen-slider-previous-desktop')
    const keenSliderNextDesktop = document.getElementById('keen-slider-next-desktop')

    keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
    keenSliderNext.addEventListener('click', () => keenSlider.next())

    keenSliderPreviousDesktop.addEventListener('click', () => keenSlider.prev())
    keenSliderNextDesktop.addEventListener('click', () => keenSlider.next())
  </script>



{{-- service --}}
<section class="bg-gray-100 py-8 px-4" data-aos="fade-up" data-aos-delay="100">
    <div class="container mx-auto text-center px-4">
        <h1 class="text-4xl font-bold text-[#002500] mb-8">Kenapa SMK Bina Sejahtera 3?</h1>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="100">
                <div
                    class="bg-white p-8 shadow-md rounded-md flex flex-col h-full hover:shadow-lg hover:scale-105 transition-transform duration-200">
                    <i class="fas fa-lock text-4xl text-[#6A9C89] mb-4"></i>
                    <h3 class="text-xl font-bold text-[#16423C] mb-2">Mendidik Dengan Hati</h3>
                    <p class="text-gray-600">Menekankan para prinsip panggilan jiwa sebagai dasar sebuah profesi
                        guru yang disanjung tinggi.
                        Mendidik dengan hati akan menyentuh aspek psikologis
                        dari anak didik yang membuat proses pembelajaran dikelas penuh akan rasa kesadaran.
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="200">
                <div
                    class="bg-white p-8 shadow-md rounded-md flex flex-col h-full hover:shadow-lg hover:scale-105 transition-transform duration-200">
                    <i class="fas fa-globe-americas text-4xl text-[#6A9C89] mb-4"></i>
                    <h3 class="text-xl font-bold text-[#16423C] mb-2">Guru Berkompeten</h3>
                    <p class="text-gray-600">Guru merupakan faktor penting dalam proses belajar-mengajar.
                        Itulah kenapa kami mendatangkan guru-guru
                        berkompeten dibidangnya.
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8" data-aos="fade-up" data-aos-delay="300">
                <div
                    class="bg-white p-8 shadow-md rounded-md flex flex-col h-full hover:shadow-lg hover:scale-105 transition-transform duration-200">
                    <i class="fas fa-users text-4xl text-[#6A9C89] mb-4"></i>
                    <h3 class="text-xl font-bold text-[#16423C] mb-2">Proses Belajar Interaktif</h3>
                    <p class="text-gray-600">Kami membuat proses belajar mengajar menjadi lebih interaktif.
                        dengan demikian siswa lebih nyaman
                        ketika belajar.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
