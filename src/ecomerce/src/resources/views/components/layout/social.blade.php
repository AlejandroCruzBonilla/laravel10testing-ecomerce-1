@props(['socialLinks'])

<div class="my-2">
  <div>
      <h2 class="text-center font-bold text-gray-200">{{__('Social Network')}}</h2>
  </div>
  <div>
      <x-nav.social-links :social-links="$socialLinks"></x-nav.social-links>
  </div>
</div>

