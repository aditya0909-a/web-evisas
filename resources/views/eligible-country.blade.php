<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - Eligible Countries for Visa on Arrival</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs" defer></script>
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <style>
    body {
    background-color: #000;
        
      font-family: 'Inter', sans-serif;
    }

    [x-cloak] {
      display: none !important;
    }
    
    html {
    scroll-behavior: smooth;
  }
  </style>
  
  <link rel="preload" as="image" href="/images/ocean-bali.webp" type="image/webp">

</head>


<body class="bg-white text-gray-800">
  <!-- Header -->
  <header class="bg-gradient-to-r from-sky-900 to-blue-700 shadow-lg sticky top-0 z-50 backdrop-blur-md"
        x-data="{ navOpen: false, visaOpen: false, legalOpen: false, mobileVisaOpen: false, mobileLegalOpen: false }">
  <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6 md:px-12">

    <!-- Logo -->
    <div class="flex items-center gap-3">
      <img src="{{ asset('icons/logo.webp') }}" alt="Evisas Icon" class="w-10 h-10">
      <img src="{{ asset('images/EVISAS WHITE1.png') }}" alt="Evisas Text" class="h-5 md:h-5">
    </div>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex items-center space-x-8 text-sm font-semibold">
      <a href="/" class="text-white hover:text-yellow-400 transition duration-200">Home</a>

      <!-- Visa Services Dropdown -->
      <div @mouseenter="visaOpen = true" @mouseleave="visaOpen = false" class="relative">
        <button class="flex items-center gap-1 text-white hover:text-yellow-400 transition duration-200">
          Visa Services
          <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
        <div x-show="visaOpen" x-cloak x-transition
             class="absolute left-0 mt-3 w-64 bg-white text-gray-800 rounded-lg shadow-lg border border-blue-300 z-50 overflow-hidden">
          <a href="/landingpage/extention" class="block px-5 py-3 hover:bg-blue-100">Visa & Kitas Extension</a>
          <a href="/landingpage/kitas" class="block px-5 py-3 hover:bg-blue-100">KITAS</a>
          <a href="/landingpage/kitap" class="block px-5 py-3 hover:bg-blue-100">KITAP</a>
          <a href="/landingpage/visitorvisa" class="block px-5 py-3 hover:bg-blue-100">Visitor Visa</a>
          <a href="/landingpage/additional" class="block px-5 py-3 hover:bg-blue-100">Additional Immigration Services</a>
        </div>
      </div>

      <!-- Legal Services Dropdown -->
      <div @mouseenter="legalOpen = true" @mouseleave="legalOpen = false" class="relative">
        <button class="flex items-center gap-1 text-white hover:text-yellow-400 transition duration-200">
          Legal Services
          <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
        <div x-show="legalOpen" x-cloak x-transition
             class="absolute left-0 mt-3 w-64 bg-white text-gray-800 rounded-lg shadow-lg border border-blue-300 z-50 overflow-hidden">
          <a href="/landingpage/businesssetup" class="block px-5 py-3 hover:bg-blue-100">Business Setup</a>
          <a href="/landingpage/legaldocument" class="block px-5 py-3 hover:bg-blue-100">Legal Document</a>
        </div>
      </div>

      <a href="/landingpage/companyprofile" class="text-white hover:text-yellow-400 transition duration-200">About Us</a>
    </nav>

    <!-- Mobile Nav Toggle -->
    <div class="md:hidden relative">
      <button @click="navOpen = !navOpen" class="text-white focus:outline-none transition">
        <svg x-show="!navOpen" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        <svg x-show="navOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path></svg>
      </button>

      <!-- Mobile Menu -->
      <div x-show="navOpen" x-cloak x-transition
           class="absolute right-0 mt-3 w-64 bg-white text-gray-800 rounded-lg shadow-xl py-4 px-5 z-50 border border-blue-300 space-y-3 text-sm">
        <a href="/" class="block hover:text-yellow-500">Home</a>

        <!-- Mobile Visa Services -->
        <div>
          <button @click="mobileVisaOpen = !mobileVisaOpen"
                  class="flex justify-between items-center w-full hover:text-yellow-500">
            Visa Services
            <svg class="w-4 h-4 transform transition-transform duration-200"
                 :class="{ 'rotate-180': mobileVisaOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
          <div x-show="mobileVisaOpen" x-cloak x-transition class="pl-4 mt-2 space-y-2">
            <a href="/landingpage/extention" class="block hover:text-yellow-500">Visa & Kitas Extension</a>
            <a href="/landingpage/kitas" class="block hover:text-yellow-500">KITAS</a>
            <a href="/landingpage/kitap" class="block hover:text-yellow-500">KITAP</a>
            <a href="/landingpage/visitorvisa" class="block hover:text-yellow-500">Visitor Visa</a>
            <a href="/landingpage/additional" class="block hover:text-yellow-500">Additional Immigration Services</a>
          </div>
        </div>

        <!-- Mobile Legal Services -->
        <div>
          <button @click="mobileLegalOpen = !mobileLegalOpen"
                  class="flex justify-between items-center w-full hover:text-yellow-500">
            Legal Services
            <svg class="w-4 h-4 transform transition-transform duration-200"
                 :class="{ 'rotate-180': mobileLegalOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
          <div x-show="mobileLegalOpen" x-cloak x-transition class="pl-4 mt-2 space-y-2">
            <a href="/landingpage/businesssetup" class="block hover:text-yellow-500">Business Setup</a>
            <a href="/landingpage/legaldocument" class="block hover:text-yellow-500">Legal Document</a>
          </div>
        </div>

        <a href="/landingpage/companyprofile" class="block hover:text-yellow-500">About Us</a>
      </div>
    </div>
  </div>
