<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - Visitor Visa</title>
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
<section class="py-20 px-6 bg-[url('/images/ocean-bali.webp')] bg-cover bg-center text-white relative mt-[-64px] min-h-[250px]"">

  <!-- Overlay semi-transparan gelap -->
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- Konten -->
  <div class="relative z-10 max-w-6xl mx-auto text-left pl-6">
  <h2 class="text-4xl md:text-5xl mt-16 mb-2">
    <span class="underline decoration-yellow-500 underline-offset-4">Visitor Visa</span>
  </h2>
</div>

</section>

<div class="bg-gradient-to-r from-sky-900 to-blue-700 shadow-lg sticky text-white text-sm px-4 py-3 md:px-20">
  <div class="max-w-7xl mx-auto pl-4 md:pl-20">
    <a href="/" class="hover:underline text-blue-600">Home</a> › 
    <span>Visitor Visa</span>
  </div>
</div>
  
<section class="relative bg-white text-gray-800 overflow-hidden">
  <!-- Background pattern -->
  <div class="absolute inset-0 bg-[url('/images/patternocean.svg')] bg-no-repeat bg-center opacity-50 pointer-events-none"></div>

  <!-- Main Content -->
  <div class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-2 gap-12 relative z-10 items-center">
    <!-- Image -->
    <img src="{{ asset('images/voa.png') }}" alt="Plane Window View" class="rounded-lg shadow-xl">

    <!-- Text Content -->
    <div>
      <h1 class="text-4xl font-bold mb-4 text-[#1e293b]">E - Visa VOA</h1>
      <p class="text-blue-600 italic text-lg mb-4">For short-term stays up to 60 days.</p>
      <p class="text-gray-700 mb-4 leading-relaxed">
        Visa on Arrival (VOA) is a single-entry visa valid for 30 days, including the day of arrival. 
        It can be extended once for an additional 30 days, allowing a total stay of up to 60 days. This visa is available for citizens of eligible countries.
      </p>
      <ul class="list-disc list-inside text-gray-700 mb-6">
        <li>Valid for Tourism and certain short-term visits</li>
        <li>Simple and fast processing</li>
      </ul>

      <!-- Buttons -->
      <div class="flex gap-4">
        <a href="/landingpage/visitorvisa/voa" class="px-6 py-3 bg-white border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition">Get Details</a>
      </div>
    </div>
  </div>
</section>

<section class="bg-gradient-to-br from-blue-50 to-[#e6f0ff]">
    <div class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-2 gap-12 relative z-10 items-center">
    <!-- Image -->
    <img src="{{ asset('images/single-entry.png') }}" alt="Plane Window View" class="rounded-lg shadow-xl">

    <!-- Text Content -->
    <div>
      <h1 class="text-4xl font-bold mb-4 text-[#1e293b]">Single Entry Visitor Visa</h1>
      <p class="text-blue-600 italic text-lg mb-4">For tourism, business, social or volunteer visits up to 180 days.</p>
      <p class="text-gray-700 mb-4 leading-relaxed">
        A Single Entry Visit Visa permits a single entry, meaning once you leave the country,
        a new visa will be required for re-entry. Depending on the type, a stay of 60 to 180 days is permitted.
      </p>
      <ul class="list-disc list-inside text-gray-700 mb-6">
        <li>Can be extended twice (each 60 days)</li>
        <li>Valid for Tourism, Business, Social, Humanitarian or Music Activities</li>
        <li>Fast processing available</li>
      </ul>

      <!-- Buttons -->
      <div class="flex gap-4">
        <a href="/landingpage/visitorvisa/singleentry" class="px-6 py-3 bg-white border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition">Get Details</a>
      </div>
    </div>
  </div>
</section>

<section class="relative bg-white text-gray-800 overflow-hidden">
  <!-- Background pattern -->
  <div class="absolute inset-0 bg-[url('/images/patternocean.svg')] bg-no-repeat bg-center opacity-50 pointer-events-none"></div>
  <!-- Main Content -->
  <div class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-2 gap-12 relative z-10 items-center">
    <!-- Image -->
    <img src="{{ asset('images/multiple-entry.png') }}" alt="Plane Window View" class="rounded-lg shadow-xl">

    <!-- Text Content -->
    <div>
      <h1 class="text-4xl font-bold mb-4 text-[#1e293b]">Multiple Entry Visitor Visa</h1>
      <p class="text-blue-600 italic text-lg mb-4">For tourism, business, invesment up to 180 days.</p>
      <p class="text-gray-700 mb-4 leading-relaxed">
        Multiple entry visas are available for 1, 2 or 5 years. 
        Periods of stay for this visa allow either 60 days per visit (but can be extended twice) OR 180 days per visit (but can be extended once). With a multi entry visa, you may exit and re-enter the country under the same visa.
      </p>
      <ul class="list-disc list-inside text-gray-700 mb-6">
        <li>Can be extended twice (each 60 days)</li>
        <li>Valid for Tourism, Business, Invesment.</li>
        <li>Re-enter the country under the same visa.</li>
        <li>Fast processing available</li>
      </ul>

      <!-- Buttons -->
      <div class="flex gap-4">
        <a href="/landingpage/visitorvisa/multipleentry" class="px-6 py-3 bg-white border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition">Get Details</a>
      </div>
    </div>
  </div>
</section>


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
