<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - Investor KITAS extension</title>
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
    <span class="underline decoration-yellow-500 underline-offset-4">Investor KITAS extension</span>
  </h2>
</div>
</section>

<div class="bg-gradient-to-r from-sky-900 to-blue-700 shadow-lg sticky text-white text-sm px-4 py-3 md:px-20">
  <div class="max-w-7xl mx-auto pl-4 md:pl-20">
    <a href="/" class="hover:underline text-blue-600">Home</a> › 
    <a href="/landingpage/extention" class="hover:underline text-blue-600">Extention</a> ›
    <span>Investor KITAS extension</span>
  </div>
</div>

<div class="bg-cover py-12 overflow-hidden" style="background-image: url('{{ asset('images/patternocean.svg') }}')">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">

    <!-- Section: Investor KITAS Extension -->
    <div class="bg-white rounded-xl shadow-lg p-6 max-w-3xl mx-auto my-10">
      <h2 class="text-2xl font-bold text-[#1e293b] mb-4">Investor KITAS Extension</h2>

      <p class="text-sm text-gray-700 mb-4">
        An Investor KITAS extension follows the existing KITAS validity period. 
        To avoid complications and potential overstay, apply for an extension at least <strong>30 days</strong> before your KITAS expires.
      </p>

      <!-- Length of Extension -->
      <div class="mb-4">
        <h3 class="font-semibold">Length of Extension</h3>
        <p class="text-sm text-gray-700">In accordance with the KITAS validity period</p>
      </div>

      <!-- Document Requirements -->
      <div class="mb-4">
        <h3 class="font-semibold">Document Requirements</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Passport</li>
          <li>Domicile letter or home address</li>
          <li>SKTT (Temporary Residential Registration)</li>
          <li>Bank statement (minimum amount USD 2,000)</li>
        </ul>
      </div>

      <!-- Requirements -->
      <div class="mb-4">
        <h3 class="font-semibold">Requirements</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Applicant must be physically present in Indonesia to process KITAS renewal.</li>
          <li>Renewal needs to be processed within 1–3 months before your KITAS expires.</li>
        </ul>
      </div>

      <!-- Processing Stages -->
      <div class="mb-4">
        <h3 class="font-semibold">Processing Stages</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Submit all required documents at our office in Bali.</li>
          <li>Make payment via bank transfer or visit our office.</li>
          <li>We will notify within 7 business days to go to the immigration office for biometrics.</li>
          <li>Visit immigration office for your photo and fingerprints (takes 20–40 minutes).</li>
          <li>We will notify you when your passport is ready and extension is complete, usually 7 business days after biometrics.</li>
        </ul>
      </div>

      <!-- CTA Buttons -->
      <div class="flex gap-2 mt-4">
        <a x-data
           :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the Investor KITAS Extension.\nCould you please assist me with the application process? Thank you!`)"
           target="_blank"
           class="px-4 py-2 bg-blue-700 text-white text-sm rounded hover:bg-blue-800 transition">
          Apply Now
        </a>
      </div>
    </div>

    <!-- FAQ Section -->
    <div x-data="{ selected: null }" class="max-w-3xl mx-auto mb-10 px-6">
      <h3 class="text-xl font-semibold mb-4">Frequently Asked Questions</h3>

      <div class="space-y-4">
        <!-- FAQ 1 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <button @click="selected !== 1 ? selected = 1 : selected = null"
                  class="w-full text-left px-4 py-3 font-semibold text-black-600 hover:bg-gray-50">
            Q: Can I travel outside of Bali without a passport?
          </button>
          <div x-show="selected === 1" x-collapse class="px-4 pb-4 text-sm text-gray-700">
            A: Yes, you can travel anywhere in Indonesia without a passport if you have a clear picture of your passport and visa stamps with arrival dates. We can also provide you with a sponsorship letter stating that your passport is with immigration upon request.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <button @click="selected !== 2 ? selected = 2 : selected = null"
                  class="w-full text-left px-4 py-3 font-semibold text-black-600 hover:bg-gray-50">
            Q: What if my visa expires whilst the passport and visa is in immigration?
          </button>
          <div x-show="selected === 2" x-collapse class="px-4 pb-4 text-sm text-gray-700">
            A: As long as your visa has not expired before it is submitted to immigration, you will not be charged any overstay fee.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <button @click="selected !== 3 ? selected = 3 : selected = null"
                  class="w-full text-left px-4 py-3 font-semibold text-black-600 hover:bg-gray-50">
            Q: Will I get my passport back the same day as I do the biometrics?
          </button>
          <div x-show="selected === 3" x-collapse class="px-4 pb-4 text-sm text-gray-700">
            A: No, the process will continue. We will collect your passport and return it to you once it is completed.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <button @click="selected !== 4 ? selected = 4 : selected = null"
                  class="w-full text-left px-4 py-3 font-semibold text-black-600 hover:bg-gray-50">
            Q: What is an overstay, and how much does it cost?
          </button>
          <div x-show="selected === 4" x-collapse class="px-4 pb-4 text-sm text-gray-700">
            A: An overstay is when you stay for any length of time over your visa expiry date. Immigration or customs will charge you 1,000,000.00 IDR for every day you stay longer than your visa allows.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <button @click="selected !== 5 ? selected = 5 : selected = null"
                  class="w-full text-left px-4 py-3 font-semibold text-black-600 hover:bg-gray-50">
            Q: Is my passport safe?
          </button>
          <div x-show="selected === 5" x-collapse class="px-4 pb-4 text-sm text-gray-700">
            A: Absolutely, your passport is safely with immigration during processing.
          </div>
        </div>
      </div>
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
