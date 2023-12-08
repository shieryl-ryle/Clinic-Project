<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Volt\Component;

new class extends Component
{
    public $user;

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $this->user= Auth::user();
    }


    // /**
    //  * Send an email verification notification to the current user.
    //  */
    // public function sendVerification(): void
    // {
    //     $user = Auth::user();

    //     if ($user->hasVerifiedEmail()) {
    //         $path = session('url.intended', RouteServiceProvider::HOME);

    //         $this->redirect($path);

    //         return;
    //     }

    //     $user->sendEmailVerificationNotification();

    //     Session::flash('status', 'verification-link-sent');
    // }
}; ?>

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Patient Profile") }}
        </p>
    </header>

    <div wire:submit="updateProfileInformation" class="mt-6 space-y-6">
        <div class="flex">
            <p class="font-medium mr-2">Name:</p>
            <span>{{ $user->name }}</span>
        </div>
        <div class="flex">
            <p class="font-medium mr-2">Email:</p>
            <span>{{ $user->email }}</span>
        </div>
    </div>
</section>
