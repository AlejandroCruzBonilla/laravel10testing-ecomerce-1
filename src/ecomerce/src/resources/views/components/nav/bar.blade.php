<nav-bar class="header">
  <x-nav.toolbar>
    <x-slot name="menu_icon">
			<div class="lg:hidden  h-full">
				<pv-button rounded outlined @click="toggle_mobile_menu_drawer">
					<font-awesome-icon width="16px" :icon="mobile_menu_drawer ? 'fa-solid fa-xmark' : 'fa-solid fa-grip-lines'">
					</font-awesome-icon>
				</pv-button>
			</div>
    </x-slot>
    <x-slot name="logo">
      <x-common.application-logo
        height="50px"
        width="50px"
      ></x-common.application-logo>
    </x-slot>
  </x-nav.toolbar>
</nav-bar>
