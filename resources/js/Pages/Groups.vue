<script setup>
import GameLayout from '@/Layouts/GameLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const group = ref({
  name: 'Os Draconianos',
  sigla: 'DRG',
  avatar: 'https://i.pravatar.cc/128?u=DRG',
  description: 'Um grupo de jogadores focados em dominar a arena.',
});

const members = ref([
  { id: 1, name: 'Player 1', role: 'Líder' },
  { id: 2, name: 'Player 2', role: 'Membro' },
  { id: 3, name: 'Player 3', role: 'Membro' },
]);

const wallPosts = ref([
  { id: 1, author: 'Player 1', text: 'Preparem-se para a arena de hoje!' },
  { id: 2, author: 'Player 2', text: 'Estou pronto!' },
]);

const newPost = ref('');

</script>

<template>
  <GameLayout title="Grupo">
    <Head title="Grupo" />
    <v-container>
      <v-row>
        <v-col cols="12" md="4">
          <v-card>
            <v-img :src="group.avatar" height="200px"></v-img>
            <v-card-title>{{ group.name }} |{{ group.sigla }}|</v-card-title>
            <v-card-text>{{ group.description }}</v-card-text>
          </v-card>
          <v-card class="mt-4">
            <v-card-title>Membros</v-card-title>
            <v-list>
              <v-list-item v-for="member in members" :key="member.id">
                <v-list-item-title>{{ member.name }}</v-list-item-title>
                <v-list-item-subtitle>{{ member.role }}</v-list-item-subtitle>
              </v-list-item>
            </v-list>
          </v-card>
        </v-col>
        <v-col cols="12" md="8">
          <v-card>
            <v-card-title>Mural do Grupo</v-card-title>
            <v-card-text>
              <v-list>
                <v-list-item v-for="post in wallPosts" :key="post.id">
                  <v-list-item-title>{{ post.author }}</v-list-item-title>
                  <v-list-item-subtitle>{{ post.text }}</v-list-item-subtitle>
                </v-list-item>
              </v-list>
              <v-textarea v-model="newPost" label="Nova Postagem" rows="2" class="mt-4"></v-textarea>
              <v-btn color="primary" block>Postar</v-btn>
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </GameLayout>
</template>
