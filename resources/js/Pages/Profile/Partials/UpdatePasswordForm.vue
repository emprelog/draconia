<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

const passwordInput = ref(null);
const currentPasswordInput = ref(null);

const form = useForm({
    current_password: '',
    password: '',
    password_confirmation: '',
});

const updatePassword = () => {
    form.put(route('user-password.update'), {
        errorBag: 'updatePassword',
        preserveScroll: true,
        onSuccess: () => form.reset(),
        onError: () => {
            if (form.errors.password) {
                form.reset('password', 'password_confirmation');
                passwordInput.value.focus();
            }

            if (form.errors.current_password) {
                form.reset('current_password');
                currentPasswordInput.value.focus();
            }
        },
    });
};
</script>

<template>
    <v-card>
        <v-card-title>Update Password</v-card-title>
        <v-card-subtitle>Ensure your account is using a long, random password to stay secure.</v-card-subtitle>
        <v-card-text>
            <v-text-field
                id="current_password"
                ref="currentPasswordInput"
                v-model="form.current_password"
                label="Current Password"
                type="password"
                autocomplete="current-password"
                :error-messages="form.errors.current_password"
            />

            <v-text-field
                id="password"
                ref="passwordInput"
                v-model="form.password"
                label="New Password"
                type="password"
                autocomplete="new-password"
                :error-messages="form.errors.password"
            />

            <v-text-field
                id="password_confirmation"
                v-model="form.password_confirmation"
                label="Confirm Password"
                type="password"
                autocomplete="new-password"
                :error-messages="form.errors.password_confirmation"
            />
        </v-card-text>
        <v-card-actions>
            <v-snackbar :model-value="form.recentlySuccessful" color="success" timeout="2000">
                Saved.
            </v-snackbar>
            <v-spacer></v-spacer>
            <v-btn :loading="form.processing" @click="updatePassword">
                Save
            </v-btn>
        </v-card-actions>
    </v-card>
</template>