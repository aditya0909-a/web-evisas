<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - E31B - Spousal of KITAS holder</title>
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
    <span class="underline decoration-yellow-500 underline-offset-4">E31B - Spousal of KITAS holder</span>
  </h2>
</div>
</section>

<div class="bg-[#021d3a] text-white text-sm px-4 py-3 md:px-20">
  <div class="max-w-7xl mx-auto pl-4 md:pl-20">
    <a href="/" class="hover:underline text-left text-blue-600">Home</a> ›
    <a href="/landingpage/kitas" class="hover:underline text-left text-blue-600">KITAS</a> ›
    <a href="/landingpage/kitas/familymemberskitas" class="hover:underline text-left text-blue-600">Family Members Kitas Holders</a> ›  
    <span>E31B - Spousal of KITAS holder</span>
  </div>
</div>

<div class="bg-cover py-12 overflow-hidden" style="background-image: url('{{ asset('images/patternocean1.png') }}')">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">

    <!-- Section: E31B - Spouse of KITAS holder -->
    <div class="bg-white rounded-xl shadow-lg p-6 max-w-3xl mx-auto my-10">
      <h2 class="text-2xl font-bold text-[#1e293b] mb-2">E31B - Spouse of KITAS holder</h2>
      <p class="text-sm text-gray-600 mb-4">
        This visa is for the spouse of a foreign national with any type of KITAS. It is valid for the same duration as the primary KITAS holder but does not allow the spouse to work.
      </p>

      <div class="mb-4">
        <h3 class="font-semibold">Price</h3>
        <p class="text-sm font-medium text-gray-700 underline">Applying from OUTSIDE Indonesia</p>

        <p><strong>1 year visa</strong></p>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>IDR 13,500,000 – Regular 14 business days processing time</li>
          <li>IDR 15,000,000 – Priority 7 business days processing time</li>
        </ul>

        <p><strong>2 years visa</strong></p>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>IDR 16,500,000 – Regular 14 business days processing time</li>
          <li>IDR 18,000,000 – Priority 7 business days processing time</li>
        </ul>

        <p class="text-sm font-medium text-gray-700 underline mt-3">Applying from WITHIN Indonesia</p>

        <p><strong>6 months visa</strong></p>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>IDR 15,500,000 – Regular 14 business days processing time</li>
          <li>IDR 16,000,000 – Priority 7 business days processing time</li>
        </ul>

        <p><strong>1 year visa</strong></p>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>IDR 16,500,000 – Regular 14 business days processing time</li>
          <li>IDR 19,000,000 – Priority 7 business days processing time</li>
        </ul>

        <p><strong>2 years visa</strong></p>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>IDR 20,000,000 – Regular 14 business days processing time</li>
          <li>IDR 23,000,000 – Priority 7 business days processing time</li>
        </ul>
      </div>

      <div class="mb-4">
        <h3 class="font-semibold">Length of Stay</h3>
        <p>6 months, 1 year, 2 years.</p>
      </div>

      <div class="mb-4">
        <h3 class="font-semibold">With this visa, you <span class="text-green-600">CAN</span>:</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Live in Indonesia.</li>
          <li>Travel to and from Indonesia as many times you want.</li>
        </ul>
      </div>

      <div class="mb-4">
        <h3 class="font-semibold">With this visa, you <span class="text-red-600">CANNOT</span>:</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Stay in Indonesia after your visa expires.</li>
          <li>Sell goods or services.</li>
          <li>Receive compensation, wages, or any similar form from individuals or companies in Indonesia.</li>
        </ul>
      </div>

      <div class="mb-4">
        <h3 class="font-semibold">Visa Validity</h3>
        <p>This visa must be used within 90 days from the date of issue.</p>
      </div>

      <div class="mb-4">
        <h3 class="font-semibold">Document Requirements</h3>
        <ul class="list-disc pl-6 text-sm text-gray-700">
          <li>Passport that is valid for at least 6 (six) months.</li>
          <li>A recent color photograph.</li>
          <li>Marriage certificate (translated into Indonesian by a sworn translator).</li>
          <li>A personal bank statement showing a minimum equivalent amount of USD $2000. The statement must cover the last 3 months and include your name, the date, and the account balance.</li>
          <li>Valid visa/Limited Stay Permit (KITAS)/Permanent Stay Permit (ITAP) of the legitimate husband or wife.</li>
        </ul>
      </div>

      <div class="flex gap-2 mt-4">
        <a x-data
          :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hello, I would like to apply for the E31B - Spousal of KITAS holder.\nCould you please assist me with the application process? Thank you!`)"
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
