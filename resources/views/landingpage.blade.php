<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - Indonesia Visa Center</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs" defer></script>
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>

<body class="bg-black-50 text-gray-800">
  <!-- Header -->
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


<!-- Hero Section -->
<img src="{{ asset('icons/Bali.jpg') }}" alt="Preload Background" class="hidden" loading="eager" fetchpriority="high">


<section class="relative w-full h-screen text-white overflow-hidden mt-[-64px]">
  <!-- Background Video -->
 <video 
    autoplay 
    muted 
    loop 
    playsinline 
    preload="auto"
    poster="/images/ocean-preview.jpg"
    class="absolute inset-0 w-full h-full object-cover z-0"
    onloadeddata="this.style.opacity='1';"
    style="opacity:-2; transition: opacity 0.2s ease-out;">
    <source src="/icons/ocean.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- Overlay (opsional) -->
  <div class="absolute inset-0 bg-black/50 z-10"></div>

  <!-- Content -->
  <div class="relative z-20 flex items-center justify-center h-full px-6 text-center">
    <div>
      <h1 class="text-3xl md:text-5xl font-bold mb-4">WELCOME TO EVISAS</h1>
      <p class="text-xl md:text-3xl text-blue-400 font-semibold mb-2">Indonesia Visa Center</p>
      <p class="text-base md:text-xl text-white italic mb-2 md:mb-6">
        Fast. Simple. Free. Start your visa process with a quick consultation
      </p>
      
        <!-- Form -->
        <div x-data="{ negara: '', tujuan: '', jenis: 'Turis' }"
          class="flex flex-col md:flex-row justify-center items-center gap-4 ">
          <!-- Negara -->
          <div class="flex flex-col text-left w-full md:w-auto">
            <label class="text-sm font-medium text-white mb-1">Citizen</label>
            <input x-model="negara" type="text" placeholder="e.g. Indonesia"
              class="px-4 py-2 w-full rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>

          <!-- Tujuan -->
          <div class="flex flex-col text-left w-full md:w-auto">
            <label class="text-sm font-medium text-white mb-1">Destination</label>
            <input x-model="tujuan" type="text" placeholder="e.g. Netherlands"
              class="px-4 py-2 w-full rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>

          <!-- Jenis Visa -->
          <div class="flex flex-col text-left w-full md:w-auto">
            <label class="text-sm font-medium text-white mb-1">Purpose</label>
            <select x-model="jenis"
              class="px-4 py-2 w-full rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
              <option>Tourism</option>
              <option>Business</option>
              <option>Education</option>
            </select>
          </div>

          <!-- Tombol Konsultasi -->
          <a :href="'https://wa.me/628113858165?text=' + encodeURIComponent(`Hi\nI’m a ${negara} citizen. I plan to stay in ${tujuan} for ${jenis}.\nCould you please explain the visa requirements for this?`)"
            target="_blank"
            class="bg-blue-500 hover:bg-blue-700 text-white font-medium px-6 py-2 rounded-md mt-4 md:mt-6 md:self-end transition shadow-lg hover:shadow-xl">
            Consult Now
          </a>

          <a href="https://wa.me/628113858165" class="fixed bottom-4 right-4 bg-green-500 hover:bg-green-600 p-3 rounded-full shadow-lg">
          <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" class="w-6" alt="WhatsApp">
        </a>
        </div>
    </div>
  </div>
</section>

