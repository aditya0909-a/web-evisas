<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - Visa & Kitas Extention</title>
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
    <span class="underline decoration-yellow-500 underline-offset-4">Visa & Kitas Extention</span>
  </h2>
</div>
</section>

<div class="bg-[#021d3a] text-white text-sm px-4 py-3 md:px-20">
  <div class="max-w-7xl mx-auto pl-4 md:pl-20">
    <a href="/" class="hover:underline text-blue-600">Home</a> › 
    <span>Visa & Kitas Extention</span>
  </div>
</div>

<div class="bg-cover py-12 overflow-hidden" style="background-image: url('{{ asset('images/patternocean1.png') }}')">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- E-Visa VOA Extension -->
      <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
        <img src="/images/voa.png" alt="Voa extention" class="rounded-xl mb-4 w-full h-40 object-cover">
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">E - Visa VOA Extension</h3>
        <p class="text-sm text-gray-600 mb-2">A VOA extension permits an additional 30 days stay from visa expiration, after which another visa is required.</p>
        <ul class="list-disc pl-5 text-sm text-gray-700 mb-4">
          <li><strong>IDR 1,800,000</strong> – Regular 14 business days</li>
          <li><strong>IDR 2,000,000</strong> – Priority 7 business days</li>
        </ul>
        <div class="flex gap-2 mt-auto">
          <a href="/landingpage/extention/voaextention" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the VOA extenntion.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
        </div>
      </div>

      <!-- Single Entry Visa Extension -->
      <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
        <img src="/images/single-entry.png" alt="Pre Invesment" class="rounded-xl mb-4 w-full h-40 object-cover">
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">Single Entry Visa Extension</h3>
        <p class="text-sm text-gray-600 mb-2">Applies to Tourist, Business, Social, Humanitarian, or Journalistic visas. Max 2 extensions of 60 days each.</p>
        <ul class="list-disc pl-5 text-sm text-gray-700 mb-4">
          <li><strong>IDR 1,800,000</strong> – Regular 14 business days</li>
          <li><strong>IDR 2,000,000</strong> – Priority 7 business days</li>
        </ul>
        <div class="flex gap-2 mt-auto">
          <a href="/landingpage/extention/singleentryextention" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the Single Entry Visa Extension.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
        </div>
      </div>

      <!-- Multiple Entry Tourist & Business Visa Extension -->
      <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
        <img src="/images/remoteworker-kitas.jpg" alt="Pre Invesment" class="rounded-xl mb-4 w-full h-40 object-cover">
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">Multiple Entry Tourist & Business Visa Extension</h3>
        <p class="text-sm text-gray-600 mb-2">Allows additional 60-day stay for tourism or business purposes. Maximize your visit time.</p>
        <ul class="list-disc pl-5 text-sm text-gray-700 mb-4">
          <li><strong>IDR 1,800,000</strong> – Regular 14 business days</li>
          <li><strong>IDR 2,000,000</strong> – Priority 7 business days</li>
        </ul>
        <div class="flex gap-2 mt-auto">
          <a href="/landingpage/extention/multipleentrytouristbusinessextention" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the Multiple Entry Tourist & Business Visa Extension.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
        </div>
      </div>

      <!-- Investor KITAS Extension -->
      <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
        <img src="/images/investor-kitas.jpg" alt="Investor Kitas Extention" class="rounded-xl mb-4 w-full h-40 object-cover">
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">Investor KITAS Extension</h3>
        <p class="text-sm text-gray-600 mb-2">Applicable for multiple entry visa and is valid for either 1 or 2 years. Can be extended accordingly.</p>

        <p class="text-sm text-gray-700 mb-1">1 year:</p>
        <ul class="list-disc pl-5 text-sm text-gray-700 mb-2">
          <li><strong>IDR 12,000,000</strong> – Regular 14 business days</li>
          <li><strong>IDR 14,000,000</strong> – Priority 7 business days</li>
        </ul>

        <p class="text-sm text-gray-700 mb-1">2 years:</p>
        <ul class="list-disc pl-5 text-sm text-gray-700 mb-4">
          <li><strong>IDR 20,000,000</strong> – Regular 14 business days</li>
          <li><strong>IDR 22,000,000</strong> – Priority 7 business days</li>
        </ul>
        <div class="flex gap-2 mt-auto">
        <a href="/landingpage/extention/investorkitasextention" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the C - Single Entry Visa Extension.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
        </div>
      </div>

      <!-- Working KITAS Extension -->
      <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
        <img src="/images/working-kitas.jpg" alt="Working Kitas extention" class="rounded-xl mb-4 w-full h-40 object-cover">
        <h3 class="text-xl font-bold text-[#1e293b] mb-2">Working KITAS Extension</h3>
        <p class="text-sm text-gray-600 mb-2">A Working KITAS extension follows the initial KITAS validity period and can be renewed accordingly.</p>

        <p class="text-sm text-gray-700 mb-1">1 year:</p>
        <ul class="list-disc pl-5 text-sm text-gray-700 mb-4">
          <li><strong>IDR 12,000,000</strong> + <strong>USD 600</strong> govt fee for IMTA (Work Permit) – Regular</li>
          <li><strong>IDR 14,000,000</strong> + <strong>USD 600</strong> govt fee for IMTA (Work Permit) – Priority</li>
        </ul>
        <div class="flex gap-2 mt-auto">
          <a href="/landingpage/extention/workingkitasextention" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the working kitas extention.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
        </div>
      </div>

      <!-- Family of Indonesian Citizen Extension -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
    <img src="/images/familyindonesian-kitas.jpg" alt="Family of Indonesian Citizen" class="rounded-xl mb-4 w-full h-40 object-cover">
    <h3 class="text-xl font-bold text-[#1e293b] mb-2">Family of Indonesian Citizen Extension</h3>
    <p class="text-sm text-gray-600 mb-2">The Kitas for the Family of Indonesian citizens can be extended for one year.</p>
    <p class="text-sm text-gray-600 mb-2">To avoid complications and potential overstay, apply for your extension at least 30 days before your Kitas expires.</p>

    <p class="text-sm text-gray-700 mb-1"><strong>1 year:</strong></p>
    <ul class="list-disc pl-5 text-sm text-gray-700 mb-2">
        <li><strong>IDR 10,000,000</strong> – Regular 14 business days</li>
    </ul>

    <p class="text-sm text-gray-700 mb-1"><strong>2 years:</strong></p>
    <ul class="list-disc pl-5 text-sm text-gray-700 mb-4">
        <li><strong>IDR 18,000,000</strong> – Regular 14 business days</li>
    </ul>

    <div class="flex gap-2 mt-auto">
        <a href="/landingpage/extention/familyindonesianextention" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the Family of Indonesian Citizen Extension.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
    </div>
    </div>

    <!-- Family of KITAS Holder Extension -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
    <img src="/images/familyholder-kitas.jpg" alt="Family of KITAS Holder" class="rounded-xl mb-4 w-full h-40 object-cover">
    <h3 class="text-xl font-bold text-[#1e293b] mb-2">Family of KITAS holder Extension</h3>
    <p class="text-sm text-gray-600 mb-2">The Family of KITAS holder’s extension follows the sponsoring KITAS validity period.</p>
    <p class="text-sm text-gray-600 mb-2">To avoid complications and potential overstay, apply for your extension at least 30 days before your Kitas expires.</p>

    <p class="text-sm text-gray-700 mb-1"><strong>1 year:</strong></p>
    <ul class="list-disc pl-5 text-sm text-gray-700 mb-2">
        <li><strong>IDR 10,000,000</strong> – Regular 14 business days</li>
    </ul>

    <p class="text-sm text-gray-700 mb-1"><strong>2 years:</strong></p>
    <ul class="list-disc pl-5 text-sm text-gray-700 mb-4">
        <li><strong>IDR 19,000,000</strong> – Regular 14 business days</li>
    </ul>

    <div class="flex gap-2 mt-auto">
        <a href="/landingpage/extention/familykitasextention" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the Family of KITAS holder Extension.\nCould you please assist me with the application process? Thank you!`)"
        target="_blank"
        class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
        Apply
        </a>
    </div>
    </div>

    <!-- Retirement KITAS Extension -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 hover:shadow-lg transition flex flex-col justify-between">
    <img src="/images/retirement-kitas.jpg" alt="Retirement KITAS" class="rounded-xl mb-4 w-full h-40 object-cover">
    <h3 class="text-xl font-bold text-[#1e293b] mb-2">Retirement KITAS Extension</h3>
    <p class="text-sm text-gray-600 mb-2">A Retirement KITAS can be extended according to the initial KITAS validity period.</p>
    <p class="text-sm text-gray-600 mb-2">To avoid complications and potential overstay, apply for your extension at least 30 days before your Kitas expires.</p>

    <p class="text-sm text-gray-700 mb-1"><strong>1 year:</strong></p>
    <ul class="list-disc pl-5 text-sm text-gray-700 mb-2">
        <li><strong>IDR 10,000,000</strong> – Regular 14 business days</li>
    </ul>

    <p class="text-sm text-gray-700 mb-1"><strong>2 years:</strong></p>
    <ul class="list-disc pl-5 text-sm text-gray-700 mb-4">
        <li><strong>IDR 15,000,000</strong> – Regular 14 business days</li>
    </ul>

    <div class="flex gap-2 mt-auto">
        <a href="/landingpage/extention/retirementkitasextention" class="px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 transition">Learn More</a>
        <a x-data
        :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the Retirement KITAS Extension.\nCould you please assist me with the application process? Thank you!`)"
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
