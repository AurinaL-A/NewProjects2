<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="flex justify-center items-center">
      <h1 class="text-2xl font-ищдв mb-4 text-blue-700">Авторизация</h1>
  </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
    
        <!-- Email Address -->
        <div>
            <x-text-input id="email" :placeholder="__('Email')" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            :placeholder="__('Password')"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center flex-col gap-2 justify-end mt-4">
            <x-primary-button class="flex items-center justify-center size-full bg-blue-700">
                {{ __('Log in') }}
            </x-primary-button>
                <a class="p-1 flex items-center justify-center size-full  text-blue-700 font-semibold font-medium hover:text-blue-700  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
           
        </div>

    </form>
</x-guest-layout>
