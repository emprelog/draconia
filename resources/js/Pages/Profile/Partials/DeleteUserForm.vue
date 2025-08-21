<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

const confirmingUserDeletion = ref(false);
const passwordInput = ref(null);

const form = useForm({
    password: '',
});

const confirmUserDeletion = () => {
    confirmingUserDeletion.value = true;

    setTimeout(() => passwordInput.value.focus(), 250);
};

const deleteUser = () => {
    form.delete(route('current-user.destroy'), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
        onError: () => passwordInput.value.focus(),
        onFinish: () => form.reset(),
    });
};

const closeModal = () => {
    confirmingUserDeletion.value = false;

    form.reset();
};
</script>

<template>
    <v-card>
        <v-card-title>Delete Account</v-card-title>
        <v-card-subtitle>Permanently delete your account.</v-card-subtitle>
        <v-card-text>
            <div class="max-w-xl text-sm text-gray-600">
                Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
            </div>

            <div class="mt-5">
                <v-btn color="error" @click="confirmUserDeletion">
                    Delete Account
                </v-btn>
            </div>

            <!-- Delete Account Confirmation Modal -->
            <v-dialog v-model="confirmingUserDeletion" max-width="500">
                <v-card>
                    <v-card-title>
                        Delete Account
                    </v-card-title>

                    <v-card-text>
                        Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.

                        <div class="mt-4">
                            <v-text-field
                                ref="passwordInput"
                                v-model="form.password"
                                label="Password"
                                type="password"
                                autocomplete="current-password"
                                @keyup.enter="deleteUser"
                                :error-messages="form.errors.password"
                            />
                        </div>
                    </v-card-text>

                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn @click="closeModal">
                            Cancel
                        </v-btn>

                        <v-btn
                            color="error"
                            :loading="form.processing"
                            @click="deleteUser"
                        >
                            Delete Account
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>
        </v-card-text>
    </v-card>
</template>