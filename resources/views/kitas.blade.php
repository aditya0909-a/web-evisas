<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evisas - KITAS</title>
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
        x-data="{ navOpen: false, serviceOpen: false, mobileServiceOpen: false }">
  <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6 md:px-12">

    <!-- Logo -->
    <!-- Logo -->
    <div class="flex items-center gap-3">
  <img src="{{ asset('icons/logo.webp') }}" alt="Evisas Icon" class="w-10 h-10">
  <img src="{{ asset('images/EVISAS WHITE1.png') }}" alt="Evisas Text" class="h-5 md:h-5">
  </div>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex items-center space-x-8 text-sm font-semibold">
      <a href="/" class="text-white hover:text-yellow-400 transition duration-200">Home</a>

      <!-- Dropdown -->
      <div @mouseenter="serviceOpen = true" @mouseleave="serviceOpen = false" class="relative">
        <button class="flex items-center gap-1 text-white hover:text-yellow-400 transition duration-200">
          Our Services
          <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
        <div x-show="serviceOpen" x-cloak x-transition
             class="absolute left-0 mt-3 w-64 bg-white text-gray-800 rounded-lg shadow-lg border border-blue-300 z-50 overflow-hidden">
          <a href="/landingpage/extention" class="block px-5 py-3 hover:bg-blue-100">Visa & Kitas Extension</a>
          <a href="/landingpage/kitas" class="block px-5 py-3 hover:bg-blue-100">KITAS</a>
          <a href="/landingpage/kitap" class="block px-5 py-3 hover:bg-blue-100">KITAP</a>
          <a href="/landingpage/visitorvisa" class="block px-5 py-3 hover:bg-blue-100">Visitor Visa</a>
          <a href="/landingpage/additional" class="block px-5 py-3 hover:bg-blue-100">Additional Immigration Services</a>
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
        <div>
          <button @click="mobileServiceOpen = !mobileServiceOpen"
                  class="flex justify-between items-center w-full hover:text-yellow-500">
            Our Services
            <svg class="w-4 h-4 transform transition-transform duration-200"
                 :class="{ 'rotate-180': mobileServiceOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
          <div x-show="mobileServiceOpen" x-transition class="pl-4 mt-2 space-y-2">
            <a href="/landingpage/extention" class="block hover:text-yellow-500">Visa & Kitas Extension</a>
            <a href="/landingpage/kitas" class="block hover:text-yellow-500">KITAS</a>
            <a href="/landingpage/kitap" class="block hover:text-yellow-500">KITAP</a>
            <a href="/landingpage/visitorvisa" class="block hover:text-yellow-500">Visitor Visa</a>
            <a href="/landingpage/additional" class="block hover:text-yellow-500">Additional Immigration Services</a>
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
    <span class="underline decoration-yellow-500 underline-offset-4">Work and Longer Stay Visas (KITAS)</span>
  </h2>
</div>
</section>

<div class="bg-gradient-to-r from-sky-900 to-blue-700 shadow-lg sticky text-white text-sm px-4 py-3 md:px-20">
  <div class="max-w-7xl mx-auto pl-4 md:pl-20">
    <a href="/" class="hover:underline text-left text-blue-600">Home</a> › 
    <span>KITAS</span>
  </div>
</div>

