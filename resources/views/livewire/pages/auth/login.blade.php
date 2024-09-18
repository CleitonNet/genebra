<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div class="flex items-center justify-center bg-center bg-cover min-h-dvh" style="background-image: url({{ asset('img/bg_gray.png') }})">
    <!-- Session Status -->


    <form wire:submit="login" class="flex flex-col items-center justify-center gap-2 p-8 border-2 rounded-lg backdrop-blur-sm bg-azul/10" style="box-shadow: 0 0 2px 1px rgba(0,0,0,0.5)">
        <div class="pb-4 text-3xl font-bold text-center">Acesso Restrito</div>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <input wire:model="form.email" class="px-6 py-3 text-center border rounded-lg shadow w-72 bg-white/90" required type="email"  placeholder="Login"      name="email"     id="name" />
        <input wire:model="form.password" class="px-6 py-3 text-center border rounded-lg shadow w-72 bg-white/90" required type="password" placeholder="Senha"    name="password"    id="password" />
        <button type="submit" class="px-4 py-2 mt-2 font-bold text-white rounded bg-azul" id="enviar">Acessar</button>
        <div id="resposta" class="text-center text-white"></div>
    </form>


    {{-- <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="form.email" id="email" class="block w-full mt-1" type="email" name="email" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input wire:model="form.password" id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="text-sm text-gray-600 ms-2 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form> --}}
</div>
