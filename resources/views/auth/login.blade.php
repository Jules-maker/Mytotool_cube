<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="w-full md:w-1/2 flex flex-col">
    <div class="flex justify-center pt-12 md:pl-12 md:-mb-12">
        <a href="#" class=" text-white font-bold text-xl p-4 " alt="Logo"><img src="{{ asset('images/logo-cropped.png') }}" alt="logo mytotool" width="500"/></a>
    </div>
    <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
    	<h1 class="text-center text-3xl dark:">
    		Heureux de vous revoir 🙋‍♂️
    	</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot de passe')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Se souvenir de moi') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Un oubli de mot de passe?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('C\'est reparti 🚀 ') }}
                </x-primary-button>
            </div>
        </form>
        <div class="text-center pt-12 pb-12">
		    <p>
			    Vous n'avez pas de compte? 
			    <a href="{{route('register')}}" class="underline font-semibold">
				Réglons ça ici 👉
			    </a>
		    </p>
    	</div>
    </div>
</div>
    <!-- Image Section ok -->
    <div class="w-1/2 shadow-2xl">
    <img class="object-cover w-full h-screen hidden md:block" src="https://source.unsplash.com/IXUM4cJynP0" alt="Background" />
</x-guest-layout>
