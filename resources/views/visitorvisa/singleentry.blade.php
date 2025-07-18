<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - Single Entry Visitor Visa</title>
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
    <span class="underline decoration-yellow-500 underline-offset-4">Single Entry</span>
  </h2>
</div>
</section>

<div class="bg-gradient-to-r from-sky-900 to-blue-700 shadow-lg sticky text-white text-sm px-4 py-3 md:px-20">
  <div class="max-w-7xl mx-auto pl-4 md:pl-20">
    <a href="/" class="hover:underline text-blue-600">Home</a> › 
    <a href="/landingpage/visitorvisa" class="hover:underline text-blue-600">Visitor Visa</a> › 
    <span>Single Entry</span>
  </div>
</div>

<div class="bg-cover py-12 overflow-hidden" style="background-image: url('{{ asset('images/patternocean.svg') }}')">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Card 1 -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
    <img src="/images/tourist-singleentry.png" alt="tourist-singleentry" class="rounded-xl mb-4 w-full h-40 object-cover">
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C1 - Tourist Visa</h3>
        <p class="text-sm text-gray-600 mb-4">Perfect for extended holidays and tourism visits to Indonesia.</p>
        <p class="text-sm"><strong>IDR 2,500,000</strong> - Regular (14 days)</p>
        <p class="text-sm mb-4"><strong>IDR 3,500,000</strong> - Priority (5 days)</p>
    </div>
    <div class="flex gap-2 mt-2">
        <a href="/landingpage/visitorvisa/singleentry/C1" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the C1 - Tourist Visa.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
    </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
      <img src="/images/business-singleentry.png" alt="business-singleentry" class="rounded-xl mb-4 w-full h-40 object-cover">
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C2 - Business Visa</h3>
        <p class="text-sm text-gray-600 mb-4">For unpaid business activities in Indonesia.</p>
        <p class="text-sm"><strong>IDR 3,500,000</strong> - Regular (14 days)</p>
        <p class="text-sm mb-4"><strong>IDR 4,750,000</strong> - Priority (5 days)</p>
    </div>
    <div class="flex gap-2 mt-2">
        <a href="/landingpage/visitorvisa/singleentry/C2" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the C2 - Business Visa.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
    </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
      <img src="/images/socialvolunteer-singleentry.png" alt="socialvolunteer-singleentry" class="rounded-xl mb-4 w-full h-40 object-cover">
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C6 - Social & Volunteer</h3>
        <p class="text-sm text-gray-600 mb-4">For volunteer, humanitarian, or social work visits.</p>
        <p class="text-sm"><strong>IDR 3,200,000</strong> - Regular (14 days)</p>
        <p class="text-sm mb-4"><strong>IDR 4,750,000</strong> - Priority (5 days)</p>
    </div>
    <div class="flex gap-2 mt-2">
        <a href="/landingpage/visitorvisa/singleentry/C6" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the C6 - Social & Volunteer.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
    </div>
    </div>

    <!-- Card 4 -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
      <img src="/images/musicperformer-singleentry.png" alt="musicperformer-singleentry" class="rounded-xl mb-4 w-full h-40 object-cover">
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C7A - Music Performer</h3>
        <p class="text-sm text-gray-600 mb-4">Designed for musicians and short-term performers at events in Indonesia.</p>
        <p class="text-sm mb-4"><strong>IDR 2,650,000</strong> - Regular (14 days)</p>
    </div>
    <div class="flex gap-2 mt-2">
        <a href="/landingpage/visitorvisa/singleentry/C7A" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the C7A - Music Performer.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
    </div>
    </div>

    <!-- Card 5 -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
    <img src="/images/artperformer-singleentry.png" alt="artperformer-singleentry" class="rounded-xl mb-4 w-full h-40 object-cover">
      <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C7C - General Art Performer</h3>
        <p class="text-sm text-gray-600 mb-4">For chefs, yoga instructors, bartenders, photographers, etc., to legally participate in events in Indonesia.</p>
        <p class="text-sm mb-4"><strong>IDR 2,650,000</strong> - Regular (14 days)</p>
    </div>
    <div class="flex gap-2 mt-2">
        <a href="/landingpage/visitorvisa/singleentry/C7C" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the C7C - General Art Performer.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
    </div>
    </div>

    <!-- Card 6 -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
      <img src="/images/course-singleentry.png" alt="course-singleentry" class="rounded-xl mb-4 w-full h-40 object-cover">
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C9 - Short Course</h3>
        <p class="text-sm text-gray-600 mb-4">For benchmarking, short courses, or training programs in Indonesia.</p>
        <p class="text-sm"><strong>IDR 3,250,000</strong> - Regular (14 days)</p>
    </div>
    <div class="flex gap-2 mt-2">
        <a href="/landingpage/visitorvisa/singleentry/C9" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the C9 - Short Course.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
    </div>
    </div>

    <!-- Card 7 -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
      <img src="/images/speakers-singleentry.png" alt="speakers-singleentry" class="rounded-xl mb-4 w-full h-40 object-cover">
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C10 - Event Participant</h3>
        <p class="text-sm text-gray-600 mb-4">For attending conventions, seminars, and events as speaker or guest.</p>
        <p class="text-sm"><strong>IDR 3,200,000</strong> - Regular (14 days)</p>
    </div>
    <div class="flex gap-2 mt-2">
        <a href="/landingpage/visitorvisa/singleentry/C10" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the C10 - Event Participant.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
    </div>
    </div>

    <!-- Card 8 -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
      <img src="/images/investor-kitas.jpg" alt="invesment-singleentry" class="rounded-xl mb-4 w-full h-40 object-cover">
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C12 - Pre-Investment</h3>
        <p class="text-sm text-gray-600 mb-4">For business feasibility visits, site inspections, and surveys. Stay up to 180 days.</p>
        <p class="text-sm"><strong>IDR 6,000,000</strong> - Regular (14 days)</p>

    </div>
    <div class="flex gap-2 mt-2">
        <a href="/landingpage/visitorvisa/singleentry/C12" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the C12 - Pre-Investment.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
    </div>
    </div>

    <!-- Card 9 -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
      <img src="/images/trialwork-singleentry.png" alt="trialwork-singleentry" class="rounded-xl mb-4 w-full h-40 object-cover">
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C18 - Work Trial</h3>
        <p class="text-sm text-gray-600 mb-4">For trial work at Indonesian companies, unpaid. For employer-employee evaluation.</p>
        <p class="text-sm"><strong>IDR 4,250,000</strong> - Regular (14 days)</p>
    </div>
    <div class="flex gap-2 mt-2">
        <a href="/landingpage/visitorvisa/singleentry/C18" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the C18 - Work Trial.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
    </div>
    </div>

    <!-- Card 10 -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
      <img src="/images/internship-singleentry.png" alt="internship-singleentry" class="rounded-xl mb-4 w-full h-40 object-cover">
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C22B - Internship</h3>
        <p class="text-sm text-gray-600 mb-4">For internships in Indonesian companies to gain experience. Stay up to 180 days, extendable.</p>
        <p class="text-sm"><strong>IDR 6,000,000</strong> - Regular (14 days)</p>
    </div>
    <div class="flex gap-2 mt-2">
        <a href="/landingpage/visitorvisa/singleentry/C22B" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the >C22B - Internship.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
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
