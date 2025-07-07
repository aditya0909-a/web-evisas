<!-- Hanya cuplikan awal, jika kamu ingin full HTML tinggal lanjutkan atau saya kirimkan seluruh file -->
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - Solusi Visa Anda</title>
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
  <!-- Header -->
<header class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50" x-data="{ navOpen: false, serviceOpen: false, mobileServiceOpen: false }">
  <div class="max-w-6xl mx-auto flex justify-between items-center py-4 px-6">
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
            Business & Product
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
          <a href="#" class="block text-gray-700 hover:text-orange-600">About Us</a>

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


<!-- Hero Section -->
<section class="w-full h-screen bg-cover bg-center text-white" style="background-image: url('{{ asset('icons/Bali.webp') }}')">
  <div class="w-full h-full bg-black/50 flex items-center">
    <div class="max-w-7xl mx-auto py-40 px-6 text-center">
      <h1 class="text-3xl md:text-5xl font-bold mb-2 md:mb-6">WELCOME TO EVISAS</h1>
      <p class="text-2xl md:text-4xl text-orange-400 font-bold mb-2 md:mb-6">Indonesia Visa Center</p>
      <p class="text-base md:text-2xl text-white font-semibold mb-2 md:mb-6">
        Fast. Simple. Free. Start your visa process with a quick consultation
      </p>

      <div class="flex flex-wrap justify-center gap-4 text-sm mb-6">
        <div class="flex items-center gap-2">
          <img src="{{ asset('icons/Globe.png') }}" alt="Globe Icon" class="w-5 h-5">
          <span>10+ Country</span>
        </div>
        <span class="text-white/50 hidden sm:inline">|</span>
        <div class="flex items-center gap-2">
          <img src="{{ asset('icons/Checklist.svg') }}" alt="Checklist Icon" class="w-5 h-5">
          <span>99% Approval Rate</span>
        </div>
      </div>

      <!-- Form -->
      <div x-data="{ negara: '', tujuan: '', jenis: 'Turis' }"
        class="flex flex-col md:flex-row justify-center items-center gap-4">
        <!-- Negara -->
        <div class="flex flex-col text-left w-full md:w-auto">
          <label class="text-sm font-medium text-white mb-1">Citizen</label>
          <input x-model="negara" type="text" placeholder="e.g. Indonesia"
            class="px-4 py-2 w-full rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-500" />
        </div>

        <!-- Tujuan -->
        <div class="flex flex-col text-left w-full md:w-auto">
          <label class="text-sm font-medium text-white mb-1">Destination</label>
          <input x-model="tujuan" type="text" placeholder="e.g. Netherlands"
            class="px-4 py-2 w-full rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-500" />
        </div>

        <!-- Jenis Visa -->
        <div class="flex flex-col text-left w-full md:w-auto">
          <label class="text-sm font-medium text-white mb-1">Purpose</label>
          <select x-model="jenis"
            class="px-4 py-2 w-full rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-orange-500">
            <option>Tourism</option>
            <option>Business</option>
            <option>Education</option>
          </select>
        </div>

        <!-- Tombol Konsultasi -->
        <a :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hi\nI’m a ${negara} citizen. I plan to stay in ${tujuan} for ${jenis}.\nCould you please explain the visa requirements for this?`)"
          target="_blank"
          class="bg-orange-500 hover:bg-orange-700 text-white font-medium px-6 py-2 rounded-md mt-4 md:mt-6 md:self-end transition shadow-lg hover:shadow-xl">
          Consult Now
        </a>
      </div>
    </div>
  </div>
</section>


<!-- Include Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<!-- Slider Container -->
<div class="bg-cover py-12 px-4 sm:px-6 lg:px-16 overflow-hidden" style="background-image: url('{{ asset('images/batik.svg') }}')" x-data="{ current: 0, slides: [0, 1, 2, 3, 4] }">
  <div class="relative w-full bg-white max-w-5xl mx-auto overflow-hidden">

    <!-- Inner slider -->
    <div class="flex transition-transform duration-700 ease-in-out"
         :style="`transform: translateX(-${current * 100}%);`">

      <!-- Slide 1 -->
      <div class="min-w-full flex flex-col md:flex-row items-center gap-6 md:gap-10">
        <img src="{{ asset('images/visitor.svg') }}" alt="VisitorVisa" class="w-full md:max-w-md object-cover" />
        <div class="w-full md:w-1/2 px-4 sm:px-8 lg:px-16">
          <h3 class="text-sm text-orange-600 font-bold mb-2">VISA SERVICES</h3>
          <h2 class="text-3xl font-bold mb-4">Visitor Visa</h2>
          <p class="text-gray-600 mb-4">
            A Visitor Visa is granted to foreign nationals for short-term stays such as tourism, family visits, or business meetings.
          </p>
          <a href="/visitor-visa" class="inline-block mt-2 px-6 py-3 bg-orange-500 text-white rounded-full hover:bg-orange-700">LEARN MORE</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="min-w-full flex flex-col md:flex-row items-center gap-6 md:gap-10">
        <img src="{{ asset('images/KITAS.svg') }}" alt="KITAS" class="w-full md:max-w-md object-cover" />
        <div class="w-full md:w-1/2 px-4 sm:px-8 lg:px-16">
          <h3 class="text-sm text-orange-600 font-bold mb-2">VISA SERVICES</h3>
          <h2 class="text-3xl font-bold mb-4">KITAS</h2>
          <p class="text-gray-600 mb-4">
            KITAS is a Limited Stay Permit for foreigners who wish to work, retire, or invest in Indonesia.
          </p>
          <a href="/kitas" class="inline-block mt-2 px-6 py-3 bg-orange-500 text-white rounded-full hover:bg-orange-700">LEARN MORE</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="min-w-full flex flex-col md:flex-row items-center gap-6 md:gap-10">
        <img src="{{ asset('images/KITAP.svg') }}" alt="KITAP" class="w-full md:max-w-md object-cover" />
        <div class="w-full md:w-1/2 px-4 sm:px-8 lg:px-16">
          <h3 class="text-sm text-orange-600 font-bold mb-2">VISA SERVICES</h3>
          <h2 class="text-3xl font-bold mb-4">KITAP</h2>
          <p class="text-gray-600 mb-4">
            KITAP is a Permanent Stay Permit for foreigners who have held a KITAS for several years.
          </p>
          <a href="/kitap" class="inline-block mt-2 px-6 py-3 bg-orange-500 text-white rounded-full hover:bg-orange-700">LEARN MORE</a>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="min-w-full flex flex-col md:flex-row items-center gap-6 md:gap-10">
        <img src="{{ asset('images/EXTENTION.svg') }}" alt="Visa Extension" class="w-full md:max-w-md object-cover" />
        <div class="w-full md:w-1/2 px-4 sm:px-8 lg:px-16 ">
          <h3 class="text-sm text-orange-600 font-bold mb-2">VISA SERVICES</h3>
          <h2 class="text-3xl font-bold mb-4">Visa Extension</h2>
          <p class="text-gray-600 mb-4">
            Visa Extension allows foreigners to prolong their legal stay without leaving the country.
          </p>
          <a href="/visa-extension" class="inline-block mt-2 px-6 py-3 bg-orange-500 text-white rounded-full hover:bg-orange-700">LEARN MORE</a>
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="min-w-full flex flex-col md:flex-row items-center gap-6 md:gap-10">
        <img src="{{ asset('images/ADDITIONAL.svg') }}" alt="Additional Services" class="w-full md:max-w-md object-cover" />
        <div class="w-full md:w-1/2 pb-4 px-4 sm:px-8 lg:px-16">
          <h3 class="text-sm text-orange-600 font-bold mb-2">VISA SERVICES</h3>
          <h2 class="text-3xl font-bold mb-4">Additional Immigration Services</h2>
          <p class="text-gray-600 mb-4">
            We also provide translation, sponsorship, document processing, and immigration consulting services.
          </p>
          <a href="/additional-services" class="inline-block mt-2 px-6 py-3 bg-orange-500 text-white rounded-full hover:bg-orange-700">LEARN MORE</a>
        </div>
      </div>

    </div>

    <!-- Tombol Next -->
    <button @click="current = (current + 1) % slides.length"
            class="absolute right-4 bottom-4 bg-transparent border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white px-4 py-2 rounded-full shadow-lg transition-all duration-300">
      Next
    </button>
  </div>
</div>


<!-- Why Section -->
<section class="py-12 px-6 bg-orange-900 text-center">
  <h2 class="text-3xl md:text-4xl text-white font-bold mb-10">Our Quick, Safe, Easy Online Process</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto">
    
    <!-- Step 1 -->
    <div class="bg-white rounded-full border-2 border-orange-500 p-6 flex flex-col items-center justify-center text-center aspect-square shadow-md mx-auto max-w-sm w-full">
      <img src="{{ asset('icons/step1.svg') }}" alt="Online Registration" class="w-20 h-20 mb-2">
      <h3 class="text-orange-700 font-bold text-lg mb-1">Online Registration</h3>
      <span class="w-20 h-1 bg-yellow-400 rounded-full mb-2"></span>
      <p class="text-gray-700 text-sm">
        Register now with the online form so our team can quickly assist you.
      </p>
    </div>

    <!-- Step 2 -->
    <div class="bg-white rounded-full border-2 border-orange-500 p-6 flex flex-col items-center justify-center text-center aspect-square shadow-md mx-auto max-w-sm w-full">
      <img src="{{ asset('icons/step2.svg') }}" alt="Processed by Our Team" class="w-20 h-20 mb-2">
      <h3 class="text-orange-700 font-bold text-lg mb-1">Processed by Our Team</h3>
      <span class="w-20 h-1 bg-yellow-400 rounded-full mb-2"></span>
      <p class="text-gray-700 text-sm">
        After carefully reviewing your documents, we will submit your application to immigration.
      </p>
    </div>

    <!-- Step 3 -->
    <div class="bg-white rounded-full border-2 border-orange-500 p-6 flex flex-col items-center justify-center text-center aspect-square shadow-md mx-auto max-w-sm w-full">
      <img src="{{ asset('icons/step3.svg') }}" alt="Enjoy Your Destination" class="w-20 h-20 mb-2">
      <h3 class="text-orange-700 font-bold text-lg mb-1">Enjoy Your Destination</h3>
      <span class="w-20 h-1 bg-yellow-400 rounded-full mb-2"></span>
      <p class="text-gray-700 text-sm">
        Once it is approved, we will send the e-visa to your email. Done!
      </p>
    </div>

  </div>
</section>


<!-- Ulasan -->
<section class="py-12 px-6 bg-white text-center">
  <h2 class="text-3xl md:text-4xl font-bold mb-10">What They are Saying About Us</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 max-w-7xl mx-auto">

    <!-- Testimoni 1 -->
    <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
      <img src="{{ asset('images/testi1.jpg') }}" alt="Review Screenshot 1" class="w-full h-auto object-cover">
    </div>

    <!-- Testimoni 2 -->
    <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
      <img src="{{ asset('images/testi2.jpg') }}" alt="Review Screenshot 2" class="w-full h-auto object-cover">
    </div>

    <!-- Testimoni 3 -->
    <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
      <img src="{{ asset('images/testi3.jpg') }}" alt="Review Screenshot 3" class="w-full h-auto object-cover">
    </div>

    <!-- Testimoni 4 -->
    <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
      <img src="{{ asset('images/testi4.jpg') }}" alt="Review Screenshot 4" class="w-full h-auto object-cover">
    </div>

  </div>

  <p class="mt-8 text-sm text-gray-600">
    <strong>Google</strong> rating score: <strong>4.9</strong> of 5, based on <strong>138 reviews</strong>
  </p>
</section>


  <!-- Google Map -->
  <section class="my-8">
    <iframe class="w-full  h-96" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.3997806211897!2d115.1754665!3d-8.6860181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24753435341db%3A0xd82d582a7ccc2fe5!2sEVISAS%20Indonesia%20Visa%20Center!5e0!3m2!1sen!2sid!4v1720200000000!5m2!1sen!2sid"></iframe>
  </section>

  <footer class="bg-gray-800 text-white py-10">
  <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-6">
    
    <!-- Kolom Kiri: Logo & Sosial Media -->
    <div>
      <img src="{{ asset('icons/logo.png') }}" alt="Logo Evisas" class="w-16 mb-4">
      <p class="text-sm text-gray-300 mt-6">
        With a global network and deep understanding of immigration policies, we are committed to providing efficient and timely solutions.
      </p>
      <div class="flex space-x-4 mt-4">
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

    <!-- Kolom Kanan: Kontak & Alamat -->
    <div>
      <h4 class="text-xl font-semibold mb-2 text-orange-500">Evisas</h4>
      <p class="text-sm text-gray-300 mt-6">
        Gunung Athena street no.38, Lingkungan Banjar Padang Sumbu Klod, Padangsambian, Denpasar Barat, Bali 80117
      </p>
      <p class="text-sm mt-4 text-gray-300">
        WhatsApp: 
        <a href="https://wa.me/628113858165" class="text-orange-400 hover:underline">+62 811-3858-165</a>
      </p>
      <p class="text-sm mt-2 text-gray-300">
        Email: 
        <a href="mailto:cs.evisasbali@gmail.com" class="text-orange-400 hover:underline">cs.evisasbali@gmail.com</a>
      </p>
    </div>

  </div>

  <!-- Copyright -->
  <div class="text-center text-sm mt-10 border-t border-gray-700 pt-4 text-gray-400">
    &copy; {{ date('Y') }} Evisas Indonesia. All rights reserved.
  </div>
</footer>

<!-- Floating WhatsApp -->
<a href="https://wa.me/628113858165" class="fixed bottom-4 right-4 bg-green-500 hover:bg-green-600 p-3 rounded-full shadow-lg">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" class="w-6" alt="WhatsApp">
</a>

</body>
</html>
