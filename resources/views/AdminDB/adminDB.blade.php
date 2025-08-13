@extends('layouts.main')

@section('content')

<!-- Navbar -->
<nav class="flex justify-between items-center p-4 sticky top-0 z-50 bg-gray-800">
    <div class="text-2xl font-bold text-indigo-300">
      Handyman<span class="text-orange-400">MS</span>
    </div>
    <div class="absolute left-1/2 transform -translate-x-1/2">
      <ul class="flex space-x-6 font-medium">
        <li><a href="#view-requests" class="text-gray-300 hover:text-white">View Requests</a></li>
        <li><a href="#assign-technicians" class="text-gray-300 hover:text-white">Assign Technicians</a></li>
        <li><a href="{{ route('add.technician') }}" class="text-gray-300 hover:text-white">Add Technicians</a></li>
      </ul>
    </div>
</nav>

<!-- View Requests Section -->
<section id="view-requests" class="p-6 scroll-mt-20">
    <div class="w-full max-w-7xl mx-auto bg-[#1e293b] p-8 rounded-2xl shadow-lg">
      <h2 class="text-3xl font-bold text-orange-400 mb-6 text-center">View Requests from here</h2>

      <!-- Filter -->
      <div class="flex justify-start items-center gap-4 mb-6">
        <select class="bg-[#2d2d2d] text-white px-6 py-2 rounded-full w-60 focus:outline-none">
          <option class="text-black">Pending</option>
          <option class="text-black">Approved</option>
          <option class="text-black">Rejected</option>
        </select>
        <button class="text-white font-semibold px-6 py-2 rounded-full shadow-md"
                style="background: linear-gradient(to right, #e94e1b, #f9a13d);">
          Search Status
        </button>
      </div>

      <!-- Table -->
      <div class="overflow-x-auto">
        <table class="min-w-full text-sm border border-gray-700 rounded-lg overflow-hidden">
          <thead class="bg-[#1f2937] text-gray-300 uppercase text-left">
            <tr>
              <th class="py-3 px-4">Request ID</th>
              <th class="py-3 px-4">Service Category</th>
              <th class="py-3 px-4">Description</th>
              <th class="py-3 px-4">Request Date</th>
              <th class="py-3 px-4">Status</th>
              <th class="py-3 px-4">Technician Name</th>
              <th class="py-3 px-4">Technician No</th>
              <th class="py-3 px-4">Price</th>
              <th class="py-3 px-4">Payment Status</th>
              <th class="py-3 px-4">Complete</th>
              <th class="py-3 px-4">Customer ID</th>
              <th class="py-3 px-4">Customer Name</th>
              <th class="py-3 px-4">Customer Address</th>
              <th class="py-3 px-4">Customer No</th>
              <th class="py-3 px-4">NIC</th>
            </tr>
          </thead>
          <tbody class="text-gray-100">
            <tr class="border-t border-gray-700 hover:bg-gray-700">
              <td class="py-3 px-4">1</td>
              <td class="py-3 px-4">Plumbing</td>
              <td class="py-3 px-4">Fix leaking pipe</td>
              <td class="py-3 px-4">2025-08-01</td>
              <td class="py-3 px-4">Pending</td>
              <td class="py-3 px-4">Alex Silva</td>
              <td class="py-3 px-4">0711111111</td>
              <td class="py-3 px-4">$40</td>
              <td class="py-3 px-4 text-yellow-400">Pending Payment</td>
              <td class="py-3 px-4">No</td>
              <td class="py-3 px-4">C001</td>
              <td class="py-3 px-4">John Doe</td>
              <td class="py-3 px-4">123 Main St</td>
              <td class="py-3 px-4">0788888888</td>
              <td class="py-3 px-4">902301234V</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</section>

<!-- Assign Technicians Section -->
<section id="assign-technicians" class="p-6 scroll-mt-20" x-data="requestForm()">
    <div class="w-full max-w-7xl mx-auto bg-[#1e293b] p-8 rounded-2xl shadow-lg">
      <h2 class="text-3xl font-bold text-orange-400 mb-6 text-center">Assign Technicians</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center bg-[#1a2532] p-8 rounded-xl shadow-inner">
        <div>
          <div x-show="message" x-text="message"
               class="mb-4 text-sm font-semibold"
               :class="{'text-red-500': isError, 'text-green-400': !isError}">
          </div>

          <label class="block mb-2 font-medium">Status</label>
          <select x-model="form.status" class="w-full mb-4 px-4 py-2 rounded-full bg-gray-800 text-white focus:outline-none">
            <option value="">Select Status</option>
            <option>Approved</option>
            <option>Rejected</option>
          </select>

          <label class="block mb-2 font-medium">Technician Name</label>
          <select x-model="form.technician" class="w-full mb-4 px-4 py-2 rounded-full bg-gray-800 text-white focus:outline-none">
            <option value="">Select Technician</option>
            <option>Alex Silva</option>
            <option>John Mathews</option>
            <option>Nina Patel</option>
          </select>

          <label class="block mb-2 font-medium">Price</label>
          <input type="text" x-model="form.price" placeholder="Price (e.g. $50)"
            class="w-full mb-6 px-4 py-2 rounded-full bg-gray-800 text-white focus:outline-none">

          <div class="flex gap-4">
            <button @click="updateRequest"
              class="flex-1 bg-gradient-to-r from-orange-600 to-orange-400 hover:from-orange-500 hover:to-orange-300 text-white font-semibold py-2 px-6 rounded-full transition">
              Update
            </button>
            <button @click="clearForm"
              class="flex-1 bg-gray-700 hover:bg-gray-600 text-white font-semibold py-2 px-6 rounded-full transition">
              Clear
            </button>
          </div>
        </div>

        <div class="flex justify-center items-center">
          <img src="{{ asset('images/assign.jpeg') }}" alt="Technicians"
            class="rounded-xl shadow-lg max-h-[400px] w-full object-contain" />
        </div>
      </div>
    </div>
</section>

<script>
    function mainForm() { return {}; }
    function requestForm() {
      return {
        form: { status: '', technician: '', price: '' },
        message: '',
        isError: false,
        updateRequest() {
          if (this.form.status === 'Approved') {
            if (!this.form.technician || !this.form.price) {
              this.message = "Please fill Technician Name and Price when approving.";
              this.isError = true;
              return;
            }
          }
          this.message = "Request updated successfully!";
          this.isError = false;
        },
        clearForm() {
          this.form.status = '';
          this.form.technician = '';
          this.form.price = '';
          this.message = '';
        }
      };
    }
</script>

@endsection
