@props(['socialLinks'])

<div class="my-2">
    <div>
        <x-header.2 class="text-center text-gray-200">
            {{ __('Social Network') }}
        </x-header.2>
    </div>
    <div>
        <x-nav.social-links :social-links="$socialLinks"></x-nav.social-links>
    </div>
</div>