<div class="bg-cover py-16 overflow-hidden" style="background-image: url('{{ asset('images/patternocean.svg') }}')">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

      <!-- Investor KITAS -->
      <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
        <img src="/images/investor-kitas.jpg" alt="Investor KITAS" class="rounded-xl mb-4 w-full h-40 object-cover">
        <div class="flex items-center gap-3 mb-3">
          <h3 class="text-xl font-semibold text-gray-800">Investor Kitas</h3>
        </div>
        <p class="text-sm text-gray-600 mb-2">The Investor KITAS is available to foreigners wanting to invest or establish a company in Indonesia. This visa allows multiple entries and is valid for, and permits a continuous stay of up to 2 years.</p>
        <button type="button" class=" text-left text-left text-blue-600 text-sm mb-4 focus:outline-none focus:underline" onclick="this.nextElementSibling.classList.toggle('hidden')">
          ➖ Prices
        </button>
        <div class="hidden text-sm text-gray-700 mb-4">
          <p class="font-semibold mb-1">Applying from OUTSIDE Indonesia</p>
          <p class="ml-2 mb-1 font-medium">2 years visa</p>
          <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 17,000,000</strong> - Regular <strong>14 business days</strong> processing time.</li>
            <li><strong>IDR 19,000,000</strong> - Priority <strong>7 business days</strong> processing time.</li>
          </ul>
          <p class="font-semibold mb-1">Applying from WITHIN Indonesia</p>
          <p class="ml-2 mb-1 font-medium">1 year visa</p>
          <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 20,000,000</strong> - Regular <strong>14 business days</strong> processing time.</li>
            <li><strong>IDR 22,000,000</strong> - Priority <strong>7 business days</strong> processing time.</li>
          </ul>
          <p class="ml-2 mb-1 font-medium">2 years visa</p>
          <ul class="list-disc ml-6">
            <li><strong>IDR 25,000,000</strong> - Regular <strong>14 business days</strong> processing time.</li>
            <li><strong>IDR 27,000,000</strong> - Priority <strong>7 business days</strong> processing time.</li>
          </ul>
        </div>
        <div class="mt-auto flex gap-3">
        <a href="/landingpage/kitas/investorkitas" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
      </div>

      <!-- Working KITAS -->
      <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
        <img src="/images/working-kitas.jpg" alt="Working Kitas" class="rounded-xl mb-4 w-full h-40 object-cover">
        <div class="flex items-center gap-3 mb-3">
          <h3 class="text-xl font-semibold text-gray-800">Working Kitas</h3>
        </div>
        <p class="text-sm text-gray-600 mb-2">This KITAS is for foreigners who wish to work and earn money in Bali legally. Single and Multiple entry visa holders can convert this KITAS for up to 1 year, with the validity depending on the job position.</p>
        <button type="button" class="text-left text-blue-600 text-sm mb-4 focus:outline-none focus:underline" onclick="this.nextElementSibling.classList.toggle('hidden')">
          ➖ Prices
        </button>
        <div class="hidden text-sm text-gray-700 mb-4">
          <p class="font-semibold mb-1">Applying from OUTSIDE Indonesia</p>
          <p class="ml-2 mb-1 font-medium">6 months</p>
          <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 15,000,000 + USD 600</strong> for Work permit + <strong>IDR 3,000,000</strong> Work Insurance - Regular</li>
            <li><strong>IDR 18,000,000 + USD 600</strong> for Work permit + <strong>IDR 3,000,000</strong> Work Insurance - Priority</li>
          </ul>
          <p class="ml-2 mb-1 font-medium">1 year</p>
          <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 17,500,000 + USD 1,200</strong> for Work permit - Regular</li>
            <li><strong>IDR 21,000,000 + USD 1,200</strong> for Work permit - Priority</li>
          </ul>
          <p class="font-semibold mb-1">Applying from WITHIN Indonesia</p>
          <p class="ml-2 mb-1 font-medium">6 months</p>
          <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 17,500,000 + USD 600</strong> for Work permit + <strong>IDR 3,000,000</strong> Work Insurance - Regular</li>
            <li><strong>IDR 20,000,000 + USD 600</strong> for Work permit + <strong>IDR 3,000,000</strong> Work Insurance - Priority</li>
          </ul>
          <p class="ml-2 mb-1 font-medium">1 year</p>
          <ul class="list-disc ml-6">
            <li><strong>IDR 20,000,000 + USD 1,200</strong> for Work permit - Regular</li>
            <li><strong>IDR 23,000,000 + USD 1,200</strong> for Work permit - Priority</li>
          </ul>
        </div>
        <div class="mt-auto flex gap-3">
        <a href="/landingpage/kitas/workingkitas" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
      </div>

      <!-- Retirement KITAS -->
      <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
        <img src="/images/retirement-kitas.jpg" alt="Retirement Kitas" class="rounded-xl mb-4 w-full h-40 object-cover">
        <div class="flex items-center gap-3 mb-3">
          <h3 class="text-xl font-semibold text-gray-800">Retirement Kitas</h3>
        </div>
        <p class="text-sm text-gray-600 mb-2">The Retirement Kitas is available for foreign nationals aged 60 and above who wish to retire in Indonesia. Applicants must show proof of sufficient funds to support their stay. This visa is valid for 1 year and can be renewed. Holders of this visa are not allowed to work.</p>
        <button type="button" class="text-left text-blue-600 text-sm mb-4 focus:outline-none focus:underline" onclick="this.nextElementSibling.classList.toggle('hidden')">
          ➖ Prices
        </button>
        <div class="hidden text-sm text-gray-700 mb-4">
          <p class="font-semibold mb-1">Applying from OUTSIDE Indonesia</p>
          <p class="ml-2 mb-1 font-medium">1 year</p>
          <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 15,000,000</strong> - Regular 14 business days</li>
            <li><strong>IDR 18,000,000</strong> - Priority 7 business days</li>
          </ul>
          <p class="font-semibold mb-1">Applying from WITHIN Indonesia</p>
          <p class="ml-2 mb-1 font-medium">6 months</p>
          <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 15,000,000</strong> - Regular 14 business days</li>
            <li><strong>IDR 18,000,000</strong> - Priority 7 business days</li>
          </ul>
          <p class="ml-2 mb-1 font-medium">1 year</p>
          <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 17,000,000</strong> - Regular 14 business days</li>
            <li><strong>IDR 20,000,000</strong> - Priority 7 business days</li>
          </ul>
          <p class="ml-2 mb-1 font-medium">2 years</p>
          <ul class="list-disc ml-6">
            <li><strong>IDR 20,000,000</strong> - Regular 14 business days</li>
            <li><strong>IDR 23,000,000</strong> - Priority 7 business days</li>
          </ul>
        </div>
        <div class="mt-auto flex gap-3">
        <a href="/landingpage/kitas/retirementkitas" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>

      </div>

