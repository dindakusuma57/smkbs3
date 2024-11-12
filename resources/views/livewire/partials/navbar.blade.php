<link rel="stylesheet" href="css/filament/style.css">

<div>
    <nav class="fixed w-full z-50 top-0 left-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="img/logo.png" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white" id="navbar-brand">SMK Bina Sejahtera 3</span>
          </a>
          <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" class="text-white bg-[#002500] font-medium rounded-lg text-sm px-4 py-2 text-center text-[#002500]">Get started</button>
            <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden" aria-controls="navbar-cta" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
            </button>
          </div>
          <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul class="flex flex-col font-medium md:flex-row md:space-x-8 rtl:space-x-reverse" id="navbar-links">
              <li><a href="/" class="text-gray-900 md:hover:text-blue-700 dark:text-white dark:hover:text-blue-500">Home</a></li>
              <li><a href="/sejarah" class="text-gray-900 md:hover:text-blue-700 dark:text-white dark:hover:text-blue-500">Sejarah</a></li>
              <li><a href="/kalender" class="text-gray-900 md:hover:text-blue-700 dark:text-white dark:hover:text-blue-500">Kalender</a></li>
              <li><a href="/visimisi" class="text-gray-900 md:hover:text-blue-700 dark:text-white dark:hover:text-blue-500">Visimisi</a></li>
              <li><a href="/kontak" class="text-gray-900 md:hover:text-blue-700 dark:text-white dark:hover:text-blue-500">Contact</a></li>
              <li><a href="/berita" class="text-gray-900 md:hover:text-blue-700 dark:text-white dark:hover:text-blue-500">Berita</a></li>
              <li><a href="/guru" class="text-gray-900 md:hover:text-blue-700 dark:text-white dark:hover:text-blue-500">Guru</a></li>
              <li><a href="/kurikulum" class="text-gray-900 md:hover:text-blue-700 dark:text-white dark:hover:text-blue-500">Kurikulum</a></li>

            </ul>
          </div>
        </div>
      </nav>

  <script>
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('nav');
      const links = document.querySelectorAll('#navbar-links a');
      const brand = document.getElementById('navbar-brand');

      if (window.scrollY > 50) {
        navbar.classList.add('bg-scroll');
        links.forEach(link => link.classList.add('text-dark'));
        brand.classList.add('text-dark');
      } else {
        navbar.classList.remove('bg-scroll');
        links.forEach(link => link.classList.remove('text-dark'));
        brand.classList.remove('text-dark');
      }
    });
  </script>
</div>
