<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Volt\Component;

new class extends Component {

    public string $name = '';
    public string $age = '';
    public string $gender = '';
    public User $authUser;

    public function mount(): void
    {
        $this->authUser = Auth::user();
        $this->name =$this->authUser->name;
        $this->gender =$this->authUser->gender;
        $this->age =$this->authUser->age;
    }


    public function updateProfile(): void
    {
        // dd('updateProfile');
        $user = Auth::user();

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string'],
            'gender' => ['required', 'string'],
        ]);

        $user->fill($validated);
        $user->save();
        $this->redirect('/',navigate: true);

    }



}; ?>

{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form wire:submit="updateProfileInformation" class="mt-6 space-y-6">
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input wire:model="name" id="name" name="name" type="text" class="mt-1 block w-full" required
                autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" name="email" type="email" class="mt-1 block w-full"
                required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !auth()->user()->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button wire:click.prevent="sendVerification"
                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="profile-updated">
                {{ __('Saved.') }}
            </x-action-message>
        </div>
    </form>
</section> --}}
<div>
    <form wire:submit="updateProfile" id='profile-form' class="d-none">

        <div class="mb-3 pt-3">
            <label for="nameInput" class="form-label">Name</label>
            <input type="text" id="nameInput" class="form-control" value="{{ $authUser->name }}" required wire:model="name">
            <span class=" d-none text-danger">Name is
                required.</span>
        </div>
        <div class="mb-3">
            <label for="emailInput" class="form-label">Age</label>
            <input type="number" min="18" max="100" class="form-control" value="{{ $authUser->age }}" required wire:model="age">
            <span class=" d-none text-danger">Email is
                required.</span>
        </div>
        <div class="mb-3">
            <label for="emailInput" class="form-label">Gender</label>
            <select name="gender" id="" class="form-control" required wire:model="gender">
                <option {{ $authUser->gender == 'Female' ? 'selected' : '' }} value="Female">Female</option>
                <option {{ $authUser->gender == 'Male' ? 'selected' : '' }} value="Male">Male</option>
            </select>

            <span class=" d-none text-danger">Email is
                required.</span>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary btn-sm">Update</button>
            <button type="button" class="btn btn-secondary btn-sm" id="cancelBtn">Cancel</button>
        </div>
    </form>
</div>
