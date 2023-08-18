<x-app-layout>

  <div class="container--card container--card--1">
    <div class="mb-4 text-sm">
      {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <form
      action="{{ route('password.email') }}"
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
          autofocus
          required
        />
        <x-forms.input-error
          class="mt-2"
          :messages="$errors->get('email')"
        />
      </div>

      <div class="flex items-center justify-end mt-4">
        <x-common.primary-button>
          {{ __('Email Password Reset Link') }}
        </x-common.primary-button>
      </div>
    </form>
  </div>
  </x-web-layout>
