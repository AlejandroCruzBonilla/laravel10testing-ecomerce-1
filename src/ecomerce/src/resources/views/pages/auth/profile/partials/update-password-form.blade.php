<section>
  <header>
    <x-header.2 class="text-gray-800">
      {{ __('Update Password') }}
    </x-header.2>

    <p class="mt-1 text-sm text-gray-600">
      {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </p>
  </header>

  <form
    action="{{ route('password.update') }}"
    class="mt-6 space-y-6"
    method="post"
  >
    @csrf
    @method('put')

    <div>
      <x-forms.input-label
        :value="__('Current Password')"
        for="current_password"
      />
      <x-forms.text-input
        autocomplete="current-password"
        class="block w-full"
        id="current_password"
        name="current_password"
        type="password"
      />
      <x-forms.input-error
        :messages="$errors->updatePassword->get('current_password')"
        class="mt-2"
      />
    </div>

    <div>
      <x-forms.input-label
        :value="__('New Password')"
        for="password"
      />
      <x-forms.text-input
        autocomplete="new-password"
        class="block w-full"
        id="password"
        name="password"
        type="password"
      />
      <x-forms.input-error
        :messages="$errors->updatePassword->get('password')"
        class="mt-2"
      />
    </div>

    <div>
      <x-forms.input-label
        :value="__('Confirm Password')"
        for="password_confirmation"
      />
      <x-forms.text-input
        autocomplete="new-password"
        class="block w-full"
        id="password_confirmation"
        name="password_confirmation"
        type="password"
      />
      <x-forms.input-error
        :messages="$errors->updatePassword->get('password_confirmation')"
        class="mt-2"
      />
    </div>

    <div class="flex items-center gap-4">
      <x-common.primary-button>{{ __('Save') }}</x-common.primary-button>

      @if (session('status') === 'password-updated')
        <p
          class="text-sm text-gray-600"
          x-data="{ show: true }"
          x-init="setTimeout(() => show = false, 2000)"
          x-show="show"
          x-transition
        >{{ __('Saved.') }}</p>
      @endif
    </div>
  </form>
</section>
