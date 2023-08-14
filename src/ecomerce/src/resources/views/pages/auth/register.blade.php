<x-app-layout>
  <form
    action="{{ route('register') }}"
    method="POST"
  >
    @csrf

    <!-- Name -->
    <div>
      <x-forms.input-label
        :value="__('Name')"
        for="name"
      />
      <x-forms.text-input
        :value="old('name')"
        autocomplete="name"
        autofocus
        class="block w-full"
        id="name"
        name="name"
        required
        type="text"
      />
      <x-forms.input-error
        :messages="$errors->get('name')"
        class="mt-2"
      />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
      <x-forms.input-label
        :value="__('Email')"
        for="email"
      />
      <x-forms.text-input
        :value="old('email')"
        autocomplete="username"
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
        autocomplete="new-password"
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

    <!-- Confirm Password -->
    <div class="mt-4">
      <x-forms.input-label
        :value="__('Confirm Password')"
        for="password_confirmation"
      />

      <x-forms.text-input
        autocomplete="new-password"
        class="block w-full"
        id="password_confirmation"
        name="password_confirmation"
        required
        type="password"
      />

      <x-forms.input-error
        :messages="$errors->get('password_confirmation')"
        class="mt-2"
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
