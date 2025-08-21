<script setup>
import GameLayout from '@/Layouts/GameLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const techniques = ref([
  { id: 1, name: 'Corte Escamado', level: 7, type: 'Ataque' },
  { id: 2, name: 'Fúria Dracônica', level: 5, type: 'Ataque' },
  { id: 3, name: 'Guarda de Escamas', level: 8, type: 'Defesa' },
  { id: 4, name: 'Parede Dracônica', level: 4, type: 'Defesa' },
  { id: 5, name: 'Chama Interior', level: 6, type: 'Suporte' },
  { id: 6, name: 'Eco de Mana', level: 3, type: 'Suporte' },
]);

const loadoutDialog = ref(false);
const selectedTechnique = ref(null);

const openLoadoutDialog = (technique) => {
  selectedTechnique.value = technique;
  loadoutDialog.value = true;
};

const gameModes = ['PvP', 'Torneio', 'Invasão', 'Arena'];

</script>

<template>
  <GameLayout title="Técnicas">
    <Head title="Técnicas" />
    <v-container>
        <v-tabs v-model="tab" bg-color="primary">
            <v-tab value="Ataque">Ataque</v-tab>
            <v-tab value="Defesa">Defesa</v-tab>
            <v-tab value="Suporte">Suporte</v-tab>
        </v-tabs>
        <v-window v-model="tab">
            <v-window-item value="Ataque">
                <v-list>
                    <v-list-item v-for="tech in techniques.filter(t => t.type === 'Ataque')" :key="tech.id" @click="openLoadoutDialog(tech)">
                        <v-list-item-title>{{ tech.name }}</v-list-item-title>
                        <v-list-item-subtitle>Nível {{ tech.level }}</v-list-item-subtitle>
                    </v-list-item>
                </v-list>
            </v-window-item>
            <v-window-item value="Defesa">
                <v-list>
                    <v-list-item v-for="tech in techniques.filter(t => t.type === 'Defesa')" :key="tech.id" @click="openLoadoutDialog(tech)">
                        <v-list-item-title>{{ tech.name }}</v-list-item-title>
                        <v-list-item-subtitle>Nível {{ tech.level }}</v-list-item-subtitle>
                    </v-list-item>
                </v-list>
            </v-window-item>
            <v-window-item value="Suporte">
                <v-list>
                    <v-list-item v-for="tech in techniques.filter(t => t.type === 'Suporte')" :key="tech.id" @click="openLoadoutDialog(tech)">
                        <v-list-item-title>{{ tech.name }}</v-list-item-title>
                        <v-list-item-subtitle>Nível {{ tech.level }}</v-list-item-subtitle>
                    </v-list-item>
                </v-list>
            </v-window-item>
        </v-window>
    </v-container>

    <v-dialog v-model="loadoutDialog" max-width="500">
      <v-card v-if="selectedTechnique">
        <v-card-title>Equipar {{ selectedTechnique.name }}</v-card-title>
        <v-card-text>
          <v-radio-group label="Loadout">
            <v-radio v-for="mode in gameModes" :key="mode" :label="mode" :value="mode"></v-radio>
          </v-radio-group>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="loadoutDialog = false">Cancelar</v-btn>
          <v-btn color="blue darken-1" @click="loadoutDialog = false">Equipar</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </GameLayout>
</template>
