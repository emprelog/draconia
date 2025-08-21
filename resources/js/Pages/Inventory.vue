<script setup>
import GameLayout from '@/Layouts/GameLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const categories = [
  'Capacete', 'Armadura', 'Calças', 'Botas', 'Luvas', 'Amuleto', 'Anel', 'Cinto', 'Arma', 'Escudo'
];

const items = ref([
  { id: 1, name: 'Capuz do Iniciado', evolution: 5, category: 'Capacete' },
  { id: 2, name: 'Peitoral de Couro', evolution: 3, category: 'Armadura' },
  { id: 3, name: 'Calças de Pano', evolution: 2, category: 'Calças' },
  { id: 4, name: 'Botas de Viagem', evolution: 7, category: 'Botas' },
  { id: 5, name: 'Luvas de Caça', evolution: 1, category: 'Luvas' },
]);

const evolutionDialog = ref(false);
const selectedItem = ref(null);

const openEvolutionDialog = (item) => {
  selectedItem.value = item;
  evolutionDialog.value = true;
};

</script>

<template>
  <GameLayout title="Inventário">
    <Head title="Inventário" />
    <v-container>
        <v-tabs v-model="tab" bg-color="primary">
            <v-tab v-for="category in categories" :key="category" :value="category">{{ category }}</v-tab>
        </v-tabs>
        <v-window v-model="tab">
            <v-window-item v-for="category in categories" :key="category" :value="category">
                <v-row>
                    <v-col v-for="item in items.filter(i => i.category === category)" :key="item.id" cols="6" sm="4" md="3">
                        <v-card @click="openEvolutionDialog(item)" hover>
                            <v-img :src="`https://picsum.photos/200/300?random=${item.id}`" height="150px"></v-img>
                            <v-card-title>{{ item.name }}</v-card-title>
                            <v-card-subtitle>+{{ item.evolution }}</v-card-subtitle>
                        </v-card>
                    </v-col>
                </v-row>
            </v-window-item>
        </v-window>
    </v-container>

    <v-dialog v-model="evolutionDialog" max-width="500">
      <v-card v-if="selectedItem">
        <v-card-title>Evoluir {{ selectedItem.name }} +{{ selectedItem.evolution }}</v-card-title>
        <v-card-text>
          <p>Custo de Elixir: 100</p>
          <p>Chance de Sucesso: 80%</p>
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="blue darken-1" text @click="evolutionDialog = false">Cancelar</v-btn>
          <v-btn color="blue darken-1" @click="evolutionDialog = false">Evoluir</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </GameLayout>
</template>
