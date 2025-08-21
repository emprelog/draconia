<script setup>
import GameLayout from '@/Layouts/GameLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const bracket = ref({
  rounds: [
    {
      name: 'Round 1',
      matches: [
        { id: 1, player1: 'Player 1', player2: 'Player 2', winner: 'Player 1' },
        { id: 2, player1: 'Player 3', player2: 'Player 4', winner: 'Player 4' },
        { id: 3, player1: 'Player 5', player2: 'Player 6', winner: 'Player 5' },
        { id: 4, player1: 'Player 7', player2: 'Player 8', winner: 'Player 7' },
      ],
    },
    {
      name: 'Round 2',
      matches: [
        { id: 5, player1: 'Player 1', player2: 'Player 4', winner: 'Player 1' },
        { id: 6, player1: 'Player 5', player2: 'Player 7', winner: 'Player 7' },
      ],
    },
    {
      name: 'Final',
      matches: [
        { id: 7, player1: 'Player 1', player2: 'Player 7', winner: 'Player 1' },
      ],
    },
  ],
});

</script>

<template>
  <GameLayout title="Torneio">
    <Head title="Torneio" />
    <v-container>
      <v-row>
        <v-col v-for="round in bracket.rounds" :key="round.name" cols="12" md="4">
          <h2 class="text-center">{{ round.name }}</h2>
          <v-card v-for="match in round.matches" :key="match.id" class="my-2">
            <v-card-text>
              <v-row>
                <v-col :class="{ 'font-weight-bold': match.winner === match.player1 }">{{ match.player1 }}</v-col>
                <v-col class="text-right">vs</v-col>
                <v-col :class="{ 'font-weight-bold': match.winner === match.player2 }">{{ match.player2 }}</v-col>
              </v-row>
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </GameLayout>
</template>
