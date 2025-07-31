<!-- Login Modal -->
<div 
  x-show="showLogin" 
  x-cloak
  class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-60"
  x-on:keydown.escape.window="showLogin = false"
>
  <div class="bg-[#101B2B] rounded-3xl shadow-lg overflow-hidden w-full max-w-4xl relative">
    <button @click="$root.showLogin = false" class="absolute top-4 right-4 text-white text-xl">&times;</button>
    <div class="flex flex-col md:flex-row w-full min-h-[500px]">
      <!-- Image Panel -->
      <div class="hidden md:flex md:w-1/2 items-center justify-center p-8">
        <img src="{{ asset('images/login.png') }}" alt="Handyman Background" class="w-[580px] h-[400px] object-cover rounded-xl shadow-md" />
      </div>

      <!-- Login Form Panel -->
      <div class="w-full md:w-1/2 p-8 md:p-12" x-data="{
        username: '',
        password: '',
        role: '',
        handleLogin() {
          if (
            this.username === 'customer' &&
            this.password === '1234' &&
            this.role === 'customer'
          ) {
            window.open('{{ route('request.form') }}', '_blank');
            $root.showLogin = false;
          } else {
            alert('Invalid credentials');
          }
        }
      }">
        <h2 class="text-3xl font-bold text-white">Login to your account</h2><br>
        <p class="text-sm text-gray-400 mt-1">
          Don't have an account?
          <a href="#" class="text-white underline hover:text-orange-400">Sign up</a>
        </p>

        <form class="space-y-4 mt-6" @submit.prevent="handleLogin">
          <input x-model="username" type="text" placeholder="Username" class="w-full px-4 py-3 rounded-full bg-[#242424] placeholder-gray-400 text-white focus:outline-none focus:ring-2 focus:ring-orange-500">

          <div class="relative">
            <input x-model="password" id="password" type="password" placeholder="Enter your password" class="w-full px-4 py-3 pr-10 rounded-full bg-[#242424] placeholder-gray-400 text-white focus:outline-none focus:ring-2 focus:ring-orange-500">
            <span onclick="togglePassword()" class="absolute right-4 top-3 text-gray-400 cursor-pointer">👁️</span>
          </div>

          <select x-model="role" class="w-full px-4 py-3 rounded-full bg-[#242424] text-white focus:outline-none focus:ring-2 focus:ring-orange-500">
            <option value="" disabled selected>Select your role</option>
            <option value="admin">Admin</option>
            <option value="technician">Technician</option>
            <option value="customer">Customer</option>
          </select>

          <button type="submit" class="w-full py-3 rounded-full bg-gradient-to-r from-[#F2550C] to-[#F79C45] transition-all duration-300 ease-in-out transform hover:scale-105 active:scale-95 hover:shadow-lg font-semibold">
            Login
          </button>
        </form>

        <div class="mt-6 text-center space-y-2">
          <p class="text-sm text-gray-400 italic">"Fast, simple, and secure access to your tools."</p>
          <p class="text-xs text-gray-500">© 2025 HandymanMS. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function togglePassword() {
    const input = document.getElementById("password");
    input.type = input.type === "password" ? "text" : "password";
  }
</script>
