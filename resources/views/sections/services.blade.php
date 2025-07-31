<section id="services" class="max-w-7xl mx-auto px-4 md:px-8 py-16 scroll-mt-16">
  <div class="text-center mb-10">
    <h3 class="text-sm text-orange-500 font-semibold uppercase">Our Services</h3>
    <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-4" :class="darkMode ? 'text-white' : 'text-gray-900'">
      HandymanMS MAINTENANCE SERVICES
    </h2>
    <p class="max-w-2xl mx-auto text-lg font-semibold" :class="darkMode ? 'text-gray-300' : 'text-gray-600'">
      We connect you with skilled professionals for all your home repairs and improvements. From a simple fix to a full renovation, we’ve got you covered.
    </p>
  </div>

  <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    <template x-for="(service, index) in [
      { icon: '🧱', title: 'Masonry Work', desc: 'Expert masonry services for all your household needs.' },
      { icon: '🪚', title: 'Carpentry', desc: 'Want wood working with style? We\'ll nail it!' },
      { icon: '🏗️', title: 'Construction', desc: 'Professional construction you can count on.' },
      { icon: '🏠', title: 'Glass & Aluminum', desc: 'We solve your glass and aluminum needs!' },
      { icon: '🎨', title: 'Painting', desc: 'Transform your home with our expert painters.' },
      { icon: '🧹', title: 'Cleaning', desc: 'Make home cleaning a breeze.' },
      { icon: '💡', title: 'Electrical Repairs', desc: '24/7 services at your fingertips.' },
      { icon: '💻', title: 'ELV Repairs', desc: 'CCTV, Data, Telephone, Networking and more.' },
      { icon: '🔥', title: 'Fire System', desc: 'Safety starts with awareness.' },
      { icon: '❄️', title: 'AC Repairs', desc: 'Best AC service at your doorstep.' },
      { icon: '🚿', title: 'Plumbing', desc: 'Leaky taps? We\'ve got you!' },
      { icon: '🔧', title: 'Other Services', desc: 'We handle all handyman tasks.' }
    ]" :key="index">
      <div
        class="p-4 rounded-xl transition transform hover:scale-105 duration-300 shadow-md border"
        :class="darkMode
          ? 'bg-[#1E293B] text-white border-gray-700'
          : 'bg-[#F3F4F6] text-gray-800 border-gray-200'">
        <h4 class="font-semibold mb-2" :class="darkMode ? 'text-white' : 'text-gray-900'" x-text="service.icon + ' ' + service.title"></h4>
        <p class="text-sm" :class="darkMode ? 'text-gray-300' : 'text-gray-600'" x-text="service.desc"></p>
      </div>
    </template>
  </div>
</section>
