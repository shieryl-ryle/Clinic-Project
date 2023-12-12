<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Doctor Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold mb-4">To-Do</h3>
                        <ul class="list-disc pl-8">
                            <li>Review patient records</li>
                            <li>Prepare for upcoming surgeries</li>
                            <li>Attend team meeting at 2 PM</li>
                            <!-- Add more to-do items as needed -->
                            <br>
                        </ul>
                    </div>

                    <!-- Readings Area -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold mb-4">Readings</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white p-4 rounded-md shadow-md">
                                <h4 class="text-md font-semibold mb-2">Blood Pressure</h4>
                                <p><a href="https://www.heart.org/en/health-topics/high-blood-pressure/understanding-blood-pressure-readings" target="_blank" class="text-blue-500 underline hover:text-blue-700">Read More</a></p>
                            </div>
                            <div class="bg-white p-4 rounded-md shadow-md">
                                <h4 class="text-md font-semibold mb-2">Heart Rate</h4>
                                <p><a href="https://www.health.harvard.edu/heart-health/what-your-heart-rate-is-telling-you" target="_blank" class="text-blue-500 underline hover:text-blue-700">Read More</a></p>
                            </div>
                            <!-- Add more readings as needed -->
                        </div>
                    </div>
                    <br>
                    <!-- Patient List for Appointments -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Upcoming Appointments</h3>

                        <!-- Patient Records Table -->
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b">Appointment ID</th>
                                    <th class="py-2 px-4 border-b">Patient Type</th>
                                    <th class="py-2 px-4 border-b">Appointment Date</th>
                                    <th class="py-2 px-4 border-b">Main Complaint</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample Patient Records (Replace with dynamic data) -->
                                <tr>
                                    <td class="py-2 px-4 border-b">2021106881211</td>
                                    <td class="py-2 px-4 border-b">Student</td>
                                    <td class="py-2 px-4 border-b">12/11/2023</td>
                                    <td class="py-2 px-4 border-b">I am having a problem with my arm</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">2021106881212</td>
                                    <td class="py-2 px-4 border-b">Employee</td>
                                    <td class="py-2 px-4 border-b">12/12/2023</td>
                                    <td class="py-2 px-4 border-b">Fever and cough</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b">2021106881213</td>
                                    <td class="py-2 px-4 border-b">Student</td>
                                    <td class="py-2 px-4 border-b">12/13/2023</td>
                                    <td class="py-2 px-4 border-b">I am currently experiencing headache</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                        <!-- End of Patient Records Table -->
                    </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



