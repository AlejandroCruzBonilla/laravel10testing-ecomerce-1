<v-navigation-drawer
  v-model="mobile_menu_drawer"
  location="left"
  temporary
  @update:model-value="toggle_mobile_menu_drawer"
>
  <x-nav.link-list></x-nav.link-list>
  <v-divider
    class="border-opacity-100 w-4/5 mx-auto"
    :thickness="3"
  ></v-divider>
  <x-nav.auth-links></x-nav.auth-links>
</v-navigation-drawer>
