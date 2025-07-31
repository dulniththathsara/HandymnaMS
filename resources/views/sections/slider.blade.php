<main class="w-[1300px] mx-auto mt-8 relative rounded-lg overflow-hidden shadow-lg">
  <div class="flex transition-transform duration-700 ease-in-out" :style="`transform: translateX(-${currentSlide * 100}%)`">
    <template x-for="(slide, i) in slides" :key="i">
      <div class="min-w-full relative h-[600px] flex-shrink-0">
        <img :src="slide.img" alt="" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-center text-white px-4">
          <h2 class="text-2xl md:text-4xl font-bold" x-text="slide.title"></h2>
          <p class="mt-2 md:mt-4 text-sm md:text-lg" x-text="slide.subtitle"></p>
        </div>
      </div>
    </template>
  </div>
  <button @click="prev()" class="absolute top-1/2 left-2 transform -translate-y-1/2 p-3 rounded-full text-white bg-black bg-opacity-50">&#10094;</button>
  <button @click="next()" class="absolute top-1/2 right-2 transform -translate-y-1/2 p-3 rounded-full text-white bg-black bg-opacity-50">&#10095;</button>
</main>
