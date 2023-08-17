<template #prepend>
  {{ $prepend }}
</template>
<div class="toolbar">
  <div class="toolbar-wrapper">
    <x-nav.home-link>
      {{ $logo }}
    </x-nav.home-link>
    <div class="toolbar-links hidden lg:block">
      {{ $links }}
    </div>
  </div>
</div>
<template #append>
  {{ $append }}
</template>
