<div>
    <script src="js/main.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    @livewireStyles

    <div>
        <section class="bg-white">
            <div class="relative w-full bg-cover bg-center" style="background-image: url('img/landing2.jpeg');">
                <div class="absolute inset-0 bg-[#16423C] opacity-90"></div>
                <div
                    class="relative max-w-5xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-12 text-white text-center flex flex-col items-center justify-center">
                    <h1 class="mt-8 text-4xl lg:text-4xl font-semibold">Kontak</h1>
                    <h3 class="mt-4 text-lg font-semibold">
                        <a href="#" class="text-white hover:underline">Home</a> &gt; <span>Kontak</span>
                    </h3>
                </div>
            </div>
        </section>

        <section class="py-10 px-4 sm:px-6 lg:px-8 mx-auto" style="background-color: white;">
            <section class="bg-white py-10 px-4 sm:px-6 lg:px-8">
                <div style="margin-top:-140px; margin-bottom:-80px" data-aos="fade-up"
                    class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
                    <div class="mt-16 lg:mt-20">
                        @foreach ($kontaks as $kontak)
                            <div class="grid grid-cols-1 md:grid-cols-2">
                                <div class="rounded-sm overflow-hidden">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.6149752394385!2d106.74054647362662!3d-6.570182193423148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c57a0fb2730f%3A0x4147e5cc562f6ba6!2sSMK%20Bina%20Sejahtera%203%20Kota%20Bogor!5e0!3m2!1sen!2sid!4v1729242450185!5m2!1sen!2sid"
                                        width="100%" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>

                                <div class="bg-[#6A9C89] text-white rounded-sm p-6"
                                    style="border-radius: 0px 20px 20px 0px;">
                                    <div class="max-w-full mx-auto rounded-lg overflow-hidden">

                                        <div class="px-6 py-4">
                                            <h3 class="text-lg font-medium">Alamat</h3>
                                            <p>{{ $kontak->alamat }}</p>
                                        </div>

                                        <div class="border-t border-gray-200 px-6 py-4">
                                            <h3 class="text-lg font-medium">Media Sosial</h3>
                                            @php
                                                $socialMediaAccounts = explode("\n", $kontak->sosmed);
                                            @endphp
                                            @foreach ($socialMediaAccounts as $account)
                                                @php
                                                    $parts = explode(':', $account);
                                                    $platform = isset($parts[0]) ? trim($parts[0]) : '';
                                                    $username = isset($parts[1]) ? trim($parts[1]) : '';
                                                    $icon = '';

                                                    if ($platform) {
                                                        switch (strtolower($platform)) {
                                                            case 'instagram':
                                                                $icon = 'fab fa-instagram';
                                                                break;
                                                            case 'facebook':
                                                                $icon = 'fab fa-facebook';
                                                                break;
                                                            case 'twitter':
                                                                $icon = 'fab fa-twitter';
                                                                break;
                                                            case 'linkedin':
                                                                $icon = 'fab fa-linkedin';
                                                                break;
                                                            case 'youtube':
                                                                $icon = 'fab fa-youtube';
                                                                break;
                                                            case 'tiktok':
                                                                $icon = 'fab fa-tiktok';
                                                                break;
                                                            default:
                                                                $icon = 'fab fa-globe';
                                                                break;
                                                        }
                                                    }
                                                @endphp
                                                @if ($platform && $username)
                                                    <p class="mt-1 flex items-center">
                                                        <i class="{{ $icon }} mr-2 text-white"></i>
                                                        {{ $username }}
                                                    </p>
                                                @endif
                                            @endforeach
                                        </div>

                                        <div class="border-t border-gray-200 px-6 py-4">
                                            <h3 class="text-lg font-medium">Kontak</h3>
                                            @php
                                                $points = explode("\n", $kontak->kontak);
                                            @endphp
                                            @foreach ($points as $point)
                                                <p class="mt-1 flex items-center">
                                                    <i class="fas fa-phone-alt mr-2 text-white"></i>
                                                    {{ $point }}
                                                </p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </section>

        {{-- Form Kontak --}}
        <section class="" style="background-color: white;">
            <div data-aos="fade-up" class="font-[sans-serif]">
                <div class="bg-gradient-to-r bg-[#6A9C89] w-full h-36">
                    <div class="px-6 py-10 text-center" style="color:white">
                        <h1 class="text-lg font-bold">Kirimkan Kami Sebuah Pesan</h1>
                    </div>
                </div>
                <div class="-mt-20 mb-6 px-4 py-10">
                    <div class="mx-auto max-w-6xl shadow-lg p-8 relative bg-white rounded-lg">

                        <form id="my-form" action="https://formspree.io/f/myzykjlg" method="POST"
                            class="mt-8 grid sm:grid-cols-2 gap-6">
                            <div>
                                <label for="nama_depan" class="block font-semibold text-[#16423C]">Nama Depan</label>
                                <input type='text' id="nama_depan" name="nama_depan" placeholder='Nama Depan'
                                    required
                                    class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#6B9B55]" />
                            </div>

                            <div>
                                <label for="nama_belakang" class="block font-bold text-[#16423C]">Nama Belakang</label>
                                <input type='text' id="nama_belakang" name="nama_belakang"
                                    placeholder='Nama Belakang' required
                                    class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#6B9B55]" />
                            </div>

                            <div>
                                <label for="email" class="block font-bold text-[#16423C]">Email</label>
                                <input type='email' id="email" name="email" placeholder='Email' required
                                    class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#6B9B55]" />
                            </div>

                            <div>
                                <label for="no_telp" class="block font-bold text-[#16423C]">Nomor Telepon</label>
                                <input type="tel" id="no_telp" name="no_telp" placeholder="Nomor Telepon" required
                                    class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#6B9B55]"
                                    inputmode="numeric" pattern="[0-9]*" oninput="validateInput(event)" />
                            </div>

                            <div>
                                <label for="pesan" class="block font-bold text-[#16423C]">Pesan</label>
                                <textarea id="pesan" name="message" placeholder='Pesan' rows="6" required
                                    class="col-span-full w-full rounded-lg px-4 border border-gray-300 text-sm pt-3 outline-[#6B9B55]"></textarea>
                            </div>

                            <div class="flex items-center col-span-full">
                                <input id="checkbox1" type="checkbox" required class="w-4 h-4 mr-3" />
                                <label for="checkbox1" class="text-sm text-gray-400">Saya setuju dengan <a
                                        href="javascript:void(0);" class="underline">Syarat dan Ketentuan</a> serta <a
                                        href="javascript:void(0);" class="underline">Kebijakan Privasi</a></label>
                            </div>

                            <button id="my-form-button" type="submit"
                                class="text-white w-max bg-[#6A9C89] hover:bg-[#002500] rounded-lg text-sm px-6 py-3 mt-4 tracking-wide">
                                Kirim Pesan
                            </button>

                            <p id="my-form-status"></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal content -->
        <div id="successModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full min-h-screen md:h-auto">
        <!-- Overlay background -->
        <div class="absolute inset-0 bg-black bg-opacity-50 z-40"></div> <!-- This will be the overlay -->

        <!-- Modal content -->
        <div data-aos="fade-up" class="relative p-4 w-full max-w-md h-full md:h-auto z-50">
            <div class="relative p-4 text-center bg-[#6A9C89] rounded-lg shadow sm:p-5">
                <button type="button"
                    class="text-white absolute top-2.5 right-2.5 bg-transparent hover:bg-white hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-white dark:hover:text-white"
                    data-modal-toggle="successModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="w-12 h-12 rounded-full bg-white p-2 flex items-center justify-center mx-auto mb-3.5">
                    <svg aria-hidden="true" class="w-8 h-8 text-[#6A9C89]" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Success</span>
                </div>
                <p class="mb-4 text-lg font-semibold text-white dark:text-white">Pesan berhasil di kirim!</p>
            </div>
        </div>
    </div>

    </div>
