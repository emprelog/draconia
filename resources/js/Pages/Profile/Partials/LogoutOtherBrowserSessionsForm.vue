<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

defineProps({
    sessions: Array,
});

const confirmingLogout = ref(false);
const passwordInput = ref(null);

const form = useForm({
    password: '',
});

const confirmLogout = () => {
    confirmingLogout.value = true;

    setTimeout(() => passwordInput.value.focus(), 250);
};

const logoutOtherBrowserSessions = () => {
    form.delete(route('other-browser-sessions.destroy'), {
        preserveScroll: true,
        onSuccess: () => closeModal(),
        onError: () => passwordInput.value.focus(),
        onFinish: () => form.reset(),
    });
};

const closeModal = () => {
    confirmingLogout.value = false;

    form.reset();
};
</script>

<template>
    <v-card>
        <v-card-title>Browser Sessions</v-card-title>
        <v-card-subtitle>Manage and log out your active sessions on other browsers and devices.</v-card-subtitle>
        <v-card-text>
            <div class="max-w-xl text-sm text-gray-600">
                If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.
            </div>

            <!-- Other Browser Sessions -->
            <div v-if="sessions.length > 0" class="mt-5 space-y-6">
                <div v-for="(session, i) in sessions" :key="i" class="flex items-center">
                    <div>
                        <v-icon v-if="session.agent.is_desktop" size="32">mdi-desktop-mac</v-icon>
                        <v-icon v-else size="32">mdi-cellphone</v-icon>
                    </div>

                    <div class="ms-3">
                        <div class="text-sm text-gray-600">
                            {{ session.agent.platform ? session.agent.platform : 'Unknown' }} - {{ session.agent.browser ? session.agent.browser : 'Unknown' }}
                        </div>

                        <div>
                            <div class="text-xs text-gray-500">
                                {{ session.ip_address }},

                                <span v-if="session.is_current_device" class="text-green-500 font-semibold">This device</span>
                                <span v-else>Last active {{ session.last_active }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center mt-5">
                <v-btn @click="confirmLogout">
                    Log Out Other Browser Sessions
                </v-btn>

                <v-snackbar :model-value="form.recentlySuccessful" color="success" timeout="2000">
                    Done.
                </v-snackbar>
            </div>

            <!-- Log Out Other Devices Confirmation Modal -->
            <v-dialog v-model="confirmingLogout" max-width="500">
                <v-card>
                    <v-card-title>
                        Log Out Other Browser Sessions
                    </v-card-title>

                    <v-card-text>
                        Please enter your password to confirm you would like to log out of your other browser sessions across all of your devices.

                        <div class="mt-4">
                            <v-text-field
                                ref="passwordInput"
                                v-model="form.password"
                                label="Password"
                                type="password"
                                autocomplete="current-password"
                                @keyup.enter="logoutOtherBrowserSessions"
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
                            color="primary"
                            :loading="form.processing"
                            @click="logoutOtherBrowserSessions"
                        >
                            Log Out Other Browser Sessions
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-dialog>
        </v-card-text>
    </v-card>
</template>