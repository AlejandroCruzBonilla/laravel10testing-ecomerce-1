<x-app-layout>
  <div class="mb-4 text-sm text-gray-600">
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
        :value="__('Email')"
        for="email"
      />
      <x-forms.text-input
        :value="old('email')"
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

    <div class="flex items-center justify-end mt-4">
      <x-common.primary-button>
        {{ __('Email Password Reset Link') }}
      </x-common.primary-button>
    </div>
  </form>
  </x-web-layout>
