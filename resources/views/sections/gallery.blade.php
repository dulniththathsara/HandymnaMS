<section id="gallery" class="max-w-7xl mx-auto px-4 md:px-8 py-16 scroll-mt-16">
  <div class="text-center mb-12">
    <h3 class="text-sm text-orange-500 font-semibold uppercase">Gallery</h3>
    <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-4" :class="darkMode ? 'text-white' : 'text-gray-900'">
      Explore Our Gallery
    </h2>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
    <!-- Gallery Card -->
    <div class="rounded-xl overflow-hidden relative shadow-md transform transition-transform duration-300 ease-in-out hover:scale-105"
      :class="darkMode ? 'bg-gray-800 text-white' : 'bg-white text-gray-800'">
      <div class="relative group">
        <img src="{{ asset('images/Album_1.jpeg') }}" alt="Handyman Background" class="w-[580px] h-[400px] object-cover rounded-xl shadow-md" />
        <div
          class="absolute bottom-2 right-2 bg-white text-teal-700 p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12h6m2 0a2 2 0 100-4h-1.172a2 2 0 01-1.414-.586l-1.414-1.414A2 2 0 0012 4H9a2 2 0 00-2 2v2m0 8a2 2 0 002 2h6a2 2 0 002-2v-2a2 2 0 00-2-2H9a2 2 0 00-2 2v2z" />
          </svg>
        </div>
      </div>
      <div class="p-4 text-center">
        <h4 class="text-lg font-semibold">Album 01</h4>
      </div>
    </div>

    <!-- Gallery Card -->
    <div class="rounded-xl overflow-hidden relative shadow-md transform transition-transform duration-300 ease-in-out hover:scale-105"
      :class="darkMode ? 'bg-gray-800 text-white' : 'bg-white text-gray-800'">
      <div class="relative group">
        <img src="{{ asset('images/Album_2.png') }}" alt="Handyman Background" class="w-[580px] h-[400px] object-cover rounded-xl shadow-md" />
        <div
          class="absolute bottom-2 right-2 bg-white text-teal-700 p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12h6m2 0a2 2 0 100-4h-1.172a2 2 0 01-1.414-.586l-1.414-1.414A2 2 0 0012 4H9a2 2 0 00-2 2v2m0 8a2 2 0 002 2h6a2 2 0 002-2v-2a2 2 0 00-2-2H9a2 2 0 00-2 2v2z" />
          </svg>
        </div>
      </div>
      <div class="p-4 text-center">
        <h4 class="text-lg font-semibold">Album 02</h4>
      </div>
    </div>

    <!-- Gallery Card -->
    <div class="rounded-xl overflow-hidden relative shadow-md transform transition-transform duration-300 ease-in-out hover:scale-105"
      :class="darkMode ? 'bg-gray-800 text-white' : 'bg-white text-gray-800'">
      <div class="relative group">
        <img src="{{ asset('images/Album_3.jpeg') }}" alt="Handyman Background" class="w-[580px] h-[400px] object-cover rounded-xl shadow-md" />
        <div
          class="absolute bottom-2 right-2 bg-white text-teal-700 p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12h6m2 0a2 2 0 100-4h-1.172a2 2 0 01-1.414-.586l-1.414-1.414A2 2 0 0012 4H9a2 2 0 00-2 2v2m0 8a2 2 0 002 2h6a2 2 0 002-2v-2a2 2 0 00-2-2H9a2 2 0 00-2 2v2z" />
          </svg>
        </div>
      </div>
      <div class="p-4 text-center">
        <h4 class="text-lg font-semibold">Album 03</h4>
      </div>
    </div>
  </div>
</section>
