<x-app-layout>
  <x-slot name="title">
    {{ __('My Profile') }}
  </x-slot>

  <div class="mx-auto space-y-6">
    <div class="container container-c1">
      <div>
        @include('pages.auth.profile.partials.update-profile-information-form')
      </div>
    </div>

    <div class="container container-c1">
      <div>
        @include('pages.auth.profile.partials.update-password-form')
      </div>
    </div>

    <div class="container container-c1 mb-8">
      <div>
        @include('pages.auth.profile.partials.delete-user-form')
      </div>
    </div>
  </div>

</x-app-layout>