</header>

<img src="{{ asset('images/ocean-bali.webp') }}" alt="Preload Background" class="hidden" loading="eager" fetchpriority="high">
<section class="py-16 px-4 sm:px-6 bg-[url('/images/ocean-bali.webp')] bg-cover bg-center text-white relative mt-[-64px] min-h-[250px]">

  <!-- Overlay -->
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- Konten -->
  <div class="relative z-10 max-w-6xl mx-auto text-left">
    <!-- Judul -->
    <h2 class="text-3xl sm:text-4xl md:text-5xl font-semibold mt-12 sm:mt-16 mb-4 sm:mb-6 pl-2 sm:pl-6">
      <span class="underline decoration-yellow-500 underline-offset-4">
        Eligible Countries for Visa on Arrival
      </span>
    </h2>

<div x-data="{
      search: '',
      countries: [
        'Albania','Argentina','Armenia','Andorra','Australia','Austria','Azerbaijan','Bahrain','Belarus','Belgium',
        'Brazil','Brunei Darussalam','Bosnia and Herzegovina','Bulgaria','Czech Republic','Chile','Cambodia','Canada','Colombia','Croatia',
        'Cyprus','China','Denmark','Ecuador','Estonia','Egypt','Finland','France','Guatemala','Germany',
        'Greece','Hong Kong','Hungary','India','Ireland','Italy','Iceland','Japan','Jordan','Kazakhstan',
        'Kenya','Kuwait','Laos','Latvia','Liechtenstein','Lithuania','Luxembourg','Maldives','Malaysia','Malta',
        'Morocco','Mauritius','Mexico','Monaco','Mongolia','Mozambique','Myanmar','Norway','New Zealand','Netherlands',
        'Oman','Palestine','Papua New Guinea','Peru','Poland','Portugal','Philippines','Qatar','Romania','Russia',
        'Rwanda','Serbia','Seychelles','South Korea','Singapore','Slovakia','Slovenia','Spain','Suriname','Sweden',
        'Switzerland','South Africa','Saudi Arabia','Taiwan','Tanzania','Thailand','Timor-Leste','Tunisia','Turkey',
        'United States','United Kingdom','United Arab Emirates','Uzbekistan','Ukraine','Vatican','Venezuela','Vietnam'
      ]
    }"
    class="bg-white bg-opacity-90 backdrop-blur-md shadow-xl rounded-xl mt-6 sm:mt-10 mb-10 px-4 sm:px-6 lg:px-10 py-8 sm:py-10"
