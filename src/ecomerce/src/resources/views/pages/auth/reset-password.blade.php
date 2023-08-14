<x-app-layout>
  <form
    action="{{ route('password.store') }}"
    method="POST"
  >
    @csrf

    <!-- Password Reset Token -->
    <input
      name="token"
      type="hidden"
      value="{{ $request->route('token') }}"
    >

    <!-- Email Address -->
    <div>
      <x-forms.input-label
        :value="__('Email')"
        for="email"
      />
      <x-forms.text-input
        :value="old('email', $request->email)"
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
      <x-common.primary-button>
        {{ __('Reset Password') }}
      </x-common.primary-button>
    </div>
  </form>
  </x-web-layout>
