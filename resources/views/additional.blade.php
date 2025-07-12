<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - Additional Immigration Services</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs" defer></script>
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>

<body class="bg-[#f5fafd] text-gray-800">
  <header class="bg-[#1e293b]/90 backdrop-blur-md shadow-md sticky top-0 z-50"
        x-data="{ navOpen: false, serviceOpen: false, mobileServiceOpen: false }">
  <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-12">

    <!-- Logo -->
    <div class="flex items-center gap-3">
      <img src="{{ asset('icons/logo.webp') }}" alt="Evisas Logo" class="w-10 h-10">
      <span class="text-xl md:text-2xl font-bold text-white tracking-tight">EVISAS</span>
    </div>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex items-center space-x-8 text-sm font-semibold">
      <a href="/" class="text-white hover:text-blue-400 transition-colors">
        Home
      </a>

      <!-- Dropdown -->
      <div @mouseenter="serviceOpen = true" @mouseleave="serviceOpen = false" class="relative">
        <button class="flex items-center gap-1 text-white hover:text-blue-400 transition-colors">
          Our Services
          <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
        <div x-show="serviceOpen" x-transition
             class="absolute left-0 mt-3 w-60 bg-[#334155] border border-blue-800 shadow-lg rounded-lg z-50 overflow-hidden">
          <a href="/landingpage/extention" class="block px-5 py-3 text-sm text-white hover:bg-blue-800 hover:text-white">Visa & Kitas Extension</a>
          <a href="/landingpage/kitas" class="block px-5 py-3 text-sm text-white hover:bg-blue-800 hover:text-white">KITAS</a>
          <a href="/landingpage/kitap" class="block px-5 py-3 text-sm text-white hover:bg-blue-800 hover:text-white">KITAP</a>
          <a href="/landingpage/visitorvisa" class="block px-5 py-3 text-sm text-white hover:bg-blue-800 hover:text-white">Visitor Visa</a>
          <a href="/landingpage/additional" class="block px-5 py-3 text-sm text-white hover:bg-blue-800 hover:text-white">Additional Immigration Services</a>
        </div>
      </div>

      <a href="/landingpage/companyprofile" class="text-white hover:text-blue-400 transition-colors">
        About Us
      </a>
    </nav>

    <!-- Mobile Nav Toggle -->
    <div class="md:hidden relative">
      <button @click="navOpen = !navOpen" class="text-white focus:outline-none transition">
        <svg x-show="!navOpen" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
        <svg x-show="navOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
      </button>

      <!-- Mobile Menu -->
      <div x-show="navOpen" x-cloak x-transition
           class="absolute right-0 mt-3 w-64 bg-[#334155] shadow-xl rounded-lg py-4 px-5 z-50 text-sm space-y-3 border border-blue-800">
        <a href="/" class="block text-white hover:text-blue-400">Home</a>

        <!-- Mobile Dropdown -->
        <div>
          <button @click="mobileServiceOpen = !mobileServiceOpen"
                  class="flex justify-between items-center w-full text-white hover:text-blue-400 transition">
            Our Services
            <svg class="w-4 h-4 transform transition-transform duration-200"
                 :class="{ 'rotate-180': mobileServiceOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
          <div x-show="mobileServiceOpen" x-transition class="pl-4 mt-2 space-y-2">
            <a href="/landingpage/extention" class="block text-white hover:text-blue-400">Visa & Kitas Extension</a>
            <a href="/landingpage/kitas" class="block text-white hover:text-blue-400">KITAS</a>
            <a href="/landingpage/kitap" class="block text-white hover:text-blue-400">KITAP</a>
            <a href="/landingpage/visitorvisa" class="block text-white hover:text-blue-400">Visitor Visa</a>
            <a href="/landingpage/additional" class="block text-white hover:text-blue-400">Additional Immigration Services</a>
          </div>
        </div>

        <a href="/landingpage/companyprofile" class="block text-white hover:text-blue-400">About Us</a>
      </div>
    </div>
  </div>
</header>

