<section>
  <header>
    <x-header.2>
      {{ __('Profile Information') }}
    </x-header.2>

    <p class="mt-1 text-sm">
      {{ __("Update your account's profile information and email address.") }}
    </p>
  </header>

  <form
    id="send-verification"
    action="{{ route('verification.send') }}"
    method="post"
  >
    @csrf
  </form>

  <form
    class="mt-6 space-y-6"
    action="{{ route('profile.update') }}"
    method="post"
  >
    @csrf
    @method('patch')

    <div>
      <x-forms.input-label
        for="name"
        :value="__('Name')"
      />
      <x-forms.input-text
        class="block w-full"
        id="name"
        name="name"
        type="text"
        :value="old('name', $user->name)"
        autocomplete="name"
        autofocus
        required
      />
      <x-forms.input-error
        class="mt-2"
        :messages="$errors->get('name')"
      />
    </div>

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
        :value="old('email', $user->email)"
        autocomplete="username"
        required
      />
      <x-forms.input-error
        class="mt-2"
        :messages="$errors->get('email')"
      />

      @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
        <div>
          <p class="text-sm mt-2">
            {{ __('Your email address is unverified.') }}

            <x-common.primary-button form="send-verification">
              {{ __('Click here to re-send the verification email.') }}
            </x-common.primary-button>
          </p>

          @if (session('status') === 'verification-link-sent')
            <p class="mt-2 font-medium text-sm text-green-600">
              {{ __('A new verification link has been sent to your email address.') }}
            </p>
          @endif
        </div>
      @endif
    </div>

    <div class="flex items-center gap-4">
      <x-common.primary-button>{{ __('Save') }}</x-common.primary-button>

      @if (session('status') === 'profile-updated')
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
