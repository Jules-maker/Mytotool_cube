<x-guest-layout>
    <!-- TODO: delete when not needed
         <form method="POST" action="{{ route('register') }}">
        @csrf

        toreplace Name toreplace2
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        toreplace Email Address toreplace2
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        toreplace Password toreplace2
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        toreplace Confirm Password toreplace2
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> -->
     <!-- Register Section -->

    <div class="w-full md:w-1/2 flex flex-col">
        <div class="flex justify-center pt-12 md:pl-12 md:-mb-12">
            <a href="#" class=" text-white font-bold text-xl p-4 " alt="Logo"><img src="{{ asset('images/mytotool-logo.png') }}" alt="logo mytotool" width="500"/></a>
        </div>

        <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
        	<h1 class="text-center text-3xl dark:">
        		Créez votre compte 👋
        	</h1>
        	<form method="POST" action="{{ route('register') }}" class="flex flex-col pt-3 md:pt-8">
        		@csrf
        		<div class="flex flex-col pt-4">
    			<x-input-label for="name" :value="__('Nom complet')" />
    			<x-text-input id="name" placeholder="John Smith" class="bg-white shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
    			type="text" name="name" :value="old('name')" required autofocus autocomplete="name"/>
    			<x-input-error :messages="$errors->get('name')" class="mt-1 text-red-500 text-sm"/>
        		</div>
        		<div class="flex flex-col pt-4">
    			<x-input-label for="email" :value="__('Email')" />
    			<x-text-input id="email" placeholder="votre@email.com" class="bg-white shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
    			type="email" name="email" :value="old('email')" required autocomplete="username"/>
    			<x-input-error :messages="$errors->get('email')" class="mt-1 text-red-500 text-sm"/>
        		</div>
        		<div class="flex flex-col pt-4">
    			<x-input-label for="password" :value="__('Mot de passe')" />
    			<x-text-input id="password" placeholder="Mot de passe" class="bg-white shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
    			type="password" name="password" required autocomplete="new-password" />
    			<x-input-error :messages="$errors->get('password')" class="mt-1 text-red-500 text-sm"/>
        		</div>
        		<div class="flex flex-col pt-4">
    			<x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')"/>
    			<x-text-input id="password_confirmation" placeholder="Mot de passe" class="bg-white shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
    			type="password" name="password_confirmation" required autocomplete="new-password"/>
    			<x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-red-500 text-sm"/>
        		</div>
        		<input type="submit" value="Paré au décolage 🚀" class="bg-black text-white font-bold text-lg   hover:bg-gray-700 p-2 mt-8"/>
        	</form>
        	<div class="text-center pt-12 pb-12">
    		    <p>
    			    Vous avez déjà un compte?
    			    <a href="{{route('login')}}" class="underline font-semibold">
    				C'est par ici .😎 
    			    </a>
    		    </p>
        	</div>
        </div>

    </div>

    <!-- Image Section ok -->
    <div class="w-1/2 shadow-2xl">
    <img class="object-cover w-full h-screen hidden md:block" src="{{asset('images/icon-business-target-project-tasks-list-time.jpg')}}" alt="Background, Image by upklyak on freepik" />

</x-guest-layout>
