<!-- Payment Modal -->
<div 
  x-show="showPayment" 
  x-cloak
  class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60"
  x-on:keydown.escape.window="showPayment = false"
>
  <div class="w-[1300px] max-w-full rounded-2xl shadow-2xl p-10 bg-[#101b2b] relative">
    
    <!-- Close Button -->
    <button @click="showPayment = false" class="absolute top-4 right-6 text-white text-2xl">&times;</button>

    <!-- Header -->
    <h2 class="text-3xl font-bold text-orange-400 text-center mb-8">Payment</h2>

    <!-- Form Fields -->
    <div class="grid md:grid-cols-2 gap-6">
      <!-- Card Number -->
      <div class="col-span-2">
        <label class="block mb-1 font-semibold text-white">Card Number</label>
        <input type="text" placeholder="1234 5678 9012 3456"
          class="w-full px-5 py-3 rounded-full bg-[#262626] text-white border border-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500">
      </div>

      <!-- Cardholder Name -->
      <div class="col-span-2">
        <label class="block mb-1 font-semibold text-white">Cardholder Name</label>
        <input type="text" placeholder="First Last Name"
          class="w-full px-5 py-3 rounded-full bg-[#262626] text-white border border-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500">
      </div>

      <!-- Expiration Date -->
      <div>
        <label class="block mb-1 font-semibold text-white">Expiration Date (MM/YY)</label>
        <input type="month"
          class="w-full px-5 py-3 rounded-full bg-[#262626] text-white border border-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500">
      </div>

      <!-- CVV -->
      <div>
        <label class="block mb-1 font-semibold text-white">CVV / Security Code</label>
        <input type="text" placeholder="123"
          class="w-full px-5 py-3 rounded-full bg-[#262626] text-white border border-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500">
      </div>

      <!-- Billing Address -->
      <div class="col-span-2">
        <label class="block mb-1 font-semibold text-white">Billing Address</label>
        <input type="text" placeholder="123 Main Street"
          class="w-full px-5 py-3 rounded-full bg-[#262626] text-white border border-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500">
      </div>
    </div>

    <!-- Pay Now Button -->
    <div class="mt-8 text-right">
      <button
        class="bg-gradient-to-r from-[#f2550c] to-[#f79c45] hover:from-orange-500 hover:to-orange-300 text-white font-semibold py-2 px-10 rounded-full transition duration-300">
        Pay Now
      </button>
    </div>
  </div>
</div>
