<!-- Registration Modal -->
<div 
  x-show="showRegister" 
  x-cloak
  class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-60"
  x-on:keydown.escape.window="showRegister = false"
>
  <div class="bg-[#101B2B] rounded-3xl shadow-lg overflow-hidden w-full max-w-6xl relative">
    <button @click="showRegister = false" class="absolute top-4 right-4 text-white text-xl">&times;</button>
    <div class="flex flex-col md:flex-row w-full min-h-[500px]">
      <!-- Left Side Image -->
      <div class="hidden md:flex md:w-1/2 items-center justify-center p-8">
        <img src="{{ asset('images/sign up.png') }}" alt="Register" class="w-[580px] h-[450px] object-cover rounded-xl shadow-md" />
      </div>

      <!-- Right Side Form -->
      <div class="w-full md:w-1/2 p-8 md:p-12 space-y-6">
        <h2 class="text-3xl font-bold text-white">Create an account</h2>
        <p class="text-sm text-gray-400">
          Already have an account?
          <a href="#" class="text-white underline hover:text-orange-400">Log in</a>
        </p>

        <form class="space-y-4">
          <input type="text" placeholder="Username" class="w-full px-4 py-3 rounded-full bg-[#242424] placeholder-gray-400 text-white focus:outline-none focus:ring-2 focus:ring-orange-500">

          <input type="email" placeholder="Email" class="w-full px-4 py-3 rounded-full bg-[#242424] placeholder-gray-400 text-white focus:outline-none focus:ring-2 focus:ring-orange-500">

          <div class="relative">
            <input id="reg_password" type="password" placeholder="Enter your password" class="w-full px-4 py-3 pr-10 rounded-full bg-[#242424] placeholder-gray-400 text-white focus:outline-none focus:ring-2 focus:ring-orange-500">
            <span onclick="toggleRegPassword()" class="absolute right-4 top-3 text-gray-400 cursor-pointer">👁️</span>
          </div>

          <label class="flex items-center gap-2 text-sm">
            <input type="checkbox" class="form-checkbox accent-orange-500" checked>
            I agree to the
            <a href="#" class="underline text-orange-500 hover:text-orange-400">Terms & Conditions</a>
          </label>

          <button type="submit" class="w-full py-3 rounded-full bg-gradient-to-r from-[#F2550C] to-[#F79C45] text-white font-semibold transition-transform transform hover:scale-105">
            Create account
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  function toggleRegPassword() {
    const input = document.getElementById("reg_password");
    input.type = input.type === "password" ? "text" : "password";
  }
</script>
