<x-guest-layout>
    
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="w-full md:w-1/2 flex flex-col">
        <div class="flex justify-center pt-12 md:pl-12 md:-mb-12">
            <a href="#" class=" text-white font-bold text-xl p-4 " alt="Logo"><img src="{{ asset('images/logo-cropped.png') }}" alt="logo mytotool" width="500"/></a>
        </div>
        
        <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            
        	<h1 class="text-center text-3xl mb-5">
            {{ __('Recevez un mail de récupération 📩') }}
        	</h1>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Retrouver mon compte 🔐') }}
            </x-primary-button>
        </div>
    </form>
        </div>
    </div>
    <!-- Image Section ok -->
    <div class="w-1/2 shadow-2xl">
    <img class="object-cover w-full h-screen hidden md:block" src="https://source.unsplash.com/IXUM4cJynP0" alt="Background" />
</x-guest-layout>
