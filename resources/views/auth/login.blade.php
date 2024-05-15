<!-- styling -->
@vite(['resources/js/modal.js'])
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

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
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <x-primary-button class="ms-3">
            {{ __('Log in') }}
        </x-primary-button>

        <div >
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="items-center ml-4 text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nog geen account?</a>
            @endif
        </div>

       
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="items-center underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
    </form>
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" >
        <path fill="#CAE1F1" fill-opacity="1" d="M0,320L21.8,309.3C43.6,299,87,277,131,272C174.5,267,218,277,262,234.7C305.5,192,349,96,393,85.3C436.4,75,480,149,524,176C567.3,203,611,181,655,154.7C698.2,128,742,96,785,101.3C829.1,107,873,149,916,192C960,235,1004,277,1047,261.3C1090.9,245,1135,171,1178,160C1221.8,149,1265,203,1309,224C1352.7,245,1396,235,1418,229.3L1440,224L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>
    </svg>
    
</x-guest-layout>