<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<!-- Slider Container -->
<div class="bg-cover py-12 px-4 sm:px-6 lg:px-16 overflow-hidden" style="background-image: url('{{ asset('images/patternocean1.png') }}')" x-data="{ current: 0, slides: [0, 1, 2, 3, 4] }">
  <h2 class="text-4xl text-center md:text-5xl font-bold text-gray-900 mb-4">
    <span class="underline decoration-yellow-500 underline-offset-4">Ours Services</span>
  </h2>
  <p class="text-lg text-center md:text-xl italic text-blue-700 mb-12">
    Visa made easy, for every destination.
  </p>
 <div class="relative w-full bg-white max-w-5xl mx-auto overflow-hidden rounded-2xl shadow-2xl">

    <!-- Inner slider -->
    <div class="flex transition-transform duration-700 ease-in-out"
         :style="`transform: translateX(-${current * 100}%);`">

      <!-- Slide 1 -->
      <div class="min-w-full flex flex-col md:flex-row items-center gap-6 md:gap-10">
        <img src="{{ asset('images/visitor.svg') }}" alt="VisitorVisa" class="w-full md:max-w-md object-cover" />
        <div class="w-full md:w-1/2 px-4 sm:px-6 lg:px-8">
          <h3 class="text-sm pt-2 text-blue-600 font-bold mb-2">VISA SERVICES</h3>
          <h2 class="text-3xl font-bold mb-2">Visitor Visa</h2>
          <p class="text-gray-600 mb-2">
            A Visitor Visa is granted to foreign nationals for short-term stays such as tourism, family visits, or business meetings.
          </p>
          <a href="/landingpage/visitorvisa" class="inline-block mt-2 px-6 py-3 bg-blue-500 text-white rounded-full hover:bg-blue-700">LEARN MORE</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="min-w-full flex flex-col md:flex-row items-center gap-6 md:gap-10">
        <img src="{{ asset('images/KITAS.svg') }}" alt="KITAS" class="w-full md:max-w-md object-cover" />
        <div class="w-full md:w-1/2 px-4 sm:px-6 lg:px-8">
          <h3 class="text-sm pt-2 text-blue-600 font-bold mb-2">VISA SERVICES</h3>
          <h2 class="text-3xl font-bold mb-2">KITAS</h2>
          <p class="text-gray-600 mb-2">
            KITAS is a Limited Stay Permit for foreigners who wish to work, retire, or invest in Indonesia.
          </p>
          <a href="/landingpage/kitas" class="inline-block mt-2 px-6 py-3 bg-blue-500 text-white rounded-full hover:bg-blue-700">LEARN MORE</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="min-w-full flex flex-col md:flex-row items-center gap-6 md:gap-10">
        <img src="{{ asset('images/KITAP.svg') }}" alt="KITAP" class="w-full md:max-w-md object-cover" />
        <div class="w-full md:w-1/2 px-4 sm:px-6 lg:px-8">
          <h3 class="text-sm pt-2 text-blue-600 font-bold mb-2">VISA SERVICES</h3>
          <h2 class="text-3xl font-bold mb-2">KITAP</h2>
          <p class="text-gray-600 mb-2">
            KITAP is a Permanent Stay Permit for foreigners who have held a KITAS for several years.
          </p>
          <a href="/landingpage/kitap" class="inline-block mt-2 px-6 py-3 bg-blue-500 text-white rounded-full hover:bg-blue-700">LEARN MORE</a>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="min-w-full flex flex-col md:flex-row items-center gap-6 md:gap-10">
        <img src="{{ asset('images/EXTENTION.svg') }}" alt="Visa Extension" class="w-full md:max-w-md object-cover" />
        <div class="w-full md:w-1/2 px-4 sm:px-6 lg:px-8">
          <h3 class="text-sm pt-2 text-blue-600 font-bold mb-2">VISA SERVICES</h3>
          <h2 class="text-3xl font-bold mb-2">Visa Extension</h2>
          <p class="text-gray-600 mb-2">
            Visa Extension allows foreigners to prolong their legal stay without leaving the country.
          </p>
          <a href="/landingpage/extention" class="inline-block mt-2 px-6 py-3 bg-blue-500 text-white rounded-full hover:bg-blue-700">LEARN MORE</a>
        </div>
      </div>

      <!-- Slide 5 -->
      <div class="min-w-full flex flex-col md:flex-row items-center gap-6 md:gap-10">
        <img src="{{ asset('images/ADDITIONAL.svg') }}" alt="Additional Services" class="w-full md:max-w-md object-cover" />
        <div class="w-full md:w-1/2 px-4 sm:px-6 lg:px-8">

          <h3 class="text-sm pt-2 text-blue-600 font-bold mb-2">VISA SERVICES</h3>
          <h2 class="text-3xl font-bold mb-2">Additional Immigration Services</h2>
          <p class="text-gray-600 mb-2">
            We also provide translation, sponsorship, document processing, and immigration consulting services.
          </p>
          <a href="/landingpage/additional-services" class="inline-block mt-2 pb-2 px-6 py-3 bg-blue-500 text-white rounded-full hover:bg-blue-700">LEARN MORE</a>
        </div>
      </div>

    </div>

    <!-- Tombol Next -->
    <button @click="current = (current + 1) % slides.length"
            class="absolute right-4 bottom-4 bg-transparent border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-full shadow-lg transition-all duration-300">
      Next
    </button>
  </div>
