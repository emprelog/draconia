<script setup>
import GameLayout from '@/Layouts/GameLayout.vue';
import DeleteUserForm from '@/Pages/Profile/Partials/DeleteUserForm.vue';
import LogoutOtherBrowserSessionsForm from '@/Pages/Profile/Partials/LogoutOtherBrowserSessionsForm.vue';
import TwoFactorAuthenticationForm from '@/Pages/Profile/Partials/TwoFactorAuthenticationForm.vue';
import UpdatePasswordForm from '@/Pages/Profile/Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm.vue';
import { ref } from 'vue';

defineProps({
    confirmsTwoFactorAuthentication: Boolean,
    sessions: Array,
});

const badges = ref([
    { name: 'Campeão de Arena', icon: 'mdi-shield-star' },
    { name: 'Lâmina do Torneio', icon: 'mdi-sword-cross' },
    { name: 'Último Golpe', icon: 'mdi-skull' },
]);

const emblems = ref([
    { name: 'Emblema 18', icon: 'mdi-star-circle' },
]);

const highlights = ref([
    'Venceu a Arena de Verão.',
    'Top 10 no Torneio da Primavera.',
    'Top Dano na Invasão do Dragão Negro.',
]);

</script>

<template>
    <GameLayout title="Profile">
        <v-container>
            <v-row>
                <v-col cols="12">
                    <v-card class="mb-4">
                        <v-card-title>Conquistas</v-card-title>
                        <v-card-text>
                            <v-chip v-for="badge in badges" :key="badge.name" class="ma-2" color="primary" label>
                                <v-icon start :icon="badge.icon"></v-icon>
                                {{ badge.name }}
                            </v-chip>
                            <v-chip v-for="emblem in emblems" :key="emblem.name" class="ma-2" color="secondary" label>
                                <v-icon start :icon="emblem.icon"></v-icon>
                                {{ emblem.name }}
                            </v-chip>
                        </v-card-text>
                    </v-card>

                    <v-card class="mb-4">
                        <v-card-title>Destaques Pessoais</v-card-title>
                        <v-list>
                            <v-list-item v-for="(highlight, index) in highlights" :key="index">
                                <v-list-item-title>{{ highlight }}</v-list-item-title>
                            </v-list-item>
                        </v-list>
                    </v-card>

                    <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                        <UpdateProfileInformationForm :user="$page.props.auth.user" />
                    </div>

                    <div v-if="$page.props.jetstream.canUpdatePassword">
                        <UpdatePasswordForm class="mt-10 sm:mt-0" />
                    </div>

                    <div v-if="$page.props.jetstream.canManageTwoFactorAuthentication">
                        <TwoFactorAuthenticationForm
                            :requires-confirmation="confirmsTwoFactorAuthentication"
                            class="mt-10 sm:mt-0"
                        />
                    </div>

                    <LogoutOtherBrowserSessionsForm :sessions="sessions" class="mt-10 sm:mt-0" />

                    <template v-if="$page.props.jetstream.hasAccountDeletionFeatures">
                        <DeleteUserForm class="mt-10 sm:mt-0" />
                    </template>
                </v-col>
            </v-row>
        </v-container>
    </GameLayout>
</template>