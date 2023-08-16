<x-app-layout>
  <div class="card card-c1">
    <div class="mb-4 text-sm">
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
          for="password"
          :value="__('Password')"
        />

        <x-forms.text-input
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

      <div class="flex justify-end mt-4">
        <x-common.primary-button>
          {{ __('Confirm') }}
        </x-common.primary-button>
      </div>
    </form>
  </div>
  </x-web-layout>
