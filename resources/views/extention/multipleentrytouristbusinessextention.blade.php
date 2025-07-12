<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - Multiple Entry Tourist and Buisness Extension  </title>
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
    <span class="underline decoration-yellow-500 underline-offset-4">Multiple Entry Tourist and Buisness Extension</span>
  </h2>
</div>
</section>

<div class="bg-[#021d3a] text-white text-sm px-4 py-3 md:px-20">
  <div class="max-w-7xl mx-auto pl-4 md:pl-20">
    <a href="/" class="hover:underline text-blue-600">Home</a> › 
    <a href="/landingpage/extention" class="hover:underline text-blue-600">Extention</a> ›
    <span>Multiple Entry Tourist and Buisness Extension</span>
  </div>
</div>

<div class="bg-cover py-12 overflow-hidden" style="background-image: url('{{ asset('images/patternocean1.png') }}')">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">

    <!-- Section: Multiple‑Entry Tourist & Business Visa Extension -->
    <div class="bg-white rounded-xl shadow-lg p-6 max-w-3xl mx-auto my-10">
      <h2 class="text-2xl font-bold text-[#1e293b] mb-4">Multiple Entry Tourist and Business Visa Extension</h2>

      <p class="text-sm text-gray-700 mb-4">
        This visa extension allows <strong>Tourist and Business Visa holders</strong> to stay in Indonesia for more than 60&nbsp;days.
        You can extend the visa <strong>twice</strong>, each time for 60&nbsp;days, reaching up to 180&nbsp;days in total.
        To avoid complications and potential overstay, apply for the extension at least <strong>14 days</strong> before your visa expires.
      </p>

      <!-- Price -->
      <div class="mb-4">
        <h3 class="font-semibold">Price</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li><strong>IDR 1,400,000</strong> – Regular <strong>5 business&nbsp;days</strong> processing time.</li>
          <li><strong>IDR 2,000,000</strong> – Priority <strong>3 business&nbsp;days</strong> processing time.</li>
        </ul>
      </div>

      <!-- Length of Extension -->
      <div class="mb-4">
        <h3 class="font-semibold">Length of Extension</h3>
        <p class="text-sm text-gray-700"><strong>60 days</strong> (extendable ×2, <strong>120 days MAX</strong>)</p>
      </div>

      <!-- Requirements -->
      <div class="mb-4">
        <h3 class="font-semibold">Requirements</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Apply at least <strong>14 days</strong> before your visa expiry date.</li>
          <li>Clear picture of your passport ID page (physical passport required for non E‑visa).</li>
          <li>Copy of flight arrival ticket.</li>
          <li>Recent colour photograph.</li>
          <li>Your ITK (e‑Stay Permit).</li>
        </ul>
      </div>

      <!-- Processing Stages -->
      <div class="mb-4">
        <h3 class="font-semibold">Processing Stages</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Submit the required documents online or visit one of our four offices in Bali.</li>
          <li>Make payment to Bali Visas via the payment link or at our offices.</li>
          <li>We’ll notify you within 5–7 days (regular) or 2–3 days (priority) to visit immigration for biometrics.</li>
          <li>Visit the immigration office for photo & fingerprints.</li>
          <li>We’ll inform you once the extension is completed after biometrics.</li>
        </ul>
      </div>

      <!-- CTA -->
      <div class="flex gap-2 mt-4">
        <a x-data
           :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the Multiple Entry Tourist & Business Visa Extension.\nCould you please assist me with the application process? Thank you!`)"
           target="_blank"
           class="px-4 py-2 bg-blue-700 text-white text-sm rounded hover:bg-blue-800 transition">
           Apply Now
        </a>
      </div>
    </div>

    <!-- FAQ Section -->
    <div x-data="{ selected: null }" class="max-w-3xl mx-auto mb-10 px-6">
      <h3 class="text-xl font-semibold mb-4">Frequently Asked Questions</h3>

      <div class="space-y-4">
        <!-- FAQ 1 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <button @click="selected !== 1 ? selected = 1 : selected = null"
                  class="w-full text-left px-4 py-3 font-semibold text-black-600 hover:bg-gray-50">
            Q: Can I travel outside of Bali without a passport?
          </button>
          <div x-show="selected === 1" x-collapse class="px-4 pb-4 text-sm text-gray-700">
            A: Yes, you can travel anywhere in Indonesia without a passport if you have a clear picture of your passport and visa stamps with arrival dates. We can also provide you with a sponsorship letter stating that your passport is with immigration upon request.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <button @click="selected !== 2 ? selected = 2 : selected = null"
                  class="w-full text-left px-4 py-3 font-semibold text-black-600 hover:bg-gray-50">
            Q: What if my visa expires whilst the passport and visa is in immigration?
          </button>
          <div x-show="selected === 2" x-collapse class="px-4 pb-4 text-sm text-gray-700">
            A: As long as your visa has not expired before it is submitted to immigration, you will not be charged any overstay fee.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <button @click="selected !== 3 ? selected = 3 : selected = null"
                  class="w-full text-left px-4 py-3 font-semibold text-black-600 hover:bg-gray-50">
            Q: Will I get my passport back the same day as I do the biometrics?
          </button>
          <div x-show="selected === 3" x-collapse class="px-4 pb-4 text-sm text-gray-700">
            A: No, the process will continue. We will collect your passport and return it to you once it is completed.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <button @click="selected !== 4 ? selected = 4 : selected = null"
                  class="w-full text-left px-4 py-3 font-semibold text-black-600 hover:bg-gray-50">
            Q: What is an overstay, and how much does it cost?
          </button>
          <div x-show="selected === 4" x-collapse class="px-4 pb-4 text-sm text-gray-700">
            A: An overstay is when you stay for any length of time over your visa expiry date. Immigration or customs will charge you 1,000,000 IDR for every day you stay longer than your visa allows.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="bg-white border border-gray-200 rounded-lg shadow-sm">
          <button @click="selected !== 5 ? selected = 5 : selected = null"
                  class="w-full text-left px-4 py-3 font-semibold text-black-600 hover:bg-gray-50">
            Q: Is my passport safe?
          </button>
          <div x-show="selected === 5" x-collapse class="px-4 pb-4 text-sm text-gray-700">
            A: Absolutely, your passport is safely with immigration during processing.
          </div>
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