</div>

<!-- Why Choose Evisas Section -->
<section class="py-24 px-6 bg-gradient-to-br from-blue-50 to-[#e6f0ff] text-center">
  <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
    <span class="underline decoration-yellow-500 underline-offset-4">Why Choose Evisas?</span>
  </h2>
  <p class="text-lg md:text-xl text-blue-800 mb-14 max-w-3xl mx-auto">
    We are the most trusted and experienced visa agency in Bali, delivering fast and reliable services to travelers from around the world.
  </p>

  <div class="max-w-6xl mx-auto grid gap-10 md:grid-cols-3">
    <!-- Feature Card -->
    <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 group flex flex-col items-center text-center">
      <div class="bg-yellow-100 rounded-full p-4 mb-6 transition-transform group-hover:scale-110">
        <img src="{{ asset('icons/Trusted.png') }}" alt="Trusted" class="w-16 h-16">
      </div>
      <h3 class="text-xl font-semibold text-gray-900 mb-2">Trusted Local Experts</h3>
      <p class="text-gray-600 text-sm">With in-depth knowledge of Bali’s visa regulations, our team ensures a smooth and compliant process for you.</p>
    </div>

    <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 group flex flex-col items-center text-center">
      <div class="bg-yellow-100 rounded-full p-4 mb-6 transition-transform group-hover:scale-110">
        <img src="{{ asset('icons/Fast.png') }}" alt="Fast" class="w-16 h-16">
      </div>
      <h3 class="text-xl font-semibold text-gray-900 mb-2">Fast & Transparent Service</h3>
      <p class="text-gray-600 text-sm">We keep you informed every step of the way with quick processing and no hidden surprises.</p>
    </div>

    <div class="bg-white rounded-2xl p-8 shadow-md hover:shadow-2xl transition-all duration-300 group flex flex-col items-center text-center">
      <div class="bg-yellow-100 rounded-full p-4 mb-6 transition-transform group-hover:scale-110">
        <img src="{{ asset('icons/One-Stop.png') }}" alt="One-Stop" class="w-16 h-16">
      </div>
      <h3 class="text-xl font-semibold text-gray-900 mb-2">One-Stop Visa Solutions</h3>
      <p class="text-gray-600 text-sm">From tourist visas to long-term stays, we handle it all so you can focus on enjoying Bali.</p>
    </div>
  </div>
</section>




