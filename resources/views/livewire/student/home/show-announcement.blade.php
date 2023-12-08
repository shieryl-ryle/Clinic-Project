<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="space-y-4 ">
    <h2 class="text-xl font-bold text-primary">Announcement</h2>

    <x-modal-info
        date="Nov 30 2023"
        heading="Free Flu Shot"
        description="Get your free flu shot at the PLM Clinic and protect yourself from the flu virus." />

    <div class="flex">
        <p class="border-r-2 w-16 text-sm pr-4">Dec 12 2023</p>
        <div class="pl-4 hover:text-secondary">
            <h3 class="font-bold ">Wellness Program</h3>
            <p class="text-sm">Join the PLM Clinic's wellness program for December 2023 and enjoy yoga classes, meditation sessions, nutrition workshops, and stress management tips.</p>
        </div>
    </div>

    <div class="flex">
        <p class="border-r-2 w-16 text-sm pr-4">Jun 03 2023</p>
        <div class="pl-4 hover:text-secondary">
            <h3 class="font-bold ">Health Records Update</h3>
            <p class="text-sm">Update your health records for the academic year 2023-2024 by bringing your latest medical and dental reports, immunization records, and health insurance cards to the PLM Clinic.</p>
        </div>
    </div>

    <div class="flex">
        <p class="border-r-2 w-16 text-sm pr-4">Dec 1 2023</p>
        <div class="pl-4 hover:text-secondary">
            <h3 class="font-bold  ">10th Anniversary Celebration</h3>
            <p class="text-sm">Celebrate the 10th anniversary of the PLM Clinic on December 1, 2023, and get a free health kit if you are one of the first 100 visitors.</p>
        </div>
    </div>

    <div class="flex">
        <p class="border-r-2 w-16 text-sm pr-4">Nov 20 2023</p>
        <div class="pl-4 hover:text-secondary">
            <h3 class="font-bold ">Online Seminar</h3>
            <p class="text-sm">Learn more about the COVID-19 vaccine and its benefits by attending the PLM Clinic’s online seminar. Register [here] to join.</p>
        </div>
    </div>

    <div class="flex">
        <p class="border-r-2 w-16 text-sm pr-4">Nov 25 2023</p>
        <div class="pl-4 hover:text-secondary">
            <h3 class="font-bold">Blood Drive</h3>
            <p class="text-sm">Donate blood and save lives at the PLM Clinic's blood drive. Sign up [here] to participate.</p>
        </div>
    </div>
</div>
