<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <div x-data="{medicalform: false, dentalform: false}">
        <div class="flex space-x-6">
            <div class="max-w-l bg-blue-500 rounded-lg shadow-md p-8 text-white">
                <h2 class="text-2xl font-semibold mb-4">Schedule Your Medical Appointment</h2>
                <p class="text-sm leading-relaxed mb-6">
                    Our experienced medical professionals are ready to provide you with the best care. Schedule your appointment today to receive personalized and comprehensive medical services tailored to your needs.
                </p>
                <button @click="medicalform = true" class="bg-white text-blue-500 px-4 py-2 rounded transition duration-300 hover:bg-gray-200">
                    Schedule Now
                </button >
            </div>


            <div class="max-w-l bg-green-500 rounded-lg shadow-md p-8 text-white">
                <h2 class="text-2xl font-semibold mb-4">Dental Service</h2>
                <p class="text-sm leading-relaxed mb-6">
                    Explore our range of medical services and schedule an appointment for top-notch healthcare. Our dedicated team is here to ensure your well-being.
                </p>
                <button class="bg-white text-green-500 px-4 py-2 rounded transition duration-300 hover:bg-gray-200">
                    Schedule Now
                </button>
            </div>
        </div>
        <div x-show="medicalform">
            <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
                    Book Medical Appointment
                </div>
                <form class="py-4 px-6" action="" method="POST">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                            Patient ID
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="Enter your name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="phone">
                            Phone Number
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="phone" type="tel" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="date">
                            Date
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="date" type="date" placeholder="Select a date">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="time">
                            Time
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="time" type="time" placeholder="Select a time">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="service">
                            Service
                        </label>
                        <select
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="service" name="service">
                            <option value="">Select a service</option>
                            <option value="haircut">Consultation</option>
                            <option value="coloring">Annual Physical Exam</option>
                            <option value="styling">LOA/Readmission</option>
                            <option value="facial">Issuiing of Medical Certificate</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="message">
                            Chief Complaint
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="message" rows="4" placeholder="Enter any additional information"></textarea>
                    </div>
                    <div class="flex items-center justify-center mb-4">
                        <button
                            class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            type="submit">
                            Book Appointment
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div x-show="dentalform">
            <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
                    Book Dental Appointment
                </div>
                <form class="py-4 px-6" action="" method="POST">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="name">
                            Patient ID
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="Enter your name">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="phone">
                            Phone Number
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="phone" type="tel" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="date">
                            Date
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="date" type="date" placeholder="Select a date">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="time">
                            Time
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="time" type="time" placeholder="Select a time">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="service">
                            Service
                        </label>
                        <select
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="service" name="service">
                            <option value="">Select a service</option>
                            <option value="haircut">Consultation</option>
                            <option value="coloring">Annual Physical Exam</option>
                            <option value="styling">LOA/Readmission</option>
                            <option value="facial">Issuiing of Medical Certificate</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="message">
                            Chief Complaint
                        </label>
                        <textarea
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="message" rows="4" placeholder="Enter any additional information"></textarea>
                    </div>
                    <div class="flex items-center justify-center mb-4">
                        <button
                            class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            type="submit">
                            Book Appointment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

