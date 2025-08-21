<script setup>
import GameLayout from '@/Layouts/GameLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const diaryPosts = ref([
  {
    id: 1,
    title: 'Nova Temporada Começou!',
    content: 'A temporada de arena foi resetada e novas recompensas estão disponíveis. Boa sorte a todos os guerreiros!',
    author: 'Admin',
    comments: [
      { id: 1, author: 'Player 1', text: 'Vamos com tudo!' },
      { id: 2, author: 'Player 2', text: 'Ótimas recompensas!' },
    ],
  },
  {
    id: 2,
    title: 'Manutenção Programada',
    content: 'O servidor entrará em manutenção amanhã às 04:00 para aplicar um patch de balanceamento.',
    author: 'Admin',
    comments: [],
  },
]);

const newComment = ref('');

</script>

<template>
  <GameLayout title="Diário">
    <Head title="Diário" />
    <v-container>
      <v-row>
        <v-col v-for="post in diaryPosts" :key="post.id" cols="12">
          <v-card>
            <v-card-title>{{ post.title }}</v-card-title>
            <v-card-subtitle>Por {{ post.author }}</v-card-subtitle>
            <v-card-text>{{ post.content }}</v-card-text>
            <v-divider></v-divider>
            <v-card-title>Comentários</v-card-title>
            <v-card-text>
              <v-list>
                <v-list-item v-for="comment in post.comments" :key="comment.id">
                  <v-list-item-title>{{ comment.author }}</v-list-item-title>
                  <v-list-item-subtitle>{{ comment.text }}</v-list-item-subtitle>
                </v-list-item>
              </v-list>
              <v-textarea v-model="newComment" label="Novo Comentário" rows="2" class="mt-4"></v-textarea>
              <v-btn color="primary" block>Comentar</v-btn>
            </v-card-text>
          </v-card>
        </v-col>
      </v-row>
    </v-container>
  </GameLayout>
</template>
