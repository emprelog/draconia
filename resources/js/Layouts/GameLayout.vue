<script setup>
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import { useTheme } from 'vuetify';

const theme = useTheme();
const drawer = ref(false);

const toggleTheme = () => {
  theme.global.name.value = theme.global.current.value.dark ? 'light' : 'dark';
};

const menuItems = [
  { title: 'Home', icon: 'mdi-home', route: 'dashboard' },
  { title: 'Arena', icon: 'mdi-sword-cross', route: 'arena' },
  { title: 'Torneio', icon: 'mdi-tournament', route: 'tournament' },
  { title: 'Invasão', icon: 'mdi-skull-crossbones', route: 'invasion' },
  { title: 'Inventário', icon: 'mdi-backpack', route: 'inventory' },
  { title: 'Técnicas', icon: 'mdi-creation', route: 'techniques' },
  { title: 'Grupos', icon: 'mdi-account-group', route: 'groups' },
  { title: 'Diário', icon: 'mdi-book-open-page-variant', route: 'diary' },
  { title: 'Perfil', icon: 'mdi-account', route: 'profile.show' },
];
</script>

<template>
  <v-app>
    <Head :title="$page.props.title" />
    <v-navigation-drawer v-model="drawer" app temporary>
      <v-list>
        <v-list-item v-for="item in menuItems" :key="item.title" :href="route(item.route)" :prepend-icon="item.icon">
          <v-list-item-title>{{ item.title }}</v-list-item-title>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar app>
      <v-app-bar-nav-icon @click.stop="drawer = !drawer" class="d-flex d-sm-none"></v-app-bar-nav-icon>
      <v-toolbar-title style="font-family: 'Playfair Display', serif;">
        Draconiano
      </v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn @click="toggleTheme" icon>
        <v-icon>mdi-theme-light-dark</v-icon>
      </v-btn>
    </v-app-bar>

    <v-main>
      <slot />
    </v-main>

    <v-bottom-navigation app class="d-sm-none d-flex">
      <v-btn v-for="item in menuItems.slice(0, 5)" :key="item.title" :href="route(item.route)">
        <v-icon>{{ item.icon }}</v-icon>
        <span>{{ item.title }}</span>
      </v-btn>
    </v-bottom-navigation>
  </v-app>
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap');
</style>