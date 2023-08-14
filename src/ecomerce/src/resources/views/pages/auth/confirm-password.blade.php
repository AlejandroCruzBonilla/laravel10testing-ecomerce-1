<x-app-layout>
  <div class="mb-4 text-sm text-gray-600">
    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
  </div>

  <form
    action="{{ route('password.confirm') }}"
    method="POST"
  >
    @csrf

    <!-- Password -->
    <div>
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

    <div class="flex justify-end mt-4">
      <x-common.primary-button>
        {{ __('Confirm') }}
      </x-common.primary-button>
    </div>
  </form>
  </x-web-layout>
