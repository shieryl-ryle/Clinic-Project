<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <div x-data="{ UpcomingApp: false, PastApp: false }">
        <div class="flex place-content-center">
            <button @click="UpcomingApp = true" type="button" class="mr-20 text-white bg-primary focus:ring-4 ring-primary focus:bg-white focus:text-primary font-medium rounded-lg text-xl px-5 py-2.5 me-2 mb-2 hover:bg-primary-dark ">Upcoming Appointment</button>
            <button @click="PastApp = true" type="button" class=" text-white bg-primary focus:ring-4 ring-primary focus:bg-white focus:text-primary font-medium rounded-lg text-xl px-5 py-2.5 me-2 mb-2 hover:bg-primary-dark ">Past Appointment</button>
        </div>

        <div x-show="PastApp">
            <div class="relative overflow-x-auto mt-9">
                <table class="w-full text-sm text-left rtl:text-right text-white dark:text-txt-dark">
                    <thead class="text-base uppercase  dark:bg-secondary-light dark:text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Appointment ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Appointment Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Clinic Service
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Patient Complaint
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Remarks
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tbody class="bg-white divide-y divide-txt-dark dark:divide-gray">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    001
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    2023-12-15
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Medical
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Headache
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Follow-up required
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Scheduled
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    002
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    2023-12-16
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Dental
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Toothache
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    No specific remarks
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    Completed
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </tbody>
                </table>
                <div>
                    <button @click="PastApp = false" type="button" class=" text-white bg-primary focus:ring-4 ring-primary focus:bg-white focus:text-primary font-medium rounded-lg text-xl px-5 py-2.5 me-2 mb-2 hover:bg-primary-dark ">Close</button>
                </div>
            </div>
        </div>
        <div x-show="UpcomingApp">
            <div class="relative overflow-x-auto mt-9">
                <table class="w-full text-sm text-left rtl:text-right text-white dark:text-txt-dark">
                    <thead class="text-base uppercase dark:bg-secondary-light dark:text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Appointment ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Appointment Date
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Clinic Service
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Patient Complaint
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-txt-dark dark:divide-gray">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                001
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                2023-12-15
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                Medical
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                Headache
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                Scheduled
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                002
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                2023-12-16
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                Dental
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                Toothache
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                Completed
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
                <div class="flex justify-start content-center">
                    <button @click="UpcomingApp = false; PastApp = false" type="button" class="text-white bg-primary focus:ring-4 ring-primary focus:bg-white focus:text-primary font-medium rounded-lg text-xl px-5 py-2.5 me-2 mb-2 hover:bg-primary-dark">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
