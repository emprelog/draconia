<script setup>
import GameLayout from '@/Layouts/GameLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const boss = ref({
  name: 'Vorm, o Ancião',
  hp: 75,
  maxHp: 100,
});

const participants = ref([
  { id: 1, name: 'Player 1', damage: 1500 },
  { id: 2, name: 'Player 2', damage: 1200 },
  { id: 3, name: 'Player 3', damage: 1000 },
  { id: 4, name: 'Player 4', damage: 800 },
  { id: 5, name: 'Player 5', damage: 600 },
]);

</script>

<template>
  <GameLayout title="Invasão">
    <Head title="Invasão" />
    <v-container>
      <v-row>
        <v-col cols="12">
          <v-card>
            <v-card-title class="text-center">{{ boss.name }}</v-card-title>
            <v-card-text>
              <v-progress-linear :model-value="boss.hp" color="red" height="25" striped>
                <strong>{{ boss.hp }}%</strong>
              </v-progress-linear>
            </v-card-text>
            <v-card-actions>
              <v-btn color="primary" block>Atacar (Custo: 100 Dinheiro)</v-btn>
            </v-card-actions>
          </v-card>
        </v-col>
      </v-row>
      <v-row>
        <v-col cols="12">
          <v-card>
            <v-card-title>Top Dano</v-card-title>
            <v-list>
              <v-list-item v-for="participant in participants" :key="participant.id">
                <v-list-item-title>{{ participant.name }}</v-list-item-title>
                <v-list-item-subtitle>{{ participant.damage }} de dano</v-list-item-subtitle>
              </v-list-item>
            </v-list>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </GameLayout>
</template>
