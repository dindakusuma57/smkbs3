<link rel="stylesheet" href="css/filament/style.css">
<script type="module" src="js/main.js"></script>

<div>
    <nav id="navbar" class="navbar fixed top-0 left-0 w-full z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-3 py-2">
            <!-- Brand -->
            <a href="/" class="flex items-center space-x-2">
                <img src="{{ asset('img/logo.png') }}" class="h-8" alt="Flowbite Logo" />
                <span id="navbar-brand" class="self-center text-lg font-semibold text-white">SMK Bina Sejahtera 3</span>
            </a>

            <!-- Action Buttons -->
            <div class="flex items-center md:order-2 space-x-2">
                <a href="/kontak">
                    <button type="button" id="cta-button"
                        class="shadow-md text-white bg-[#16423C] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md px-4 py-2 text-center">
                        Kontak
                    </button>
                </a>
                <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center justify-center p-2 w-8 h-8 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <!-- Menu Links -->
            <div class="hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                <ul class="flex flex-col font-medium md:flex-row md:space-x-4 mt-2 md:mt-0">
                    <li><a href="/" class="nav-link block text-white hover:text-gray-300">Beranda</a></li>

                    <li class="relative">
                        <button onclick="toggleDropdown('profileDropdown')"
                            class="nav-link flex items-center text-white hover:text-gray-300 focus:outline-none">
                            Profile
                            <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <ul id="profileDropdown"
                            class="absolute hidden mt-1 space-y-1 bg-white text-gray-800 rounded-lg shadow-lg w-40">
                            <li>
                                <a href="/sejarah" class="block px-4 py-2 hover:bg-gray-100">Sejarah</a>
                            </li>
                            <li>
                                <a href="/visimisi" class="block px-4 py-2 hover:bg-gray-100">Visi Misi</a>
                            </li>
                        </ul>
                    </li>

                    <li class="relative">
                        <button onclick="toggleDropdown('pendidikanDropdown')"
                            class="nav-link flex items-center text-white hover:text-gray-300 focus:outline-none">
                            Akademik
                            <svg class="inline w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <ul id="pendidikanDropdown"
                            class="absolute hidden mt-1 space-y-1 bg-white text-gray-800 rounded-lg shadow-lg w-40">
                            <li>
                                <a href="/kurikulum" class="block px-4 py-2 hover:bg-gray-100">Kurikulum</a>
                            </li>
                            <li>
                                <a href="/guru" class="block px-4 py-2 hover:bg-gray-100">Pengajar</a>
                            </li>
                            <li>
                                <a href="/ekstrakulikuler" class="block px-4 py-2 hover:bg-gray-100">Ekstrakulikuler</a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="/berita" class="nav-link block text-white hover:text-gray-300">Berita</a></li>
                    <li><a href="/galeri" class="nav-link block text-white hover:text-gray-300">Galeri</a></li>
                    <li><a href="/ppdb" class="nav-link block text-white hover:text-gray-300">PPDB</a></li>
                </ul>
            </div>
        </div>
    </nav>

</div>

<script>
    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle('hidden');
    }
</script>
