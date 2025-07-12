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
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>

<body class="bg-[#f5fafd] text-gray-800">

  <!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

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
    <span class="underline decoration-yellow-500 underline-offset-4">(E28B/ E28C/ E28D) Visa for Investors</span>
  </h2>
</div>
</section>

<div class="bg-[#021d3a] text-white text-sm px-4 py-3 md:px-20">
  <div class="max-w-7xl mx-auto pl-4 md:pl-20">
    <a href="/" class="hover:underline text-left text-blue-600">Home</a> ›
    <a href="/landingpage/kitas" class="hover:underline text-left text-blue-600">KITAS</a> ›
    <a href="/landingpage/kitas/goldenkitas" class="hover:underline text-left text-blue-600">Golden Visas</a> ›  
    <span>(E28B/ E28C/ E28D) Visa for Investors</span>
  </div>
</div>

<div class="bg-cover py-12 overflow-hidden" style="background-image: url('{{ asset('images/patternocean1.png') }}')">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">

    <!-- Section: E28B/ E28C/ E28D - Visa for Investors -->
    <div class="bg-white rounded-xl shadow-lg p-6 max-w-3xl mx-auto my-10">
      <h2 class="text-2xl font-bold text-[#1e293b] mb-2">(E28B/ E28C/ E28D) Visa for Investors</h2>
      <p class="text-sm text-gray-600 mb-4">
        This visa is for Investors with or without established company in Indonesia and want to live for 5 or 10 years.
      </p>

      <div class="mb-4">
        <h3 class="font-semibold">Price</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>5 years: IDR 20,000,000 – 40 business days processing time</li>
          <li>10 years: IDR 25,000,000 – 40 business days processing time</li>
        </ul>
      </div>

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
