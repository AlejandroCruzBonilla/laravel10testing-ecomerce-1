<x-app-layout>

  <x-slot name="title">
    {{ __('Login') }}
  </x-slot>

  <div class="c1-card">
    <form
      action="{{ route('login') }}"
      method="POST"
    >
      @csrf

      <!-- Email Address -->
      <div>
        <x-forms.input-label
          :value="__('Email')"
          for="email"
        />
        <x-forms.text-input
          :value="old('email')"
          autocomplete="username"
          autofocus
          class="block w-full"
          id="email"
          name="email"
          required
          type="email"
        />
        <x-forms.input-error
          :messages="$errors->get('email')"
          class="mt-2"
        />
      </div>

      <!-- Password -->
      <div class="mt-4">
        <x-forms.input-label
          :value="__('Password')"
          for="password"
        />

        <x-forms.text-input
          autocomplete="current-password"
          class="block w-full"
          id="password"
          name="password"
          required
          type="password"
        />

        <x-forms.input-error
          :messages="$errors->get('password')"
          class="mt-2"
        />
      </div>

      <!-- Remember Me -->
      <div class="block mt-4">
        <label
          class="inline-flex items-center"
          for="remember_me"
        >
          <input
            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
            id="remember_me"
            name="remember"
            type="checkbox"
          >
          <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
      </div>

      <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
          <a
            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            href="{{ route('password.request') }}"
          >
            {{ __('Forgot your password?') }}
          </a>
        @endif

        <x-common.primary-button class="ml-3">
          {{ __('Log in') }}
        </x-common.primary-button>
      </div>
    </form>
  </div>

  </x-web-layout>
