@props(['icons'])

<div class="my-2">
  <div>
      <h2 class="text-center font-bold text-gray-200">{{__('Social Network')}}</h2>
  </div>
  <div>
      <x-layout.social-links :icons="$icons"></x-layout.social-links>
  </div>
</div>

