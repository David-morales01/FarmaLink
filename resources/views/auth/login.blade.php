<x-guest-layout>
       
        <x-authentication-card> 
            <x-slot name="imageLeft">
                <img src="{{ asset('build/assets/pharmacy.png') }}" alt="farmacy" class="max-h-[40vh] md:max-h-[80vh]" />
            </x-slot> 
             <x-slot name="logo">
                <x-authentication-card-logo />
            </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="Correo electrónico" />
                <x-input id="email" class="block mt-1 w-full bg-[#F3F7FB]" type="email" name="email"
                    :value="old('email')" required autofocus autocomplete="username" placeholder="Correo electrónico" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="Contraseña" />
                <x-input id="password" class="block mt-1 w-full bg-[#F3F7FB]" type="password" name="password" required
                    autocomplete="current-password" placeholder="Contraseña" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400"> {{ 'Recuerdame' }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('password.request') }}" wire:navigate>
                        {{ '¿Olvidaste tu contraseña ?' }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ 'Iniciar Sesión' }}
                </x-button>
            </div>
        </form>
        <div class="flex  gap-1 justify-center mt-4">
            ¿Aún no tienes una cuenta? <x-nav-link href="/register" wire:navigate aria-label="register" class="text-[#4B52C8]">

                Registrarse
            </x-nav-link>
        </div>
    </x-authentication-card>
</x-guest-layout>