<img src="{{ asset('images/rock.jpg') }}" alt="Preload Background" class="hidden" loading="eager" fetchpriority="high">
<section class="py-20 px-6 bg-[url('/images/rock.jpg')] bg-cover bg-center text-white relative mt-[-64px] min-h-[250px]">

  <!-- Overlay semi-transparan gelap -->
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- Konten -->
  <div class="relative z-10 max-w-6xl mx-auto text-left pl-6">
  <h2 class="text-4xl md:text-5xl mt-16 mb-2">
    <span class="underline decoration-yellow-500 underline-offset-4">Additional Immigration Services</span>
  </h2>
</div>
</section>

<div class="bg-[#021d3a] text-white text-sm px-4 py-3 md:px-20">
  <div class="max-w-7xl mx-auto pl-4 md:pl-20">
    <a href="/" class="hover:underline text-blue-600">Home</a> › 
    <span>Additional Immigration Services</span>
  </div>
</div>

<div class="bg-cover py-12 overflow-hidden" style="background-image: url('{{ asset('images/patternocean1.png') }}')">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Bridging Visa -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">Bridging Visa</h3>
        <p class="text-sm text-gray-600 mb-4">
            A Bridging Visa is a short-term visa that allows foreigners to legally remain in Indonesia while transitioning from one visa (VOA/KITAS/ITAP) to another longer-term visa.
        </p>
        <div class="mt-auto flex gap-3">
            <a href="/landingpage/additional/bridgingvisa" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
        </div>

        <!-- Passport Mutation -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">Passport Mutation</h3>
        <p class="text-sm text-gray-600 mb-4">
            This is the process of transferring or updating your existing Visa to a new passport.
        </p>
        <div class="mt-auto flex gap-3">
            <a href="/landingpage/additional/passportmutation" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
        </div>

        <!-- Address Mutation -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">Address Mutation</h3>
        <p class="text-sm text-gray-600 mb-4">
            This is the process of updating or changing your registered address with the local immigration office.
        </p>
        <div class="mt-auto flex gap-3">
            <a href="/landingpage/additional/addressmutation" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
        </div>

        <!-- Birth Report -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">Birth Report</h3>
        <p class="text-sm text-gray-600 mb-4">
            A Birth Report (Lapor Lahir) is an official document issued by immigration for newborn children born in Indonesia with at least one parent holding a valid visa.
        </p>
        <div class="mt-auto flex gap-3">
            <a href="/landingpage/additional/birthreport" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
        </div>

        <!-- Affidavit -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">Affidavit</h3>
        <p class="text-sm text-gray-600 mb-4">
            An Affidavit is an immigration document for children with dual nationality. A foreign passport is combined with their Indonesian and foreign citizenship status.
        </p>
        <div class="mt-auto flex gap-3">
            <a href="/landingpage/additional/affidavit" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
        </div>

        <!-- Indonesian Passport -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">Indonesian Passport</h3>
        <p class="text-sm text-gray-600 mb-4">
            An Indonesian Passport (Paspor Indonesia) is an official travel document required for Indonesian citizens to travel internationally.
        </p>
        <div class="mt-auto flex gap-3">
            <a href="/landingpage/additional/indonesianpassport" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
        </div>

    </div>
  </div>
</div>

  <!-- Footer -->
  <footer class="bg-[#021d3a] text-white py-10">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-6">
      <div>
        <img src="{{ asset('icons/logo.webp') }}" alt="Logo Evisas" class="w-16 mb-4">
        <p class="text-sm mt-6">With a global network and deep understanding of immigration policies, we are committed to providing efficient and timely solutions.</p>
        <div class="flex space-x-4 mt-4">
          <a href="#"><img src="/icons/Facebook.png" alt="Facebook" class="w-6"></a>
          <a href="#"><img src="/icons/WhatsApp.png" alt="WhatsApp" class="w-6"></a>
          <a href="#"><img src="/icons/Instagram.png" alt="Instagram" class="w-6"></a>
        </div>
      </div>
      <div>
        <h4 class="text-xl font-semibold mb-2">Evisas</h4>
        <p class="text-sm mt-6">Gunung Athena street no38 Lingkungan Banjar Padang Sumbu Klod, Padangsambian, Kec. Denpasar Bar., Kota Denpasar, Bali 80117</p>
        <p class="text-sm mt-6">WhatsApp: +62 811-3858-165</p>
      </div>
    </div>
    <p class="text-center text-sm mt-6">&copy; 2024 Evisas Indonesia. All rights reserved.</p>
  </footer>
</body>

</html>
