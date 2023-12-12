<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-secondary leading-tight">
            {{ __('View & Schedule Appointment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:student.home.show-appointment />
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="flex place-content-center ">
        <div class="">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <livewire:student.home.show-schedule />
                    </div>
                </div>
            </div>
        </div> -->

        <div class="mt-24">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <livewire:student.home.show-medical />
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
