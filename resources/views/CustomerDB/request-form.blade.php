<!DOCTYPE html>
<html lang="en" x-data="mainForm()" class="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Request Form</title>
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    html { scroll-behavior: smooth; }
  </style>
</head>
<body x-init="initForm" class="bg-[#0f172a] text-white">

  <!-- Navbar -->
  <nav class="flex items-center justify-between p-4 sticky top-0 z-50 bg-gray-800">
    <div class="text-2xl font-bold text-indigo-300">
      Handyman<span class="text-orange-400">MS</span>
    </div>
    <div class="flex-1 flex justify-center">
      <ul class="flex space-x-8 font-medium text-base">
        <li><a href="#view-requests" class="text-gray-300 hover:text-white">View Created Requests</a></li>
        <li><a href="#request" class="text-gray-300 hover:text-white">Requests</a></li>
        <li><a href="#" class="text-gray-300 hover:text-white" @click.prevent="showCustomer = true">Customer Details</a></li>
      </ul>
    </div>
    <div class="w-[150px]"></div>
  </nav>

<!-- View Created Requests Section -->
<section id="view-requests" class="scroll-mt-20 bg-[#0b121f] min-h-screen flex items-center justify-center px-4 py-10">
  <div class="w-[1300px] rounded-2xl shadow-2xl p-10 bg-[#1a2532]">
    <h2 class="text-3xl font-bold text-orange-400 mb-6 text-center">View Created Requests</h2>

    <div class="overflow-x-auto">
  <table class="min-w-full text-left text-white border border-gray-700">
    <thead class="bg-gray-700 text-sm uppercase">
      <tr>
        <th class="py-3 px-4 border">Request ID</th>
        <th class="py-3 px-4 border">Service Category</th>
        <th class="py-3 px-4 border">Description</th>
        <th class="py-3 px-4 border">Request Date</th>
        <th class="py-3 px-4 border">Status</th>
        <th class="py-3 px-4 border">Technician Name</th>
        <th class="py-3 px-4 border">Technician No</th>
        <th class="py-3 px-4 border">Price</th>
        <th class="py-3 px-4 border">Complete</th>
        <th class="py-3 px-4 border">Payment Status</th>
      </tr>
    </thead>
    <tbody class="text-sm bg-[#2a2f3a]">
      <tr>
        <td class="py-2 px-4 border">1</td>
        <td class="py-2 px-4 border">Plumbing</td>
        <td class="py-2 px-4 border">Fix leaking pipe</td>
        <td class="py-2 px-4 border">2025-08-01</td>
        <td class="py-2 px-4 border">Pending</td>
        <td class="py-2 px-4 border">Alex Silva</td>
        <td class="py-2 px-4 border">0711111111</td>
        <td class="py-2 px-4 border">$40</td>
        <td class="py-2 px-4 border">No</td>
        <td class="py-2 px-4 border text-yellow-400">Pending Payment</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border">2</td>
        <td class="py-2 px-4 border">Construction</td>
        <td class="py-2 px-4 border">Build backyard shed</td>
        <td class="py-2 px-4 border">2025-08-02</td>
        <td class="py-2 px-4 border">Rejected</td>
        <td class="py-2 px-4 border">Jane Thomas</td>
        <td class="py-2 px-4 border">0722222222</td>
        <td class="py-2 px-4 border">$600</td>
        <td class="py-2 px-4 border">No</td>
        <td class="py-2 px-4 border text-yellow-400">Pending Payment</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border">3</td>
        <td class="py-2 px-4 border">Gardening</td>
        <td class="py-2 px-4 border">Trim hedges and mow lawn</td>
        <td class="py-2 px-4 border">2025-08-03</td>
        <td class="py-2 px-4 border">Approved</td>
        <td class="py-2 px-4 border">Mia Fernando</td>
        <td class="py-2 px-4 border">0733333333</td>
        <td class="py-2 px-4 border">$75</td>
        <td class="py-2 px-4 border">Yes</td>
        <td class="py-2 px-4 border text-green-400">Complete</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border">4</td>
        <td class="py-2 px-4 border">AC Repair</td>
        <td class="py-2 px-4 border">AC not cooling</td>
        <td class="py-2 px-4 border">2025-08-04</td>
        <td class="py-2 px-4 border">Pending</td>
        <td class="py-2 px-4 border">John Iqbal</td>
        <td class="py-2 px-4 border">0744444444</td>
        <td class="py-2 px-4 border">$90</td>
        <td class="py-2 px-4 border">No</td>
        <td class="py-2 px-4 border text-yellow-400">Pending Payment</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border">5</td>
        <td class="py-2 px-4 border">Electrical</td>
        <td class="py-2 px-4 border">Fix light switch</td>
        <td class="py-2 px-4 border">2025-08-05</td>
        <td class="py-2 px-4 border">Approved</td>
        <td class="py-2 px-4 border">Shehan Dias</td>
        <td class="py-2 px-4 border">0755555555</td>
        <td class="py-2 px-4 border">$25</td>
        <td class="py-2 px-4 border">Yes</td>
        <td class="py-2 px-4 border text-green-400">Complete</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border">6</td>
        <td class="py-2 px-4 border">Gardening</td>
        <td class="py-2 px-4 border">Install garden lights</td>
        <td class="py-2 px-4 border">2025-08-06</td>
        <td class="py-2 px-4 border">Pending</td>
        <td class="py-2 px-4 border">Ravi Kumar</td>
        <td class="py-2 px-4 border">0766666666</td>
        <td class="py-2 px-4 border">$120</td>
        <td class="py-2 px-4 border">No</td>
        <td class="py-2 px-4 border text-yellow-400">Pending Payment</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border">7</td>
        <td class="py-2 px-4 border">Plumbing</td>
        <td class="py-2 px-4 border">Install bathroom shower</td>
        <td class="py-2 px-4 border">2025-08-07</td>
        <td class="py-2 px-4 border">Rejected</td>
        <td class="py-2 px-4 border">Nilani Perera</td>
        <td class="py-2 px-4 border">0777777777</td>
        <td class="py-2 px-4 border">$150</td>
        <td class="py-2 px-4 border">No</td>
        <td class="py-2 px-4 border text-yellow-400">Pending Payment</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border">8</td>
        <td class="py-2 px-4 border">Construction</td>
        <td class="py-2 px-4 border">Repair front wall</td>
        <td class="py-2 px-4 border">2025-08-08</td>
        <td class="py-2 px-4 border">Approved</td>
        <td class="py-2 px-4 border">Ishara Nuwan</td>
        <td class="py-2 px-4 border">0788888888</td>
        <td class="py-2 px-4 border">$220</td>
        <td class="py-2 px-4 border">Yes</td>
        <td class="py-2 px-4 border text-green-400">Complete</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border">9</td>
        <td class="py-2 px-4 border">AC Repair</td>
        <td class="py-2 px-4 border">Service split AC</td>
        <td class="py-2 px-4 border">2025-08-09</td>
        <td class="py-2 px-4 border">Pending</td>
        <td class="py-2 px-4 border">Hassan Ali</td>
        <td class="py-2 px-4 border">0799999999</td>
        <td class="py-2 px-4 border">$100</td>
        <td class="py-2 px-4 border">No</td>
        <td class="py-2 px-4 border text-yellow-400">Pending Payment</td>
      </tr>
      <tr>
        <td class="py-2 px-4 border">10</td>
        <td class="py-2 px-4 border">Electrical</td>
        <td class="py-2 px-4 border">Install ceiling lights</td>
        <td class="py-2 px-4 border">2025-08-10</td>
        <td class="py-2 px-4 border">Rejected</td>
        <td class="py-2 px-4 border">Sandun Madushanka</td>
        <td class="py-2 px-4 border">0700000000</td>
        <td class="py-2 px-4 border">$65</td>
        <td class="py-2 px-4 border">No</td>
        <td class="py-2 px-4 border text-yellow-400">Pending Payment</td>
      </tr>
    </tbody>
  </table>
