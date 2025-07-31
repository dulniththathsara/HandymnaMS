<section id="contact" class="max-w-7xl mx-auto px-4 md:px-8 py-16 scroll-mt-16">
  <div class="text-center mb-12">
    <h3 class="text-sm text-orange-500 font-semibold uppercase">Get In Touch</h3>
    <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-4" :class="darkMode ? 'text-white' : 'text-gray-900'">Contact Us</h2>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
    <!-- Contact Info -->
    <div :class="darkMode ? 'bg-gray-800 text-white border-gray-700' : 'bg-white text-gray-800 border-gray-200'"
        class="p-6 rounded-xl shadow border transition-colors duration-500">
      <div class="space-y-8">
        <!-- Hotline -->
        <div class="flex items-start gap-4">
          <div class="bg-orange-500 text-white p-3 rounded-full">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M21 15.46a17.53 17.53 0 01-4.85-.68 1 1 0 00-1 .26l-2.2 2.2a16 16 0 01-7.27-7.27l2.2-2.2a1 1 0 00.26-1 17.53 17.53 0 01-.68-4.85A1 1 0 008 2H5a1 1 0 00-1 1 18 18 0 0018 18 1 1 0 001-1v-3a1 1 0 00-1-1z"/>
            </svg>
          </div>
          <div>
            <h4 class="text-lg font-semibold">Hotline</h4>
            <div class="border-b-2 border-orange-500 w-12 my-1"></div>
            <p>1990</p>
          </div>
        </div>

        <!-- Telephone -->
        <div class="flex items-start gap-4">
          <div class="bg-orange-500 text-white p-3 rounded-full">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
              <path d="M22 16.92v3a2 2 0 01-2.18 2A19.8 19.8 0 013 5.18 2 2 0 015 3h3a1 1 0 011 .75 12.05 12.05 0 00.57 1.81 1 1 0 01-.24 1.06l-1.27 1.27a16 16 0 007.27 7.27l1.27-1.27a1 1 0 011.06-.24 12.05 12.05 0 001.81.57 1 1 0 01.75 1z"/>
            </svg>
          </div>
          <div>
            <h4 class="text-lg font-semibold">Telephone</h4>
            <div class="border-b-2 border-orange-500 w-16 my-1"></div>
            <p>+94 11 8 987 987</p>
          </div>
        </div>

        <!-- Email -->
        <div class="flex items-start gap-4">
          <div class="bg-orange-500 text-white p-3 rounded-full">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M4 4h16v16H4z" fill="none"/><path d="M22 6l-10 7L2 6"/>
            </svg>
          </div>
          <div>
            <h4 class="text-lg font-semibold">E-mail</h4>
            <div class="border-b-2 border-orange-500 w-12 my-1"></div>
            <p>handyman@gmail.com</p>
          </div>
        </div>

        <!-- Address -->
        <div class="flex items-start gap-4">
          <div class="bg-orange-500 text-white p-3 rounded-full">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M12 2C8.13 2 5 5.13 5 9c0 7 7 13 7 13s7-6 7-13c0-3.87-3.13-7-7-7z"/>
              <circle cx="12" cy="9" r="2.5"/>
            </svg>
          </div>
          <div>
            <h4 class="text-lg font-semibold">Address</h4>
            <div class="border-b-2 border-orange-500 w-16 my-1"></div>
            <p>No 75 91/1, k. l. Perera Mawatha, Colombo 08</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Map -->
    <div class="w-full h-full">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d990.0868266927993!2d79.9989458!3d6.9682913!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2560dbd5e3f99%3A0xf53338814ed5dab6!2sYatihena!5e0!3m2!1sen!2slk!4v1753336678217!5m2!1sen!2slk"
        width="100%" height="100%" style="min-height: 250px;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        class="rounded-xl border"
        :class="darkMode ? 'border-gray-700' : 'border-gray-300'">
      </iframe>
    </div>
  </div>
</section>
