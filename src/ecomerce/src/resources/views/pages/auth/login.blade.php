<x-app-layout>

  <x-slot name="title">
    {{ __('Login') }}
  </x-slot>

  <div class="container--card container--card--1">
    <form
      action="{{ route('login') }}"
      method="POST"
    >
      @csrf

      <!-- Email Address -->
      <div>
        <x-forms.input-label
          for="email"
          :value="__('Email')"
        />
        <x-forms.input-text
          class="block w-full"
          id="email"
          name="email"
          type="email"
          :value="old('email')"
          autocomplete="username"
          autofocus
          required
        />
        <x-forms.input-error
          class="mt-2"
          :messages="$errors->get('email')"
        />
      </div>

      <!-- Password -->
      <div class="mt-4">
        <x-forms.input-label
          for="password"
          :value="__('Password')"
        />

        <x-forms.input-text
          class="block w-full"
          id="password"
          name="password"
          type="password"
          autocomplete="current-password"
          required
        />

        <x-forms.input-error
          class="mt-2"
          :messages="$errors->get('password')"
        />
      </div>

      <!-- Remember Me -->
      <div class="block mt-4">
        <x-forms.input-checkbox name="remember">
          {{ __('Remember me') }}
        </x-forms.input-checkbox>
      </div>

      <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
          <a
            class="underline text-sm"
            href="{{ route('password.request') }}"
          >
            {{ __('Forgot your password?') }}
          </a>
        @endif

        <x-common.primary-button
          class="ml-3"
          type="submit"
          {{-- on-light-bg --}}
        >
          {{ __('Log in') }}
        </x-common.primary-button>
      </div>
    </form>
  </div>

  </x-web-layout>
