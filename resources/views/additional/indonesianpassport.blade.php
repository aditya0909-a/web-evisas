<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - Indonesian Passport</title>
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
    <span class="underline decoration-yellow-500 underline-offset-4">Indonesian Passport</span>
  </h2>
</div>
</section>

<div class="bg-gradient-to-r from-sky-900 to-blue-700 shadow-lg sticky text-white text-sm px-4 py-3 md:px-20">
  <div class="max-w-7xl mx-auto pl-4 md:pl-20">
    <a href="/" class="hover:underline text-blue-600">Home</a> › 
    <a href="/landingpage/additional" class="hover:underline text-blue-600">Additional Immigration Services</a> ›
    <span>Indonesian Passport</span>
  </div>
</div>

<div class="bg-cover py-12 overflow-hidden" style="background-image: url('{{ asset('images/patternocean.svg') }}')">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">

    <!-- Section: Indonesian Passport -->
    <div class="bg-white rounded-xl shadow-lg p-6 max-w-3xl mx-auto my-10">
      <h2 class="text-2xl font-bold text-[#1e293b] mb-2">Indonesian Passport</h2>

      <div class="mb-4">
        <h3 class="font-semibold">Price</h3>
        <p class="text-sm font-semibold text-gray-800">E-passport (with biometric data chip)</p>
        <ul class="list-disc pl-6 text-sm text-gray-700 mb-3 space-y-1">
          <li><strong>IDR 1.900.000</strong> – Regular</li>
          <li><strong>IDR 2.500.000</strong> – Priority (count the day of biometrics)</li>
        </ul>
        <p class="text-sm font-semibold text-gray-800">Non E-passport</p>
        <ul class="list-disc pl-6 text-sm text-gray-700 space-y-1">
          <li><strong>IDR 1.200.000</strong> – Regular</li>
        </ul>
      </div>

      <div class="mb-4">
        <h3 class="font-semibold">Processing Time</h3>
        <p class="text-sm text-gray-700">
          Biometric intake takes up to 10 business days. <br>
          Priority price includes 1 business day.
        </p>
      </div>

      <div class="mb-4">
        <h3 class="font-semibold">Document Requirements (For Adult Passport)</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700 space-y-1">
          <li>Akte Lahir (Birth Certificate), other Indonesian ID Cards or last Educational Certificates.</li>
          <li>Kartu Keluarga (Original Family Card).</li>
          <li>KTP (Indonesian ID Card).</li>
          <li>Domicile Letter (if not listed in ID). If address in ID card is not located in Bali, a domicile letter cannot be provided, there may be additional requirements.</li>
        </ul>
      </div>

      <div class="mb-4">
        <h3 class="font-semibold">Document Requirements (For Child Passport)</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700 space-y-1">
          <li>KTP (or main Indonesian ID card) of both parents.</li>
          <li>Kartu Keluarga (Original Family Card).</li>
          <li>Akte Lahir (Child’s Birth Certificate).</li>
          <li>Indonesian Parents and Child's (Parent Marriage Certificate / Divorce Certificate).</li>
          <li>Copy of parent’s passport (if any).</li>
          <li>Supporting Document:</li>
          <ul class="list-disc pl-10 text-sm text-gray-700 space-y-1">
            <li>Trainees: Surat Keterangan Kerja/Letter of Employment/ Kartu Mahasiswa (Student Card).</li>
            <li>Employment: Surat Rekomendasi dari Dinas Ketenagakerjaan (Recommendation letter from Manpower Department).</li>
          </ul>
        </ul>
      </div>

      <!-- Buttons -->
      <div class="flex gap-3 mt-6">
        <a x-data
          :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the Indonesian Passport.\nCould you please assist me with the application process? Thank you!`)"
          target="_blank"
          class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
          Apply Now
        </a>
      </div>
    </div>

    <!-- Notes Section -->
    <div class="max-w-3xl mx-auto text-sm text-gray-600 mb-10 px-6">
      <h4 class="font-semibold mb-2">NOTE:</h4>
      <ul class="list-disc pl-6 space-y-1">
        <li>Please be aware that international bank transfers can take up to 5 business days to clear in Bali.</li>
        <li>Business days do not include public holidays or weekends.</li>
        <li>Processing of your application will commence only after the funds have successfully cleared into our account.</li>
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