</div>


    <div class="flex justify-end mt-6">
      <button 
        @click="showPayment = true"
        class="bg-gradient-to-r from-orange-600 to-orange-400 hover:from-orange-500 hover:to-orange-300 text-white font-semibold py-2 px-6 rounded-full transition">
        Payment
      </button>
    </div>
  </div>
</section>


  <!-- Create Request Section -->
  <section id="request" class="scroll-mt-20 bg-[#0b121f] min-h-screen flex items-center justify-center px-4 py-10">
    <div class="w-[1300px] h-[535px] rounded-2xl shadow-2xl p-10 bg-[#1a2532]">
      <div class="flex flex-col md:flex-row gap-10">
        <!-- Form -->
        <div class="w-full md:w-1/2 space-y-4">
          <h2 class="text-3xl font-bold text-orange-400 text-center mb-2">Requests</h2>
          <div>
            <label class="block mb-1 font-medium">Service Category</label>
            <select x-model="request.service" class="w-full rounded-full px-5 py-2 bg-[#2e2e2e] text-white border border-[#3a3a3a]">
              <option value="">Select a service</option>
              <option>Plumbing</option>
              <option>Construction</option>
              <option>Gardening</option>
              <option>AC Repair</option>
              <option>Electrical</option>
            </select>
          </div>
          <div>
            <label class="block mb-1 font-medium">Description</label>
            <textarea x-model="request.description" class="w-full rounded-lg px-5 py-2 bg-[#2e2e2e] text-white border border-[#3a3a3a] h-[100px]" placeholder="Describe your request"></textarea>
          </div>
          <div>
            <label class="block mb-1 font-medium">Request Date</label>
            <input type="date" x-model="request.date" class="w-full rounded-full px-5 py-2 bg-[#2e2e2e] text-white border border-[#3a3a3a]" />
          </div>
        </div>
        <!-- Image -->
        <div class="w-full md:w-1/2 flex justify-center items-center">
          <img src="{{ asset('images/create_request.png') }}" alt="Request" class="rounded-xl w-[460px] h-[350px] object-cover" />
        </div>
      </div>

      <!-- button -->
      <div class="mt-6 flex flex-wrap justify-between gap-4">
        <button 
          @click="createRequest" 
          class="flex-1 bg-gradient-to-r from-orange-600 to-orange-400 text-white font-semibold py-2 px-6 rounded-full hover:from-orange-500 hover:to-orange-300 transition">
          Create
        </button>

        <button 
          @click="updateRequest"
          class="flex-1 bg-[#3b4455] hover:bg-[#3a404d] text-white font-semibold py-2 px-6 rounded-full transition">
          Update
        </button>

        <button 
          @click="deleteRequest"
          class="flex-1 bg-[#3b4455] hover:bg-[#3a404d] text-white font-semibold py-2 px-6 rounded-full transition">
          Delete
        </button>

        <button 
          @click="clearRequestForm"
          class="flex-1 bg-[#2d3340] hover:bg-[#4b5565] text-white font-semibold py-2 px-6 rounded-full transition">
          Clear
        </button>
      </div>


      <p x-text="message" class="mt-4 text-center font-medium" :class="messageType === 'error' ? 'text-red-500' : 'text-green-400'"></p>
    </div>
  </section>

  <!-- Scripts -->
  <script>
    function mainForm() {
      return {
        showPayment: false,
        showCustomer: false,

        form: { name: '', address: '', contact: '', nic: '' },
        errors: '',
        request: { service: '', description: '', date: '' },
        message: '',
        messageType: '',

        clearForm() {
          this.form = { name: '', address: '', contact: '', nic: '' };
          this.errors = '';
        },
        saveForm() {
          if (!this.form.name || !this.form.address || !this.form.contact || !this.form.nic) {
            this.errors = 'Please fill out all fields before saving.';
          } else {
            this.errors = '';
            alert('Customer details saved successfully!');
          }
        },

        clearRequestForm() {
          this.request = { service: '', description: '', date: '' };
          this.message = '';
          this.messageType = '';
        },
        createRequest() {
          if (!this.request.description || !this.request.date) {
            this.message = 'Please fill in both description and request date.';
            this.messageType = 'error';
            return;
          }
          this.message = 'Request created successfully!';
          this.messageType = 'success';
        },
      }
    }
  </script>

  @include('CustomerDB.payment-modal')
  @include('CustomerDB.customer-modal')
  

</body>
</html>
