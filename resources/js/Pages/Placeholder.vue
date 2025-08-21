<script setup>
import GameLayout from '@/Layouts/GameLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
  title: String,
});
</script>

<template>
  <GameLayout :title="title">
    <Head :title="title" />
    <v-container>
      <v-row>
        <v-col>
          <h1>{{ title }}</h1>
          <p>This is a placeholder page.</p>
        </v-col>
      </v-row>
    </v-container>
  </GameLayout>
</template>
