<x-guest-layout>
<div class="flex justify-center items-center">
      <h1 class="text-2xl font-medium mb-4 text-blue-800">Регистрация</h1>
  </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-text-input id="login" :placeholder="__('Login')" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus autocomplete="login" />
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            :placeholder="__('Password')"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="mt-4">
            <x-text-input id="name" :placeholder="__('Name')" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div class="mt-4">

            <x-text-input id="middlename" :placeholder="__('Middlename')" class="block mt-1 w-full" type="text" name="middlename" :value="old('middlename')" required autofocus autocomplete="middlename" />
            <x-input-error :messages="$errors->get('middlename')" class="mt-2" />
        </div>
        <div class="mt-4">

            <x-text-input id="surname" :placeholder="__('Surname')"  class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus autocomplete="surname" />
            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
        </div>


        <!-- tel -->
        <div class="mt-4">

            <x-text-input id="tel" :placeholder="__('Telephone')" class="block mt-1 w-full" type="tel" name="tel" :value="old('tel')" required autocomplete="tel" />
            <x-input-error :messages="$errors->get('tel')" class="mt-2" />
        </div>

        
        <!--  Address -->
        <div class="mt-4">
            <x-text-input id="adress" class="block mt-1 w-full" type="adress" :placeholder="__('Adress')" name="adress" :value="old('adress')" required autocomplete="adress" />
            <x-input-error :messages="$errors->get('adress')" class="mt-2" />
        </div>

        

        <!-- Confirm Password -->
        <div class="mt-4">

            <x-text-input id="password_confirmation" class="block mt-1 w-full" :placeholder="__('Confirm Password')"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center flex-col justify-end mt-4">
        <x-primary-button class=" flex items-center justify-center size-full bg-blue-700">
                {{ __('Create an account') }}
            </x-primary-button>
            <div class="flex gap-1 pt-3	">
                <p>{{ __('Do you already have an account?') }}</p>
                <a class=" text-blue-800 font-medium hover:text-blue-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Login') }}
            </a>
            </div>
        </div>
    </form>
</x-guest-layout>
