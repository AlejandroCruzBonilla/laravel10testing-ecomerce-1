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
        for="email"
        :value="__('Email')"
      />
      <x-forms.input-text
        class="block w-full"
        id="email"
        name="email"
        type="email"
        :value="old('email', $request->email)"
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

      <x-forms.input-text
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
      <x-common.primary-button>
        {{ __('Reset Password') }}
      </x-common.primary-button>
    </div>
  </form>
  </x-web-layout>
