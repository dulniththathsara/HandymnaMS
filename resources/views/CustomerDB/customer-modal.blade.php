<!-- Customer Details Modal -->
<div 
  x-show="showCustomer" 
  x-cloak
  x-on:keydown.escape.window="showCustomer = false"
  class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60"
>
  <div class="w-[1250px] h-[530px] rounded-2xl shadow-2xl p-6 md:p-10 flex flex-col md:flex-row items-center gap-8 overflow-hidden bg-[#1a2532] relative">
    <button @click="showCustomer = false" class="absolute top-4 right-6 text-white text-2xl">&times;</button>

    <div class="w-full md:w-1/2 h-full flex flex-col justify-center">
      <h2 class="text-3xl font-bold mb-6 text-orange-400 text-center">Customer Details</h2>
      <div class="space-y-3">
        <input x-model="form.name" type="text" placeholder="Name" class="w-full rounded-full px-5 py-2 bg-[#2e2e2e] text-white placeholder-gray-400 border border-[#3a3a3a] focus:outline-none focus:ring-2 focus:ring-orange-500" />
        <input x-model="form.address" type="text" placeholder="Address" class="w-full rounded-full px-5 py-2 bg-[#2e2e2e] text-white placeholder-gray-400 border border-[#3a3a3a] focus:outline-none focus:ring-2 focus:ring-orange-500" />
        <input x-model="form.contact" type="text" placeholder="Contact No" class="w-full rounded-full px-5 py-2 bg-[#2e2e2e] text-white placeholder-gray-400 border border-[#3a3a3a] focus:outline-none focus:ring-2 focus:ring-orange-500" />
        <input x-model="form.nic" type="text" placeholder="NIC No" class="w-full rounded-full px-5 py-2 bg-[#2e2e2e] text-white placeholder-gray-400 border border-[#3a3a3a] focus:outline-none focus:ring-2 focus:ring-orange-500" />
      </div>
      <div class="mt-6 flex flex-col sm:flex-row justify-between items-center gap-4">
        <button @click="saveForm()" class="w-full sm:w-1/2 bg-gradient-to-r from-orange-600 to-orange-400 text-white font-semibold py-2 rounded-full hover:from-orange-500 hover:to-orange-300 transition">Save</button>
        <button @click="clearForm()" class="w-full sm:w-1/2 bg-[#3b3b3b] text-white font-semibold py-2 rounded-full hover:bg-[#555] transition">Clear</button>
      </div>
      <p x-text="errors" class="mt-4 text-red-500 text-center font-medium"></p>
    </div>

    <div class="w-full md:w-1/2 flex justify-center items-center h-full">
      <img src="{{ asset('images/CD.png') }}" alt="Handyman" class="rounded-xl object-cover w-[370px] h-[330px] md:w-[490px] md:h-[380px]">
    </div>
  </div>
</div>
<script>
function mainForm() {
  return {
    showCustomer: false,
    form: { name: '', address: '', contact: '', nic: '' },
    ...
    initForm() {
      // Optional init
    }
  }
}
</script>
