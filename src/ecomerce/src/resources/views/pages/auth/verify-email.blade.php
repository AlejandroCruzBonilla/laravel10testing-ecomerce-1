<x-app-layout>
  <div class="mb-4 text-sm">
    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
  </div>

  @if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
      {{ __('A new verification link has been sent to the email address you provided during registration.') }}
    </div>
  @endif

  <div class="mt-4 flex items-center justify-between">
    <form
      action="{{ route('verification.send') }}"
      method="POST"
    >
      @csrf

      <div>
        <x-common.primary-button>
          {{ __('Resend Verification Email') }}
        </x-common.primary-button>
      </div>
    </form>

    <form
      action="{{ route('logout') }}"
      method="POST"
    >
      @csrf

      <x-common-primary-button type="submit">
        {{ __('Log Out') }}
      </x-common-primary-button>
    </form>
  </div>
  </x-web-layout>
