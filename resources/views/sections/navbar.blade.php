<nav class="flex justify-between items-center p-4 sticky top-0 z-50" :class="darkMode ? 'bg-gray-800' : 'bg-white shadow-md'">
  <div class="text-2xl font-bold" :class="darkMode ? 'text-indigo-300' : 'text-indigo-700'">
    Handyman<span :class="darkMode ? 'text-orange-400' : 'text-orange-500'">MS</span>
  </div>
  <ul class="hidden md:flex space-x-6 font-medium">
    <li><a href="#" :class="darkMode ? 'text-gray-300' : 'text-gray-700'">Home</a></li>
    <li><a href="#about" :class="darkMode ? 'text-gray-300' : 'text-gray-700'">About Us</a></li>
    <li><a href="#services" :class="darkMode ? 'text-gray-300' : 'text-gray-700'">Services</a></li>
    <li><a href="#gallery" :class="darkMode ? 'text-gray-300' : 'text-gray-700'">Gallery</a></li>
    <li><a href="#contact" :class="darkMode ? 'text-gray-300' : 'text-gray-700'">Contact Us</a></li>
  </ul>
  <div class="flex items-center space-x-4">
    <button @click="showRegister = true" class="hidden md:inline-block bg-orange-500 text-white px-4 py-2 rounded">
      Registration
    </button>
    <button @click="showLogin = true" class="hidden md:inline-block bg-orange-500 text-white px-4 py-2 rounded">
      Login
    </button>
    <button @click="darkMode = !darkMode" class="p-2 rounded bg-gray-200 dark:bg-gray-700">
      <template x-if="!darkMode">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m8.66-9h1M3 12H4M15.364 6.364l.707.707M6.343 6.343l.707.707M18.364 17.657l-.707.707M6.343 17.657l-.707.707M12 7a5 5 0 100 10 5 5 0 000-10z" />
        </svg>
      </template>
      <template x-if="darkMode">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-200" fill="currentColor" viewBox="0 0 24 24" stroke="none">
          <path d="M21 12.79A9 9 0 0112.21 3a7 7 0 000 14 9 9 0 018.79-4.21z"/>
        </svg>
      </template>
    </button>
  </div>
</nav>