<!-- Digital Nomad Visa (Remote Worker) -->
      <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
        <img src="/images/remoteworker-kitas.jpg" alt="Remote Worker" class="rounded-xl mb-4 w-full h-40 object-cover">
        <div class="flex items-center gap-3 mb-3">
          <h3 class="text-xl font-semibold text-gray-800">Digital Nomad Visa (Remote Worker)</h3>
        </div>
        <p class="text-sm text-gray-600 mb-2">This Digital Nomad visa is designed for remote workers who wish to live in Indonesia while working for foreign companies. This visa is valid for up to 1 year and is renewable.</p>
        <button type="button" class="text-left text-blue-600 text-sm mb-4 focus:outline-none focus:underline" onclick="this.nextElementSibling.classList.toggle('hidden')">
          ➖ Prices
        </button>
        <div class="hidden text-sm text-gray-700 mb-4">
          <p class="font-semibold mb-1">Applying from OUTSIDE Indonesia</p>
          <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 12,500,000</strong> - Regular 14 business days</li>
            <li><strong>IDR 15,000,000</strong> - Priority 7 business days</li>
          </ul>
          <p class="font-semibold mb-1">Applying from WITHIN Indonesia</p>
          <ul class="list-disc ml-6">
            <li><strong>IDR 16,000,000</strong> - Regular 14 business days</li>
            <li><strong>IDR 19,000,000</strong> - Priority 7 business days</li>
          </ul>
        </div>
     <div class="mt-auto flex gap-3">
        <a href="/landingpage/kitas/remoteworker" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>

      </div>

      <!-- Family Members of Kitas Holders and long stay Visas -->
        <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
        <img src="/images/familyholder-kitas.jpg" alt="Family Holder Kitas" class="rounded-xl mb-4 w-full h-40 object-cover">
        <div class="flex items-center gap-3 mb-3">
            <h3 class="text-xl font-semibold text-gray-800">Family Members of Kitas Holders and long stay Visas</h3>
        </div>
        <p class="text-sm text-gray-600 mb-2">
            Dependent family members of KITAS and long-stay visa holders (including Golden and Remote Worker Visas) are allowed to reside in Indonesia as dependents of their sponsoring family member.
        </p>
        <button type="button" class="text-left text-blue-600 text-sm mb-4 focus:outline-none focus:underline" onclick="this.nextElementSibling.classList.toggle('hidden')">
            ➖ Prices
        </button>
        <div class="hidden text-sm text-gray-700 mb-4">
            <p class="font-semibold mb-1">Applying from OUTSIDE Indonesia</p>
            <p class="ml-2 mb-1 font-medium">1 year</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 13,500,000</strong> - Regular 14 business days</li>
            <li><strong>IDR 15,000,000</strong> - Priority 7 business days</li>
            </ul>

            <p class="font-semibold mb-1">Applying from WITHIN Indonesia</p>
            <p class="ml-2 mb-1 font-medium">6 months</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 16,500,000</strong> - Regular 14 business days</li>
            <li><strong>IDR 19,000,000</strong> - Priority 7 business days</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">1 year</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 18,500,000</strong> - Regular 14 business days</li>
            <li><strong>IDR 21,000,000</strong> - Priority 7 business days</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">2 years</p>
            <ul class="list-disc ml-6">
            <li><strong>IDR 20,000,000</strong> - Regular 14 business days</li>
            <li><strong>IDR 23,000,000</strong> - Priority 7 business days</li>
            </ul>
        </div>
        <div class="mt-auto flex gap-3">
        <a href="/landingpage/kitas/familymemberskitas" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
        </div>

        <!-- Family Members of Indonesian Citizens -->
        <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
        <img src="/images/familyindonesian-kitas.jpg" alt="Family Indonesian Kitas" class="rounded-xl mb-4 w-full h-40 object-cover">
        <div class="flex items-center gap-3 mb-3">
            <h3 class="text-xl font-semibold text-gray-800">Family Members of Indonesian Citizens</h3>
        </div>
        <p class="text-sm text-gray-600 mb-2">
            Family members of Indonesian citizens are permitted to reside in Indonesia as dependents of their sponsoring Indonesian family member.
        </p>
        <button type="button" class="text-left text-blue-600 text-sm mb-4 focus:outline-none focus:underline" onclick="this.nextElementSibling.classList.toggle('hidden')">
            ➖ Prices
        </button>
        <div class="hidden text-sm text-gray-700 mb-4">
            <p class="font-semibold mb-1">Applying from OUTSIDE Indonesia</p>
            <p class="ml-2 mb-1 font-medium">1 year</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 13,500,000</strong> - Regular 14 business days</li>
            <li><strong>IDR 15,000,000</strong> - Priority 7 business days</li>
            </ul>

            <p class="font-semibold mb-1">Applying from WITHIN Indonesia</p>
            <p class="ml-2 mb-1 font-medium">6 months</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 16,500,000</strong> - Regular 14 business days</li>
            <li><strong>IDR 19,000,000</strong> - Priority 7 business days</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">1 year</p>
            <ul class="list-disc ml-6 mb-3">
            <li><strong>IDR 18,500,000</strong> - Regular 14 business days</li>
            <li><strong>IDR 21,000,000</strong> - Priority 7 business days</li>
            </ul>
            <p class="ml-2 mb-1 font-medium">2 years</p>
            <ul class="list-disc ml-6">
            <li><strong>IDR 20,000,000</strong> - Regular 14 business days</li>
            <li><strong>IDR 23,000,000</strong> - Priority 7 business days</li>
            </ul>
        </div>
        <div class="mt-auto flex gap-3">
        <a href="/landingpage/kitas/familymembersindonesian" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
        </div>

        <!-- Student Kitas Card -->
    <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
    <img src="/images/student-kitas.jpg" alt="Student Kitas" class="rounded-xl mb-4 w-full h-40 object-cover">
    <div class="flex items-center gap-2 mb-4">
      <h2 class="text-xl font-semibold">Student Kitas</h2>
    </div>
    <p class="text-sm text-gray-600 mb-2">
      A person planning to study at a high school or below, or someone enrolling in college for a bachelor's, master's, or doctoral degree.
    </p>

    <button type="button" class="text-left text-blue-600 text-sm mb-4 focus:outline-none focus:underline" onclick="this.nextElementSibling.classList.toggle('hidden')">
            ➖ Prices
        </button>
        <div class="hidden text-sm text-gray-700 mb-4">
        <p class="font-semibold">Applying from OUTSIDE Indonesia</p>
        <ul class="list-disc pl-6">
          <li><strong>1 year</strong><br>
            IDR 12,500,000 - Regular 14 business days processing time.<br>
            IDR 15,000,000 - Priority 7 business days processing time.
          </li>
          <li><strong>2 years</strong><br>
            IDR 16,000,000 - Regular 14 business days processing time.<br>
            IDR 18,000,000 - Priority 7 business days processing time.
          </li>
        </ul>

        <p class="font-semibold">Applying from WITHIN Indonesia</p>
        <ul class="list-disc pl-6">
          <li><strong>6 months</strong><br>
            IDR 13,500,000 - Regular 14 business days processing time.<br>
            IDR 16,000,000 - Priority 7 business days processing time.
          </li>
          <li><strong>1 year</strong><br>
            IDR 16,000,000 - Regular 14 business days processing time.<br>
            IDR 19,000,000 - Priority 7 business days processing time.
          </li>
          <li><strong>2 years</strong><br>
            IDR 20,000,000 - Regular 14 business days processing time.<br>
            IDR 23,000,000 - Priority 7 business days processing time.
          </li>
        </ul>
      </div>
        <div class="mt-auto flex gap-3">
        <a href="/landingpage/kitas/studentkitas" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
        </div>

  <!-- Ex-Indonesian Citizen Visa Card -->
  <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
    <img src="/images/ex-indonesian-kitas.jpg" alt="Ex-Indonesian Citizen Kitas" class="rounded-xl mb-4 w-full h-40 object-cover">
    <div class="flex items-center gap-2 mb-4">
      <h2 class="text-xl font-semibold">Ex-Indonesian Citizen Visa</h2>
    </div>
    <p class="text-sm text-gray-600 mb-2">
      This visa is for former Indonesian citizens who have acquired foreign citizenship and intend to reside in Indonesia for 1 or 2 years.
    </p>

    <button type="button" class="text-left text-blue-600 text-sm mb-4 focus:outline-none focus:underline" onclick="this.nextElementSibling.classList.toggle('hidden')">
            ➖ Prices
        </button>
        <div class="hidden text-sm text-gray-700 mb-4">
        <ul class="list-disc pl-6">
          <li><strong>1 year</strong><br>
            IDR 12,500,000 - Regular 14 business days processing time.<br>
            IDR 15,000,000 - Priority 7 business days processing time.
          </li>
          <li><strong>2 years</strong><br>
            IDR 15,000,000 - Regular 14 business days processing time.<br>
            IDR 18,000,000 - Priority 7 business days processing time.
          </li>
        </ul>
      </div>
        <div class="mt-auto flex gap-3">
        <a href="/landingpage/kitas/exindonesiankitas" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
        </div>
        </div>

  <!-- Golden Visas Card -->
  <div class="bg-white border border-gray-200 rounded-2xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
    <img src="/images/golden-kitas.jpg" alt="Golden Kitas" class="rounded-xl mb-4 w-full h-40 object-cover">
    <div class="flex items-center gap-2 mb-4">
      <h2 class="text-xl font-semibold">Golden Visas</h2>
    </div>
    <p class="text-sm text-gray-600 mb-2">
     This visa is for investors, former Indonesian citizens, or people with special skills. It allows you to stay for 5 or 10 years and you can bring your family too.
    </p>
    
    <button type="button" class="text-left text-blue-600 text-sm mb-4 focus:outline-none focus:underline" onclick="this.nextElementSibling.classList.toggle('hidden')">
            ➖ Prices
        </button>
        <div class="hidden text-sm text-gray-700 mb-4">
        <ul class="list-disc pl-6">
          <li><strong>5 years</strong><br>
            IDR 35,000,000
          </li>
          <li><strong>10 years</strong><br>
            IDR 50,000,000
          </li>
        </ul>
      </div>
        <div class="mt-auto flex gap-3">
        <a href="/landingpage/kitas/goldenkitas" class="flex-1 px-4 py-2 bg-gray-100 text-sm text-center rounded-lg hover:bg-gray-200 transition">Get Details</a>
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
