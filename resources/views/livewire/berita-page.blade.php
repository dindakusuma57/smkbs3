<div>
    <section class="bg-white">
        <div class="relative w-full bg-cover bg-center" style="background-image: url('img/landing2.jpeg');">
            <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
            <div class="relative max-w-5xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-12 text-white text-center flex flex-col items-center justify-center">
                <h1 class="mt-8 text-4xl lg:text-4xl font-semibold">Berita</h1>
                <h3 class="mt-4 text-lg font-semibold">
                    <a href="#" class="text-white hover:underline">Beranda</a> &gt; <span>Berita</span>
                </h3>
            </div>
        </div>
    </section>

    <section>
    <div class="mx-auto mt-16 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-extrabold text-[#16423C] sm:text-4xl" data-aos="fade-up">Berita Terbaru</h1>
                <p class="mb-5 font-medium sm:text-2xl text-[#16423C] mt-2 text-base leading-7 inline border-b-4 border-[#6A9C89] pb-2 max-w-max">
                    SMK Bina Sejahtera 3
                </p>

        <div class="mt-8 sm:flex items-center shadow-md bg-white rounded-lg p-6 transition-transform transform hover:scale-105 hover:shadow-lg">
            <div>
                <img class="bg-cover rounded-lg" src="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" />
            </div>
            <div class="md:px-10 sm:px-5">
            <h1 class="text-gray-800 font-bold text-2xl my-2">long established</h1>
            <p class="text-gray-700 mb-2 md:mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
            <div class="flex justify-between mb-2">
            <span class="font-thin text-sm">May 20th 2020</span>
            <a href="/detailberita">
            <span class="sm:block hidden mb-2 text-gray-800 font-bold">Read more</span>
            </a>
            </div>
        </div>
        </div>

        <div class="mt-6 md:flex space-x-6">

            <div class="bg-white rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105 hover:shadow-lg">
            <img class="rounded-lg" src="https://images.unsplash.com/photo-1497493292307-31c376b6e479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="">
            <div>
            <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">long established</h1>
            <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
            <div class="flex justify-between mt-4">
                <span class="font-thin text-sm">May 20th 2020</span>
                <span class="mb-2 text-gray-800 font-bold">Read more</span>
            </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105 hover:shadow-lg">
            <img class="rounded-lg" src="https://images.unsplash.com/photo-1497493292307-31c376b6e479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="">
            <div>
            <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">long established</h1>
            <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
            <div class="flex justify-between mt-4">
                <span class="font-thin text-sm">May 20th 2020</span>
                <span class="mb-2 text-gray-800 font-bold">Read more</span>
            </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105 hover:shadow-lg">
            <img class="rounded-lg" src="https://images.unsplash.com/photo-1497493292307-31c376b6e479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="">
            <div>
            <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">long established</h1>
            <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
            <div class="flex justify-between mt-4">
                <span class="font-thin text-sm">May 20th 2020</span>
                <span class="mb-2 text-gray-800 font-bold">Read more</span>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    {{-- berita --}}
    <section class="mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-extrabold text-[#16423C] sm:text-4xl mb-6" data-aos="fade-up">
            Berita
        </h1>

        <div class="flex space-x-2 mb-6">
            <span wire:click="selectCategory()"
                  class="cursor-pointer {{ is_null($selectedCategory) ? 'bg-[#16423C] text-white' : 'bg-[#C4DAD2] text-[#002500]' }}
                      text-sm font-semibold px-3 py-1 rounded-full hover:bg-[#16423C] hover:text-white">
                Semua
            </span>

            @foreach ($categories as $category)
                <span wire:click="selectCategory({{ $category->id }})"
                      class="cursor-pointer {{ $selectedCategory === $category->id ? 'bg-[#16423C] text-white' : 'bg-[#C4DAD2] text-[#002500]' }}
                          text-sm font-semibold px-3 py-1 rounded-full hover:bg-[#16423C] hover:text-white">
                    {{ $category->judul }}
                </span>
            @endforeach
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @forelse ($beritas as $berita)
                <div class="bg-white rounded-lg shadow-lg p-6 transition-transform transform hover:scale-105">
                    <img class="rounded-lg mb-4" src="{{ $berita ? asset('storage/' . $berita->image) : '' }}" alt="Gambar Berita">
                    <h2 class="text-xl font-bold text-[#116453]">{{ $berita->judul }}</h2>
                    <p class="text-[#116453] mt-2 mb-4">{{ Str::limit($berita->deskripsi, 100) }}</p>
                    <span class="text-sm text-gray-600">{{ \Carbon\Carbon::parse($berita->created_at)->format('d-m-Y') }}</span>
                    <div class="flex justify-between mt-4">
                        <span class="font-thin text-sm">{{ \Carbon\Carbon::parse($berita->created_at)->format('d-m-Y') }}</span>
                        <a href="{{ route('berita.show', $berita->slug) }}" class="mb-2 text-gray-800 font-bold">Read more</a>
                    </div>

                </div>
            @empty
                <p class="col-span-3 text-center text-gray-500">Tidak ada berita ditemukan.</p>
            @endforelse
        </div>

            <div class="mt-8 flex justify-center">
                <ul class="inline-flex items-center space-x-1">
                    @if ($beritas->onFirstPage())
                        <li class="text-gray-500 px-3 py-1 rounded-md cursor-not-allowed">&laquo; Previous</li>
                    @else
                        <li>
                            <a href="{{ $beritas->previousPageUrl() }}" class="px-3 py-1 rounded-md bg-[#6A9C89] text-white hover:bg-[#5e8b7d]">&laquo; Previous</a>
                        </li>
                    @endif

                    @foreach ($beritas->getUrlRange(1, $beritas->lastPage()) as $page => $url)
                        <li>
                            <a href="{{ $url }}" class="{{ $page == $beritas->currentPage() ? 'bg-[#16423C] text-white' : 'bg-[#6A9C89] text-white' }} px-3 py-1 rounded-md hover:bg-[#5e8b7d]">
                                {{ $page }}
                            </a>
                        </li>
                    @endforeach

                    @if ($beritas->hasMorePages())
                        <li>
                            <a href="{{ $beritas->nextPageUrl() }}" class="px-3 py-1 rounded-md bg-[#6A9C89] text-white hover:bg-[#5e8b7d]">Next &raquo;</a>
                        </li>
                    @else
                        <li class="text-gray-500 px-3 py-1 rounded-md cursor-not-allowed">Next &raquo;</li>
                    @endif
                </ul>
            </div>
        </div>
    </section>

</div>
