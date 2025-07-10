<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - Single Entry Visitor Visa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs" defer></script>
  <link rel="icon" type="image/png" href="{{ asset('icons/favicon.png') }}">
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
    <span class="underline decoration-yellow-500 underline-offset-4">Single Entry</span>
  </h2>
</div>
</section>

<div class="bg-[#021d3a] text-white text-sm px-4 py-3 md:px-20">
  <div class="max-w-7xl mx-auto pl-4 md:pl-20">
    <a href="/" class="hover:underline text-blue-600">Home</a> › 
    <a href="/landingpage/visitorvisa" class="hover:underline text-blue-600">Visitor Visa</a> › 
    <span>Single Entry</span>
  </div>
</div>

<div class="bg-cover py-12 overflow-hidden" style="background-image: url('{{ asset('images/patternocean1.png') }}')">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Card 1 -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C1 - Tourist Visa</h3>
        <p class="text-sm text-gray-600 mb-4">Perfect for extended holidays and tourism visits to Indonesia.</p>
        <p class="text-sm"><strong>IDR 1,750,000</strong> - Regular (14 days)</p>
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
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C2 - Business Visa</h3>
        <p class="text-sm text-gray-600 mb-4">For unpaid business activities in Indonesia.</p>
        <p class="text-sm"><strong>IDR 3,000,000</strong> - Regular</p>
        <p class="text-sm mb-4"><strong>IDR 4,750,000</strong> - Priority</p>
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
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C6 - Social & Volunteer</h3>
        <p class="text-sm text-gray-600 mb-4">For volunteer, humanitarian, or social work visits.</p>
        <p class="text-sm"><strong>IDR 3,000,000</strong> - Regular</p>
        <p class="text-sm mb-4"><strong>IDR 4,750,000</strong> - Priority</p>
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
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C7A - Music Performer</h3>
        <p class="text-sm text-gray-600 mb-4">Designed for musicians and short-term performers at events in Indonesia.</p>
        <p class="text-sm mb-4"><strong>IDR 4,000,000</strong> - Priority only</p>
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
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C7C - General Art Performer</h3>
        <p class="text-sm text-gray-600 mb-4">For chefs, yoga instructors, bartenders, photographers, etc., to legally participate in events in Indonesia.</p>
        <p class="text-sm mb-4"><strong>IDR 4,000,000</strong> - Priority (5 days)</p>
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
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C9 - Short Course</h3>
        <p class="text-sm text-gray-600 mb-4">For benchmarking, short courses, or training programs in Indonesia.</p>
        <p class="text-sm"><strong>IDR 3,000,000</strong> - Regular (14 days)</p>
        <p class="text-sm mb-4"><strong>IDR 4,750,000</strong> - Priority (5 days)</p>
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
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C10 - Event Participant</h3>
        <p class="text-sm text-gray-600 mb-4">For attending conventions, seminars, and events as speaker or guest.</p>
        <p class="text-sm"><strong>IDR 3,000,000</strong> - Regular (14 days)</p>
        <p class="text-sm mb-4"><strong>IDR 4,750,000</strong> - Priority (5 days)</p>
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
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C12 - Pre-Investment</h3>
        <p class="text-sm text-gray-600 mb-4">For business feasibility visits, site inspections, and surveys. Stay up to 180 days.</p>
        <p class="text-sm"><strong>IDR 6,000,000</strong> - Regular (14 days)</p>
        <p class="text-sm mb-4"><strong>IDR 7,500,000</strong> - Priority (5 days)</p>
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
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C18 - Work Trial</h3>
        <p class="text-sm text-gray-600 mb-4">For trial work at Indonesian companies, unpaid. For employer-employee evaluation.</p>
        <p class="text-sm"><strong>IDR 5,500,000</strong> - Regular (14 days)</p>
        <p class="text-sm mb-4"><strong>IDR 7,000,000</strong> - Priority (5 days)</p>
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
    <div>
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">C22B - Internship</h3>
        <p class="text-sm text-gray-600 mb-4">For internships in Indonesian companies to gain experience. Stay up to 180 days, extendable.</p>
        <p class="text-sm"><strong>IDR 6,000,000</strong> - Regular (14 days)</p>
        <p class="text-sm mb-4"><strong>IDR 7,500,000</strong> - Priority (5 days)</p>
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
