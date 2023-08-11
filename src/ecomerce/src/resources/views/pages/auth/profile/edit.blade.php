<x-app-layout>
    <x-slot name="title">
        {{ __('My Profile') }}
    </x-slot>

    <div class="mx-auto space-y-6">
        <div class="c1-card">
            <div>
                @include('pages.auth.profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="c1-card">
            <div>
                @include('pages.auth.profile.partials.update-password-form')
            </div>
        </div>

        <div class="c1-card mb-8">
            <div>
                @include('pages.auth.profile.partials.delete-user-form')
            </div>
        </div>
    </div>

</x-app-layout>
