@extends('layouts.main')

@section('content')
<section id="view-technicians" class="px-4 py-10" x-data="technicianForm()">
    <div class="w-full max-w-[1400px] mx-auto rounded-2xl shadow-2xl p-10 bg-[#1a2532]">
        <h2 class="text-3xl font-bold text-orange-400 mb-6 text-center">View Technicians</h2>

        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-white border border-gray-700 text-sm">
                <thead class="bg-gray-700 uppercase">
                    <tr>
                        <th class="py-3 px-4 border border-gray-600">Technician ID</th>
                        <th class="py-3 px-4 border border-gray-600">Name</th>
                        <th class="py-3 px-4 border border-gray-600">Address</th>
                        <th class="py-3 px-4 border border-gray-600">Contact No</th>
                        <th class="py-3 px-4 border border-gray-600">NIC No</th>
                        <th class="py-3 px-4 border border-gray-600">Email</th>
                        <th class="py-3 px-4 border border-gray-600">Specialization</th>
                        <th class="py-3 px-4 border border-gray-600">Experience</th>
                        <th class="py-3 px-4 border border-gray-600">Registered Date</th>
                    </tr>
                </thead>
                <tbody class="bg-[#2a2f3a]">
                    <tr>
                        <td class="py-2 px-4 border border-gray-700">T001</td>
                        <td class="py-2 px-4 border border-gray-700">Alex Silva</td>
                        <td class="py-2 px-4 border border-gray-700">Colombo</td>
                        <td class="py-2 px-4 border border-gray-700">0711111111</td>
                        <td class="py-2 px-4 border border-gray-700">921234567V</td>
                        <td class="py-2 px-4 border border-gray-700">alex@email.com</td>
                        <td class="py-2 px-4 border border-gray-700">Plumbing</td>
                        <td class="py-2 px-4 border border-gray-700">5 years</td>
                        <td class="py-2 px-4 border border-gray-700">2023-05-12</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="add-technician" class="px-4 py-10">
    <div class="max-w-[1400px] mx-auto bg-[#1a2532] rounded-2xl shadow-2xl p-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            
            <!-- Form Left Side -->
            <div>
                <h3 class="text-2xl font-bold text-orange-400 mb-6">Add Technician</h3>

                <!-- Input Fields -->
                <input type="text" placeholder="Name" x-model="form.name" class="w-full mb-4 px-4 py-2 rounded-full bg-[#2d2d2d] text-white focus:outline-none">
                <input type="text" placeholder="Address" x-model="form.address" class="w-full mb-4 px-4 py-2 rounded-full bg-[#2d2d2d] text-white focus:outline-none">
                <input type="text" placeholder="Contact No" x-model="form.contact" class="w-full mb-4 px-4 py-2 rounded-full bg-[#2d2d2d] text-white focus:outline-none">
                <input type="text" placeholder="NIC No" x-model="form.nic" class="w-full mb-4 px-4 py-2 rounded-full bg-[#2d2d2d] text-white focus:outline-none">
                <input type="email" placeholder="Email" x-model="form.email" class="w-full mb-4 px-4 py-2 rounded-full bg-[#2d2d2d] text-white focus:outline-none">
                <input type="text" placeholder="Specialization" x-model="form.specialization" class="w-full mb-4 px-4 py-2 rounded-full bg-[#2d2d2d] text-white focus:outline-none">
                <input type="text" placeholder="Experience (e.g. 5 years)" x-model="form.experience" class="w-full mb-4 px-4 py-2 rounded-full bg-[#2d2d2d] text-white focus:outline-none">
                <input type="date" x-model="form.registeredDate" class="w-full mb-6 px-4 py-2 rounded-full bg-[#2d2d2d] text-white focus:outline-none">

                <!-- Buttons -->
                <div class="flex flex-wrap gap-4">
                    <button @click="addTechnician" class="bg-gradient-to-r from-orange-600 to-orange-400 text-white font-semibold py-2 px-6 rounded-full">Add Technician</button>
                    <button @click="updateTechnician" class="bg-gray-700 text-white font-semibold py-2 px-6 rounded-full">Update</button>
                    <button @click="deleteTechnician" class="bg-gray-700 text-white font-semibold py-2 px-6 rounded-full">Delete</button>
                    <button @click="clearForm" class="bg-gray-800 text-white font-semibold py-2 px-6 rounded-full">Clear</button>
                </div>
            </div>

            <!-- Image Right Side -->
            <div class="flex justify-center items-center">
                <img src="{{ asset('images/add_tech.png') }}" alt="Technicians" class="rounded-xl shadow-lg max-h-[550px] w-full object-contain" />
            </div>
        </div>
    </div>
</section>

<script>
function technicianForm() {
    return {
        form: { name: '', address: '', contact: '', nic: '', email: '', specialization: '', experience: '', registeredDate: '' },
        selectedRow: null,
        message: '',
        isError: false,

        addTechnician() {
            if (!this.form.name || !this.form.address || !this.form.contact || !this.form.nic ||
                !this.form.email || !this.form.specialization || !this.form.experience || !this.form.registeredDate) {
                this.message = "Please fill in all the details before adding.";
                this.isError = true;
                return;
            }
            this.message = "Technician added successfully! (not actually saved)";
            this.isError = false;
        },

        updateTechnician() {
            if (!this.selectedRow) {
                this.message = "Please select a technician row before updating.";
                this.isError = true;
                return;
            }
            this.message = "Technician updated successfully! (not actually saved)";
            this.isError = false;
        },

        deleteTechnician() {
            if (!this.selectedRow) {
                this.message = "Please select a technician row before deleting.";
                this.isError = true;
                return;
            }
            this.message = "Technician deleted successfully! (not actually removed)";
            this.isError = false;
        },

        clearForm() {
            this.form = { name: '', address: '', contact: '', nic: '', email: '', specialization: '', experience: '', registeredDate: '' };
            this.selectedRow = null;
            this.message = "Form cleared successfully.";
            this.isError = false;
        }
    };
}
</script>
@endsection
