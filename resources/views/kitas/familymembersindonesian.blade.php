<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - Family Members of Indonesian Citizens</title>
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
    <span class="underline decoration-yellow-500 underline-offset-4">Family Members of Indonesian Citizens</span>
  </h2>
</div>
</section>

<div class="bg-[#021d3a] text-white text-sm px-4 py-3 md:px-20">
  <div class="max-w-7xl mx-auto pl-4 md:pl-20">
    <a href="/" class="hover:underline text-left text-blue-600">Home</a> ›
    <a href="/landingpage/kitas" class="hover:underline text-left text-blue-600">KITAS</a> ›  
    <span>Family Members of Indonesian Citizens</span>
  </div>
</div>

<div class="bg-[url('{{ asset('images/patternocean.png') }}')] bg-cover py-16 overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

      <!-- E31A - Spouse of Indonesian Citizen -->
        <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
        <img src="/images/spousalindonesian-kitas.png" alt="Spouse of Indonesian Citizen" class="rounded-xl mb-4 w-full h-40 object-cover">
        <div class="flex items-center gap-3 mb-3">
            <h3 class="text-xl font-semibold text-gray-800">E31A - Spouse of Indonesian Citizen</h3>
        </div>
        <p class="text-sm text-gray-600 mb-2">This Kitas is for husband or wife of an Indonesian citizen.</p>
        <button type="button" class="text-left text-blue-600 text-sm mb-4 focus:outline-none focus:underline" onclick="this.nextElementSibling.classList.toggle('hidden')">
            ➖ Prices
        </button>
        <div class="hidden text-sm text-gray-700 mb-4">
            <p class="font-semibold mb-1">Applying from OUTSIDE Indonesia</p>
            <p class="ml-2 mb-1 font-medium">1 year</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 13,500,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 15,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">2 years</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 16,500,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 18,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>

            <p class="font-semibold mb-1">Applying from WITHIN Indonesia</p>
            <p class="ml-2 mb-1 font-medium">6 months</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 13,500,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 16,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">1 year</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 16,000,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 19,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">2 years</p>
            <ul class="list-disc ml-6">
            <li><strong>IDR 20,000,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 23,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
        </div>
        <div class="mt-auto flex gap-3">
            <a href="/landingpage/kitas/familymembersindonesian/E31A" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
        </div>

        <!-- E31C - Child of Indonesian Citizen -->
    <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
    <img src="/images/childindonesian-kitas.jpg" alt="Child of Indonesian Citizen" class="rounded-xl mb-4 w-full h-40 object-cover">
    <div class="flex items-center gap-3 mb-3">
        <h3 class="text-xl font-semibold text-gray-800">E31C - Child of Indonesian Citizen</h3>
    </div>
    <p class="text-sm text-gray-600 mb-2">This KITAS is for a child of married parents, where one parent is an Indonesian citizen.</p>
    <button type="button" class="text-left text-blue-600 text-sm mb-4 focus:outline-none focus:underline" onclick="this.nextElementSibling.classList.toggle('hidden')">
        ➖ Prices
    </button>
    <div class="hidden text-sm text-gray-700 mb-4">
        <p class="font-semibold mb-1">Applying from OUTSIDE Indonesia</p>
        <p class="ml-2 mb-1 font-medium">1 year</p>
        <ul class="list-disc ml-6 mb-3">
        <li><strong>IDR 13,500,000</strong> - Regular 14 business days.</li>
        <li><strong>IDR 15,000,000</strong> - Priority 7 business days.</li>
        </ul>
        <p class="ml-2 mb-1 font-medium">2 years</p>
        <ul class="list-disc ml-6 mb-3">
        <li><strong>IDR 16,500,000</strong> - Regular 14 business days.</li>
        <li><strong>IDR 18,000,000</strong> - Priority 7 business days.</li>
        </ul>

        <p class="font-semibold mb-1">Applying from WITHIN Indonesia</p>
        <p class="ml-2 mb-1 font-medium">6 months</p>
        <ul class="list-disc ml-6 mb-3">
        <li><strong>IDR 13,500,000</strong> - Regular 14 business days.</li>
        <li><strong>IDR 16,000,000</strong> - Priority 7 business days.</li>
        </ul>
        <p class="ml-2 mb-1 font-medium">1 year</p>
        <ul class="list-disc ml-6 mb-3">
        <li><strong>IDR 16,000,000</strong> - Regular 14 business days.</li>
        <li><strong>IDR 19,000,000</strong> - Priority 7 business days.</li>
        </ul>
        <p class="ml-2 mb-1 font-medium">2 years</p>
        <ul class="list-disc ml-6">
        <li><strong>IDR 20,000,000</strong> - Regular 14 business days.</li>
        <li><strong>IDR 23,000,000</strong> - Priority 7 business days.</li>
        </ul>
    </div>
    <div class="mt-auto flex gap-3">
        <a href="/landingpage/kitas/familymembersindonesian/E31C" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
    </div>
    </div>

    <!-- E31D - Stepchild of Indonesian Citizen -->
        <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
        <img src="/images/stepchildindonesian-kitas.jpg" alt="Stepchild of Indonesian Citizen" class="rounded-xl mb-4 w-full h-40 object-cover">
        <div class="flex items-center gap-3 mb-3">
            <h3 class="text-xl font-semibold text-gray-800">E31D - Stepchild of Indonesian Citizen</h3>
        </div>
        <p class="text-sm text-gray-600 mb-2">This KITAS is for a Stepchild of married parents, where one parent is an Indonesian citizen.</p>
        <button type="button" class="text-left text-blue-600 text-sm mb-4 focus:outline-none focus:underline" onclick="this.nextElementSibling.classList.toggle('hidden')">
            ➖ Prices
        </button>
        <div class="hidden text-sm text-gray-700 mb-4">
            <p class="font-semibold mb-1">Applying from OUTSIDE Indonesia</p>
            <p class="ml-2 mb-1 font-medium">1 year</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 13,500,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 15,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">2 years</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 16,500,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 18,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>

            <p class="font-semibold mb-1">Applying from WITHIN Indonesia</p>
            <p class="ml-2 mb-1 font-medium">6 months</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 13,500,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 16,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">1 year</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 16,000,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 19,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">2 years</p>
            <ul class="list-disc ml-6">
            <li><strong>IDR 20,000,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 23,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
        </div>
        <div class="mt-auto flex gap-3">
            <a href="/landingpage/kitas/familymembersindonesian/E31D" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
        </div>

        <!-- E31F - An adopted child of Indonesian Citizen -->
        <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
        <img src="/images/adoptedchildindonesian-kitas.jpg" alt="An adopted child of Indonesian Citizen" class="rounded-xl mb-4 w-full h-40 object-cover">
        <div class="flex items-center gap-3 mb-3">
            <h3 class="text-xl font-semibold text-gray-800">E31F - An adopted child of Indonesian Citizen</h3>
        </div>
        <p class="text-sm text-gray-600 mb-2">This Kitas, is for a lawfully adopted child of an Indonesian Citizen.</p>
        <button type="button" class="text-left text-blue-600 text-sm mb-4 focus:outline-none focus:underline" onclick="this.nextElementSibling.classList.toggle('hidden')">
            ➖ Prices
        </button>
        <div class="hidden text-sm text-gray-700 mb-4">
            <p class="font-semibold mb-1">Applying from OUTSIDE Indonesia</p>
            <p class="ml-2 mb-1 font-medium">1 year</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 13,500,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 15,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">2 years</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 16,500,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 18,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>

            <p class="font-semibold mb-1">Applying from WITHIN Indonesia</p>
            <p class="ml-2 mb-1 font-medium">6 months</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 13,500,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 16,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">1 year</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 16,000,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 19,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">2 years</p>
            <ul class="list-disc ml-6">
            <li><strong>IDR 20,000,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 23,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
        </div>
        <div class="mt-auto flex gap-3">
            <a href="/landingpage/kitas/familymembersindonesian/E31F" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
        </div>

         <!-- E31G - Parent of Indonesian Citizen -->
        <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
        <img src="/images/parentndonesian-kitas.jpg" alt="Parent of Indonesian Citizen" class="rounded-xl mb-4 w-full h-40 object-cover">
        <div class="flex items-center gap-3 mb-3">
            <h3 class="text-xl font-semibold text-gray-800">E31G - Parent of Indonesian Citizen</h3>
        </div>
        <p class="text-sm text-gray-600 mb-2">This Kitas is for the parent of an Indonesian Citizen who is 21 years of age or older.</p>
        <button type="button" class="text-left text-blue-600 text-sm mb-4 focus:outline-none focus:underline" onclick="this.nextElementSibling.classList.toggle('hidden')">
            ➖ Prices
        </button>
        <div class="hidden text-sm text-gray-700 mb-4">
            <p class="font-semibold mb-1">Applying from OUTSIDE Indonesia</p>
            <p class="ml-2 mb-1 font-medium">1 year</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 13,500,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 15,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">2 years</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 16,500,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 18,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>

            <p class="font-semibold mb-1">Applying from WITHIN Indonesia</p>
            <p class="ml-2 mb-1 font-medium">6 months</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 13,500,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 16,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">1 year</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 16,000,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 19,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">2 years</p>
            <ul class="list-disc ml-6">
            <li><strong>IDR 20,000,000</strong> - Regular <strong>14 business days</strong>.</li>
            <li><strong>IDR 23,000,000</strong> - Priority <strong>7 business days</strong>.</li>
            </ul>
        </div>
        <div class="mt-auto flex gap-3">
            <a href="/landingpage/kitas/familymembersindonesian/E31G" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
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
