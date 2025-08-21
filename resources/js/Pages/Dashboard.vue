<script setup>
import GameLayout from '@/Layouts/GameLayout.vue';
import { Head } from '@inertiajs/vue3';

const menuItems = [
  { title: 'Lutar (NPC/PvP)', icon: 'mdi-sword', route: 'fight' },
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
  <GameLayout title="Dashboard">
    <Head title="Dashboard" />
    <v-container>
      <v-row>
        <v-col v-for="item in menuItems" :key="item.title" cols="6" sm="4" md="3">
          <v-card :href="route(item.route)" class="text-center" hover>
            <v-card-text>
              <v-icon :icon="item.icon" size="48"></v-icon>
              <h3 class="mt-2">{{ item.title }}</h3>
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </GameLayout>
</template>