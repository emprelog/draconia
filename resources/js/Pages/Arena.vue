<script setup>
import GameLayout from '@/Layouts/GameLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const players = ref([
  { id: 1, name: 'Player 1', hp: 100, ki: 100, group: 'GR1', effects: ['stunned'] },
  { id: 2, name: 'Player 2', hp: 80, ki: 100, group: 'GR2', effects: [] },
  { id: 3, name: 'Player 3', hp: 90, ki: 100, group: 'GR1', effects: [] },
  { id: 4, name: 'Player 4', hp: 100, ki: 70, group: 'GR3', effects: ['bleeding'] },
  { id: 5, name: 'Player 5', hp: 100, ki: 100, group: 'GR2', effects: [] },
  { id: 6, name: 'Player 6', hp: 0, ki: 0, group: 'GR3', effects: ['dead'] },
]);

const combatLog = ref([
  'Player 1 attacked Player 2 for 20 damage.',
  'Player 4 used Fúria Dracônica on Player 1.',
  'Player 2 used Guarda de Escamas.',
]);

const techniques = [
    { name: 'Corte Escamado', power: 1 },
    { name: 'Fúria Dracônica', power: 2 },
    { name: 'Golpe Tempestade', power: 3 },
];

const selectedTechnique = ref(techniques[0]);
const selectedTarget = ref(players[1]);
const power = ref(1);

</script>

<template>
  <GameLayout title="Arena">
    <Head title="Arena" />
    <v-container fluid class="fill-height">
      <v-row class="fill-height">
        <v-col cols="12" class="d-flex flex-column">
          <!-- Player Panel -->
          <v-card class="mb-4">
            <v-card-text>
              <v-row align="center">
                <v-col cols="12" md="4">
                  <v-select v-model="selectedTechnique" :items="techniques" item-title="name" item-value="name" label="Técnica" return-object></v-select>
                </v-col>
                <v-col cols="12" md="4">
                    <v-select v-model="selectedTarget" :items="players.filter(p => p.hp > 0)" item-title="name" item-value="id" label="Alvo" return-object></v-select>
                </v-col>
                <v-col cols="12" md="2">
                    <v-slider v-model="power" label="Potência" min="1" max="3" step="1" thumb-label></v-slider>
                </v-col>
                <v-col cols="12" md="2">
                  <v-btn color="primary" block>Atacar</v-btn>
                </v-col>
              </v-row>
            </v-card-text>
          </v-card>

          <!-- Players Grid -->
          <v-card class="flex-grow-1 mb-4">
            <v-card-text>
              <v-row>
                <v-col v-for="player in players" :key="player.id" cols="6" sm="4" md="3">
                  <v-card class="text-center" :color="player.hp === 0 ? 'grey' : ''">
                    <v-card-text>
                        <v-avatar size="64">
                            <img :src="`https://i.pravatar.cc/64?u=${player.id}`" :alt="player.name">
                        </v-avatar>
                        <h4 class="mt-2">{{ player.name }} <span v-if="player.group">|{{ player.group }}|</span></h4>
                        <v-progress-linear :model-value="player.hp" color="red" height="10" striped></v-progress-linear>
                        <v-progress-linear :model-value="player.ki" color="blue" height="10" striped></v-progress-linear>
                        <div class="mt-2">
                            <v-chip v-for="effect in player.effects" :key="effect" small class="mr-1">{{ effect }}</v-chip>
                        </div>
                    </v-card-text>
                  </v-card>
                </v-col>
              </v-row>
            </v-card-text>
          </v-card>

          <!-- Combat Log -->
          <v-card>
            <v-card-title>Log de Combate</v-card-title>
            <v-card-text>
              <div class="log-container" style="height: 150px; overflow-y: auto;">
                <p v-for="(log, index) in combatLog" :key="index">{{ log }}</p>
              </div>
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </GameLayout>
</template>
