<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - About Us</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs" defer></script>
  <link rel="icon" type="image/png" href="{{ asset('icons/favicon.png') }}">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>

<body class="bg-gray-50 text-gray-800">
  <header class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50" x-data="{ navOpen: false, serviceOpen: false, mobileServiceOpen: false }">
  <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
    <!-- Logo -->
    <div class="flex items-center gap-3">
      <img src="{{ asset('icons/logo.png') }}" alt="Evisas Logo" class="w-10 h-10">
      <span class="text-2xl font-bold text-orange-900">EVISAS</span>
    </div>

    <!-- Navigation & Mobile Toggle -->
    <div class="flex items-center gap-6">
      <!-- Desktop Navigation -->
      <nav class="hidden md:flex space-x-6 text-sm font-medium relative">
        <a href="/CompanyProfile" class="text-gray-700 hover:text-orange-600">About Us</a>

        <!-- Dropdown -->
        <div @mouseenter="serviceOpen = true" @mouseleave="serviceOpen = false" class="relative">
          <button class="text-gray-700 hover:text-orange-600 flex items-center gap-1">
            Our Services
            <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
          <div x-show="serviceOpen" x-transition @click.away="serviceOpen = false"
            class="absolute left-0 mt-2 w-40 bg-white rounded shadow-md z-50">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visa & Kitas Extention</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">KITAS</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">KITAP</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visitor Visa</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Additional Immigrations Services</a>
          </div>
        </div>

        <a href="#" class="text-gray-700 hover:text-orange-600">Why Evisas</a>
      </nav>

      <!-- Mobile Toggle Button -->
      <div class="md:hidden relative">
        <button @click="navOpen = !navOpen" class="text-gray-700 focus:outline-none">
          <svg x-show="!navOpen" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
          <svg x-show="navOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>

        <!-- Mobile Navigation Dropdown -->
        <div x-show="navOpen" x-cloak x-transition
          class="absolute right-0 mt-2 bg-white shadow-md rounded-md px-4 py-2 text-sm font-medium space-y-2 z-40 w-48">
          <a href="/CompanyProfile" class="block text-gray-700 hover:text-orange-600">About Us</a>

          <!-- Mobile Dropdown -->
          <div>
            <button @click="mobileServiceOpen = !mobileServiceOpen" class="flex items-center justify-between w-full text-gray-700 hover:text-orange-600">
              Our Services
              <svg class="w-4 h-4 transform transition-transform" :class="{ 'rotate-180': mobileServiceOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
            <div x-show="mobileServiceOpen" x-transition class="mt-2 space-y-1 pl-4">
              <a href="#" class="block text-gray-700 hover:text-orange-600">Visa & Kitas Extention</a>
              <a href="#" class="block text-gray-700 hover:text-orange-600">KITAS</a>
              <a href="#" class="block text-gray-700 hover:text-orange-600">KITAP</a>
              <a href="#" class="block text-gray-700 hover:text-orange-600">Visitor Visa</a>
              <a href="#" class="block text-gray-700 hover:text-orange-600">Additional Immigrations Services</a>
            </div>
          </div>

          <a href="#" class="block text-gray-700 hover:text-orange-600">Why Evisas</a>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="bg-gray-100 py-4 px-6 text-sm text-orange-600">
    <div class="max-w-7xl mx-auto">
      <a href="{{ url('/') }}" class="hover:underline text-orange-700">Home</a> › About Us
    </div>
  </div>

  <!-- About Section -->
  <section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
      <!-- Image -->
      <img src="{{ asset('images/office-evisas.jpg') }}" alt="Evisas Office" class="rounded-lg shadow-md">

      <!-- Text -->
      <div>
        <h2 class="text-4xl font-bold text-gray-800 mb-6">About Us</h2>
        <p class="text-gray-700 mb-4 leading-relaxed">
          At Evisas, we turn your dreams of experiencing and living in Indonesia into reality.
          With over 5 years of expertise, we are one of Indonesia’s leading visa agencies, known for our professionalism and dedication.
        </p>
        <p class="text-gray-700 mb-4 leading-relaxed">
          Our team of skilled specialists manages your entire visa application from start to finish.
          We work directly with Immigration to ensure you receive the fastest and most cost-effective service.
        </p>
        <p class="text-gray-700 leading-relaxed">
          Whether you're a tourist exploring Indonesia’s beauty or an expat making it your home,
          we provide comprehensive support for a smooth and hassle-free process. Let us handle the complexities, so you can enjoy life to the fullest.
        </p>
      </div>
    </div>
  </section>

  <!-- Mission Section -->
  <section class="bg-gray-100 py-20 text-center">
    <div class="max-w-4xl mx-auto px-6">
      <h2 class="text-4xl font-bold text-gray-800 mb-4 relative inline-block">
        <span class="relative z-10">Our Mission</span>
        <span class="absolute bottom-0 left-0 w-full h-1 bg-orange-400 rounded z-0"></span>
      </h2>
      <p class="text-xl italic text-teal-700 mb-6">
        To provide seamless visa solutions that open the doors for all to experience Indonesia.
      </p>
      <p class="text-gray-700 mb-12">
        Our commitment is to ensure your experience and the information you receive is:
      </p>

      <!-- Values -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-gray-800">
        <div>
          <div class="text-4xl mb-2">🎯</div>
          <p class="font-semibold text-lg">Accurate</p>
          <div class="h-1 w-10 mx-auto bg-orange-400 mt-1 rounded"></div>
        </div>
        <div>
          <div class="text-4xl mb-2">🌟</div>
          <p class="font-semibold text-lg">Clear</p>
          <div class="h-1 w-10 mx-auto bg-orange-400 mt-1 rounded"></div>
        </div>
        <div>
          <div class="text-4xl mb-2">📄</div>
          <p class="font-semibold text-lg">Professional</p>
          <div class="h-1 w-10 mx-auto bg-orange-400 mt-1 rounded"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Floating WhatsApp -->
  <a href="https://wa.me/628113858165" class="fixed bottom-4 right-4 bg-green-500 hover:bg-green-600 p-3 rounded-full shadow-lg z-50">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" class="w-6" alt="WhatsApp">
  </a>

  <footer class="bg-orange-900 text-white py-10">
  <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-6">
    <div>
      <img src="{{ asset('icons/logo.png') }}" alt="Logo Evisas" class="w-16 mb-4">
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
