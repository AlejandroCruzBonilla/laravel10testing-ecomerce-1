<section class="space-y-6">
  <header>
    <x-header.2 class="text-gray-800">
      {{ __('Delete Account') }}
    </x-header.2>

    <p class="mt-1 text-sm text-gray-600">
      {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
    </p>
  </header>

  <x-common.danger-button
    x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
  >{{ __('Delete Account') }}</x-common.danger-button>

  <x-common.modal
    :show="$errors->userDeletion->isNotEmpty()"
    focusable
    name="confirm-user-deletion"
  >
    <form
      action="{{ route('profile.destroy') }}"
      class="p-6"
      method="post"
    >
      @csrf
      @method('delete')

      <x-header.2 class="text-gray-800">
        {{ __('Are you sure you want to delete your account?') }}
      </x-header.2>

      <p class="mt-1 text-sm text-gray-600">
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
      </p>

      <div class="mt-6">
        <x-forms.input-label
          class="sr-only"
          for="password"
          value="{{ __('Password') }}"
        />

        <x-forms.text-input
          class="block w-3/4"
          id="password"
          name="password"
          placeholder="{{ __('Password') }}"
          type="password"
        />

        <x-forms.input-error
          :messages="$errors->userDeletion->get('password')"
          class="mt-2"
        />
      </div>

      <div class="mt-6 flex justify-end">
        <x-common.secondary-button x-on:click="$dispatch('close')">
          {{ __('Cancel') }}
        </x-common.secondary-button>

        <x-common.danger-button class="ml-3">
          {{ __('Delete Account') }}
        </x-common.danger-button>
      </div>
    </form>
  </x-common.modal>
</section>
