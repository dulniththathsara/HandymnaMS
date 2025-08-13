{{-- resources/views/TechnicainDB/techDB.blade.php --}}
@extends('layouts.app') {{-- Change this to your actual layout file if needed --}}

@section('content')
<section id="view-requests" class="min-h-screen flex items-center justify-center px-4 py-10 bg-[#0b121f]">
    <div class="w-[1300px] rounded-2xl shadow-2xl p-10 bg-[#1a2532]">
        <h2 class="text-3xl font-bold text-orange-400 mb-6 text-center">View Created Requests</h2>

        <div class="overflow-x-auto rounded-lg">
            <table class="min-w-full text-left text-white border border-gray-700">
                <thead class="bg-gray-700 text-sm uppercase">
                    <tr>
                        <th class="py-3 px-4 border border-gray-600">Request ID</th>
                        <th class="py-3 px-4 border border-gray-600">Service Category</th>
                        <th class="py-3 px-4 border border-gray-600">Description</th>
                        <th class="py-3 px-4 border border-gray-600">Request Date</th>
                        <th class="py-3 px-4 border border-gray-600">Status</th>
                        <th class="py-3 px-4 border border-gray-600">Customer Name</th>
                        <th class="py-3 px-4 border border-gray-600">Address</th>
                        <th class="py-3 px-4 border border-gray-600">Contact No</th>
                        <th class="py-3 px-4 border border-gray-600">Price</th>
                        <th class="py-3 px-4 border border-gray-600">Complete</th>
                    </tr>
                </thead>

                <tbody class="text-sm bg-[#2a2f3a]">
                    {{-- Example static rows (replace with @foreach later if dynamic) --}}
                    <tr class="hover:bg-[#333a46]/60">
                        <td class="py-2 px-4 border border-gray-700">1</td>
                        <td class="py-2 px-4 border border-gray-700">Plumbing</td>
                        <td class="py-2 px-4 border border-gray-700">Fix leaking kitchen pipe</td>
                        <td class="py-2 px-4 border border-gray-700">2025-08-01</td>
                        <td class="py-2 px-4 border border-gray-700">
                            <span class="px-2 py-1 rounded-full text-xs bg-yellow-600/30 border border-yellow-600">Pending</span>
                        </td>
                        <td class="py-2 px-4 border border-gray-700">Alex Silva</td>
                        <td class="py-2 px-4 border border-gray-700">12 Lakeview Rd, Colombo</td>
                        <td class="py-2 px-4 border border-gray-700">0711111111</td>
                        <td class="py-2 px-4 border border-gray-700">$40</td>
                        <td class="py-2 px-4 border border-gray-700">No</td>
                    </tr>
                    {{-- Add your other rows here --}}
                </tbody>
            </table>
        </div>

        <div class="flex justify-end mt-6">
            <button class="bg-gradient-to-r from-green-600 to-green-400 hover:from-green-500 hover:to-green-300 text-white font-semibold py-2 px-6 rounded-full transition">
                Complete
            </button>
        </div>
    </div>
</section>
@endsection
