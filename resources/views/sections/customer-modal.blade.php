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

<body x-data="mainForm()" class="bg-[#0f172a] text-white">

  <!-- Navbar -->
  <nav class="flex justify-between items-center p-4 sticky top-0 z-50 bg-gray-800">
    <div class="text-2xl font-bold text-indigo-300">
      Handyman<span class="text-orange-400">MS</span>
    </div>
    <div class="absolute left-1/2 transform -translate-x-1/2">
      <ul class="flex space-x-6 font-medium">
        <li><a href="#view-requests" class="text-gray-300 hover:text-white">View Created Requests</a></li>
        <li><a href="#request" class="text-gray-300 hover:text-white">Requests</a></li>
        <li><a href="javascript:void(0)" @click="showCustomer = true" class="text-gray-300 hover:text-white">Customer Details</a></li>
      </ul>
    </div>
  </nav>

  <!-- Your other sections like View Requests and Request Form stay here -->

  {{-- CUSTOMER DETAILS MODAL --}}
  @include('sections.customer-modal')

  <!-- AlpineJS Logic -->
  <script>
    function mainForm() {
      return {
        showCustomer: false,

        form: { name: '', address: '', contact: '', nic: '' },
        errors: '',

        request: { service: '', description: '', date: '' },
        message: '',
        messageType: '',

        saveForm() {
          if (!this.form.name || !this.form.address || !this.form.contact || !this.form.nic) {
            this.errors = 'Please fill out all fields before saving.';
          } else {
            this.errors = '';
            alert('Customer details saved successfully!');
            this.showCustomer = false;
          }
        },

        clearForm() {
          this.form = { name: '', address: '', contact: '', nic: '' };
          this.errors = '';
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

</body>
</html>
