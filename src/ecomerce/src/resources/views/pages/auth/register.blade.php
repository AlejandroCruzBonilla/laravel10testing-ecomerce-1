<x-app-layout>
  <form
    action="{{ route('register') }}"
    method="POST"
  >
    @csrf

    <!-- Name -->
    <div>
      <x-forms.input-label
        for="name"
        :value="__('Name')"
      />
      <x-forms.text-input
        class="block w-full"
        id="name"
        name="name"
        type="text"
        :value="old('name')"
        autocomplete="name"
        autofocus
        required
      />
      <x-forms.input-error
        class="mt-2"
        :messages="$errors->get('name')"
      />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
      <x-forms.input-label
        for="email"
        :value="__('Email')"
      />
      <x-forms.text-input
        class="block w-full"
        id="email"
        name="email"
        type="email"
        :value="old('email')"
        autocomplete="username"
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

      <x-forms.text-input
        class="block w-full"
        id="password"
        name="password"
        type="password"
        autocomplete="new-password"
        required
      />

      <x-forms.input-error
        class="mt-2"
        :messages="$errors->get('password')"
      />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
      <x-forms.input-label
        for="password_confirmation"
        :value="__('Confirm Password')"
      />

      <x-forms.text-input
        class="block w-full"
        id="password_confirmation"
        name="password_confirmation"
        type="password"
        autocomplete="new-password"
        required
      />

      <x-forms.input-error
        class="mt-2"
        :messages="$errors->get('password_confirmation')"
      />
    </div>

    <div class="flex items-center justify-end mt-4">
      <a
        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('login') }}"
      >
        {{ __('Already registered?') }}
      </a>

      <x-common.primary-button class="ml-4">
        {{ __('Register') }}
      </x-common.primary-button>
    </div>
  </form>
  </x-web-layout>
