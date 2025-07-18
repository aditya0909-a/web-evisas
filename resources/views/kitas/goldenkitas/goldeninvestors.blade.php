<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - (E28B/ E28C/ E28D) Visa for Investors</title>
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
<section class="py-20 px-6 bg-[url('/images/ocean-bali.webp')] bg-cover bg-center text-white relative mt-[-64px] min-h-[250px]">

  <!-- Overlay semi-transparan gelap -->
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- Konten -->
  <div class="relative z-10 max-w-6xl mx-auto text-left pl-6">
  <h2 class="text-4xl md:text-5xl mt-16 mb-2">
    <span class="underline decoration-yellow-500 underline-offset-4">(E28B/ E28C/ E28D) Visa for Investors</span>
  </h2>
</div>
</section>

<div class="bg-gradient-to-r from-sky-900 to-blue-700 shadow-lg sticky text-white text-sm px-4 py-3 md:px-20">
  <div class="max-w-7xl mx-auto pl-4 md:pl-20">
    <a href="/" class="hover:underline text-left text-blue-600">Home</a> ›
    <a href="/landingpage/kitas" class="hover:underline text-left text-blue-600">KITAS</a> ›
    <a href="/landingpage/kitas/goldenkitas" class="hover:underline text-left text-blue-600">Golden Visas</a> ›  
    <span>(E28B/ E28C/ E28D) Visa for Investors</span>
  </div>
</div>

<div class="bg-cover py-12 overflow-hidden" style="background-image: url('{{ asset('images/patternocean.svg') }}')">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">

    <!-- Section: E28B/ E28C/ E28D - Visa for Investors -->
    <div class="bg-white rounded-xl shadow-lg p-6 max-w-3xl mx-auto my-10">
      <h2 class="text-2xl font-bold text-[#1e293b] mb-2">(E28B/ E28C/ E28D) Visa for Investors</h2>
      <p class="text-sm text-gray-600 mb-4">
        This visa is for Investors with or without established company in Indonesia and want to live for 5 or 10 years.
      </p>

      <div class="mb-4">
        <h3 class="font-semibold">Document Requirements</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Passport valid for 6 months</li>
          <li>Recent passport-size color photo (digital format)</li>
          <li>Proof of living expenses of at least USD $2000 or equivalent</li>
        </ul>
      </div>

      <div class="mb-4">
        <h3 class="font-semibold">With this visa you <span class="text-green-600">CAN</span>:</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Carry out business and investment activity in Indonesia</li>
          <li>Bring eligible members of your family</li>
          <li>Carry out work-related activities</li>
        </ul>
      </div>

      <div class="mb-4">
        <h3 class="font-semibold">With this visa, you <span class="text-red-600">CANNOT</span>:</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Work unless pre-registered by an Indonesian company</li>
        </ul>
      </div>

      <div class="mb-4">
        <h3 class="font-semibold">With this visa, you MUST:</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Report to the local immigration office within 60 days of arrival</li>
          <li>Assign an Indonesian bank during your stay, and follow all visa conditions and local laws</li>
        </ul>
      </div>

      <div class="mb-4">
        <h3 class="font-semibold">Additional Requirements (For Individual Investors Not Establishing a Company - E28C)</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Proof of Company Ownership: Documented in corporate action statements confirmed by a financial audit from an international public accounting firm</li>
          <li>Proof of Turnover: Minimum USD 25,000,000</li>
          <li>Have a second passport and be domiciled in a foreign country</li>
        </ul>
      </div>

      <div class="mb-4">
        <h3 class="font-semibold">Additional Requirements (For Legal Entity Investors Establishing a Company - E28B)</h3>
        <p class="text-sm mt-2">Investment Screening Committee score of the following:</p>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Indonesian investment-based company: Minimum USD $2,500,000</li>
          <li>Advanced Indonesian public listed company: Minimum USD $500,000</li>
          <li>Advanced Indonesian private company: Minimum USD $1,000,000</li>
          <li>Moderate Indonesian private company: Minimum USD $2,000,000</li>
        </ul>
      </div>

      <div class="mb-4">
        <h3 class="font-semibold">Additional Requirements (For Persons or Entities Not Establishing a Company in Indonesia - E28D)</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Super investor: USD 10,000,000</li>
          <li>Investor: USD 5,000,000</li>
          <li>Proof of Turnover: Minimum USD $100,000. Documented in financial audit report from international public accounting firm</li>
        </ul>
      </div>

      <div class="flex gap-2 mt-4">
        <a x-data
          :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the (E28B/ E28C/ E28D) Visa for Investors.\nCould you please assist me with the application process? Thank you!`)"
          target="_blank"
          class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
          Apply Now
        </a>
      </div>
    </div>

    <div class="max-w-3xl mx-auto text-sm text-gray-600 mb-10 px-6">
      <h4 class="font-semibold mb-2">NOTE:</h4>
      <ul class="list-disc pl-6 space-y-1">
        <li>Please be aware that international bank transfers can take up to 5 business days to clear in Bali.</li>
        <li>Business days do not include public holidays or weekends.</li>
        <li>Processing starts only after the funds are successfully cleared into our account.</li>
      </ul>
    </div>
  </div>
</div>

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
