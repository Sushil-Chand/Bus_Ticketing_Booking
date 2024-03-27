<section>
    
    <style>

        .profile-image-wrapper {
            width: 100px; /* Set the width and height to create a circular shape */
            height: 100px;
            overflow: hidden;
            
            border-radius: 50%; /* Make it circular */
        }
        
        .profile-image {
            width: 100%;
            height: 100%;
           
            
            object-fit: cover; /* Ensure the image covers the circular area */
            border-radius: 50%; /* Make it circular */
        }
        </style>

    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" >
        @csrf
        @method('patch')

         {{-- profile Image update--}}
         <div class="profile-image-wrapper">
            <img src="{{ $user->profile_image ? asset('images/profile_pictures/' . $user->profile_image): '' }}" alt="No Image" class="profile-image" width="100">
        </div>
        <div>
        <label for="profile_image" class="cursor-pointer">
            <x-input-label :value="__('Change Image')" />
            <input id="profile_image" name="profile_image" type="file" class="hidden" :value="old('profile_image', $user->profile_image)" onchange="updateProfileImage()">
        </label>
        <x-input-error class="mt-2" :messages="$errors->get('profile_image')" />
    </div>

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"  />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>


        {{-- Address update--}}
        <div>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $user->address)"  />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        {{-- contact number update--}}
        <div>
            <x-input-label for="contactno" :value="__('Phone Number')" />
            <x-text-input id="contactno" name="contactno" type="number" class="mt-1 block w-full" :value="old('contactno', $user->contactno)"  />
            <x-input-error class="mt-2" :messages="$errors->get('contactno')" />
        </div>


        

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
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

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>

    
</section>