>
  <div class="max-w-full sm:max-w-5xl mx-auto">
    <!-- Paragraf -->
    <p class="text-sm sm:text-base text-gray-700 mb-6 leading-relaxed">
      Citizens from the following countries can obtain a
      <strong class="text-blue-700">Visa on Arrival (VOA)</strong> when entering Indonesia.
      The visa is valid for <strong class="text-blue-700">30 days</strong> (including day of arrival)
      and can be extended once for another 30 days.
    </p>

    <!-- Search Bar -->
    <div class="mb-4">
      <input
      type="text"
      x-model="search"
      placeholder="Search country..."
      class="w-full sm:w-1/2 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring focus:border-blue-300 text-gray-800"
      />
    </div>

    <!-- Grid negara -->
    <div class="bg-gray-100 border border-gray-200 rounded-lg p-4 max-h-72 sm:max-h-96 overflow-y-auto custom-scroll">
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2 text-sm sm:text-base text-gray-800">
        <template x-for="country in countries.filter(c => c.toLowerCase().includes(search.toLowerCase()))" :key="country">
          <span class="bg-white px-3 py-1 rounded-full shadow-sm hover:bg-blue-100 transition text-center">
            <span x-text="country"></span>
          </span>
        </template>
      </div>
    </div>
  </div>
</div>

  </div>
</section>






<style>
  /* Optional: Smooth custom scrollbar */
  .custom-scroll::-webkit-scrollbar {
    width: 6px;
  }
  .custom-scroll::-webkit-scrollbar-track {
    background: transparent;
  }
  .custom-scroll::-webkit-scrollbar-thumb {
    background-color: #94a3b8;
    border-radius: 9999px;
  }
</style>

  <!-- Footer -->
  <footer class="bg-gradient-to-tr from-sky-900 to-slate-800 text-white py-12 relative z-10">
  <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-6">

    <!-- Kiri: Logo dan Deskripsi -->
    <div>
      <img src="{{ asset('icons/logo.png') }}" alt="Logo Evisas" class="w-16 mb-4">
      <p class="text-sm text-gray-300 leading-relaxed">
        With a global network and deep understanding of immigration policies, we are committed to providing efficient and timely solutions.
      </p>
      <div class="flex space-x-4 mt-6">
        <a href="https://facebook.com" target="_blank" class="hover:scale-110 transition-transform duration-300">
          <img src="/icons/Facebook.png" alt="Facebook" class="w-6">
        </a>
        <a href="https://wa.me/628113858165" target="_blank" class="hover:scale-110 transition-transform duration-300">
          <img src="/icons/WhatsApp.png" alt="WhatsApp" class="w-6">
        </a>
        <a href="https://instagram.com" target="_blank" class="hover:scale-110 transition-transform duration-300">
          <img src="/icons/Instagram.png" alt="Instagram" class="w-6">
        </a>
      </div>
    </div>

    <!-- Kanan: Kontak -->
    <div>
      <h4 class="text-xl font-semibold mb-2 text-yellow-400">Evisas Contact</h4>
      <p class="text-sm text-gray-300 mt-4">
        Gunung Athena street no.38, Padangsambian, Denpasar Barat, Bali 80117
      </p>
      <p class="text-sm mt-4 text-gray-300">
        WhatsApp:
        <a href="https://wa.me/628113858165" class="text-blue-300 hover:underline">+62 811-3858-165</a>
      </p>
      <p class="text-sm mt-2 text-gray-300">
        Email:
        <a href="mailto:cs.evisasbali@gmail.com" class="text-blue-300 hover:underline">cs.evisasbali@gmail.com</a>
      </p>
    </div>
  </div>

  <!-- Copyright -->
  <div class="text-center text-xs mt-10 border-t border-blue-400 pt-4 text-gray-300">
    &copy; {{ date('Y') }} Evisas Indonesia. All rights reserved.
  </div>
</footer>
</body>

</html>