<!-- Process Section -->
<img src="{{ asset('images/rock.jpg') }}" alt="Preload Background" class="hidden" loading="eager" fetchpriority="high">
<section class="py-20 px-6 bg-[url('/images/rock.jpg')] bg-cover bg-center text-white relative">

  <!-- Overlay semi-transparan gelap -->
  <div class="absolute inset-0 bg-black/50"></div>

  <!-- Konten -->
  <div class="relative z-10 max-w-6xl mx-auto text-center">
    <h2 class="text-4xl md:text-5xl font-bold mb-4">
      <span class="underline decoration-yellow-500 underline-offset-4">Easy Online Process</span>
    </h2>
    <p class="text-lg italic text-white mb-12">
      Visa applications made easy, just the way they should be.
    </p>

    <!-- Steps Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <!-- Step 1 -->
      <div class="bg-white/70 backdrop-blur-md rounded-2xl p-8 shadow-lg hover:scale-105 transition-transform duration-300 group text-gray-800 text-center">
        <div class="w-20 h-20 mb-4 mx-auto flex items-center justify-center">
          <img src="{{ asset('icons/step1.png') }}" alt="Online Registration" class="w-20 h-20">
        </div>
        <h3 class="text-lg font-bold text-blue-700 mb-1 group-hover:underline decoration-yellow-500 underline-offset-4">
          Online Registration
        </h3>
        <p class="text-sm">
          Register now with the online form so our team can quickly assist you.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="bg-white/70 backdrop-blur-md rounded-2xl p-8 shadow-lg hover:scale-105 transition-transform duration-300 group text-gray-800 text-center">
        <div class="w-20 h-20 mb-4 mx-auto flex items-center justify-center">
          <img src="{{ asset('icons/step2.png') }}" alt="Processed by Our Team" class="w-20 h-20">
        </div>
        <h3 class="text-lg font-bold text-blue-700 mb-1 group-hover:underline decoration-yellow-500 underline-offset-4">
          Processed by Our Team
        </h3>
        <p class="text-sm">
          After carefully reviewing your documents, we will submit your application to immigration.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="bg-white/70 backdrop-blur-md rounded-2xl p-8 shadow-lg hover:scale-105 transition-transform duration-300 group text-gray-800 text-center">
        <div class="w-20 h-20 mb-4 mx-auto flex items-center justify-center">
          <img src="{{ asset('icons/step3.png') }}" alt="Enjoy Your Destination" class="w-20 h-20">
        </div>
        <h3 class="text-lg font-bold text-blue-700 mb-1 group-hover:underline decoration-yellow-500 underline-offset-4">
          Enjoy Your Destination
        </h3>
        <p class="text-sm">
          Once approved, we will send the e-visa to your email. Done!
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Ulasan -->
<section class="py-12 px-6 bg-white text-center">
  <h2 class="text-4xl md:text-5xl font-bold mb-4">
      <span class="underline decoration-yellow-500 underline-offset-4">What They Saying About Us</span>
    </h2>

  <div class=" pt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 max-w-7xl mx-auto">

    <!-- Testimoni 1 -->
    <div class="group bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden transition-transform duration-300 hover:scale-105">
    <img src="{{ asset('images/testi1.jpg') }}" alt="Review Screenshot 1" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-300">
    </div>


    <!-- Testimoni 2 -->
    <div class="group bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden transition-transform duration-300 hover:scale-105">
    <img src="{{ asset('images/testi2.jpg') }}" alt="Review Screenshot 1" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-300">
    </div>

    <!-- Testimoni 3 -->
    <div class="group bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden transition-transform duration-300 hover:scale-105">
    <img src="{{ asset('images/testi3.jpg') }}" alt="Review Screenshot 1" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-300">
    </div>

    <!-- Testimoni 4 -->
    <div class="group bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden transition-transform duration-300 hover:scale-105">
    <img src="{{ asset('images/testi4.jpg') }}" alt="Review Screenshot 1" class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-300">
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
      <h4 class="text-xl font-semibold mb-2 text-blue-500">Evisas</h4>
      <p class="text-sm text-gray-300 mt-6">
        Gunung Athena street no.38, Lingkungan Banjar Padang Sumbu Klod, Padangsambian, Denpasar Barat, Bali 80117
      </p>
      <p class="text-sm mt-4 text-gray-300">
        WhatsApp: 
        <a href="https://wa.me/628113858165" class="text-blue-400 hover:underline">+62 811-3858-165</a>
      </p>
      <p class="text-sm mt-2 text-gray-300">
        Email: 
        <a href="mailto:cs.evisasbali@gmail.com" class="text-blue-400 hover:underline">cs.evisasbali@gmail.com</a>
      </p>
    </div>

  </div>

  <!-- Copyright -->
  <div class="text-center text-sm mt-10 border-t border-gray-700 pt-4 text-gray-400">
    &copy; {{ date('Y') }} Evisas Indonesia. All rights reserved.
  </div>
</footer>


</body>
</html>
