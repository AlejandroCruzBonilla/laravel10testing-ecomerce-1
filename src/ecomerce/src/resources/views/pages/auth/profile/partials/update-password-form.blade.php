<section>
  <header>
    <x-header.2>
      {{ __('Update Password') }}
    </x-header.2>

    <p class="mt-1 text-sm">
      {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </p>
  </header>

  <form
    class="mt-6 space-y-6"
    action="{{ route('password.update') }}"
    method="post"
  >
    @csrf
    @method('put')

    <div>
      <x-forms.input-label
        for="current_password"
        :value="__('Current Password')"
      />
      <x-forms.text-input
        class="block w-full"
        id="current_password"
        name="current_password"
        type="password"
        autocomplete="current-password"
      />
      <x-forms.input-error
        class="mt-2"
        :messages="$errors->updatePassword->get('current_password')"
      />
    </div>

    <div>
      <x-forms.input-label
        for="password"
        :value="__('New Password')"
      />
      <x-forms.text-input
        class="block w-full"
        id="password"
        name="password"
        type="password"
        autocomplete="new-password"
      />
      <x-forms.input-error
        class="mt-2"
        :messages="$errors->updatePassword->get('password')"
      />
    </div>

    <div>
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
      />
      <x-forms.input-error
        class="mt-2"
        :messages="$errors->updatePassword->get('password_confirmation')"
      />
    </div>

    <div class="flex items-center gap-4">
      <x-common.primary-button>{{ __('Save') }}</x-common.primary-button>

      @if (session('status') === 'password-updated')
        <p
          class="text-sm"
          x-data="{ show: true }"
          x-init="setTimeout(() => show = false, 2000)"
          x-show="show"
          x-transition
        >{{ __('Saved.') }}</p>
      @endif
    </div>
  </form>
</section>
