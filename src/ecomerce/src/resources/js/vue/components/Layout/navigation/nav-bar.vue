<template>
    <v-app-bar scroll-behavior="hide" class="navigation__bar">

        <div class="nav__bar nav__bar-sm">
            <div class="nav__bar-wrapper">
                <div class="nav__menu">
                    <v-app-bar-nav-icon class="z-10"></v-app-bar-nav-icon>
                </div>
                <div class="nav__logo">
                    <a href="/">
                        <v-img src="https://placehold.co/150x50"></v-img>
                    </a>
                </div>
            </div>
        </div>
        <slot name="navigation_desktop"></slot>

    </v-app-bar>
</template>