<script setup>
import { ref, reactive, nextTick } from 'vue';
import { useForm } from '@inertiajs/vue3';

const emit = defineEmits(['confirmed']);

defineProps({
    title: {
        type: String,
        default: 'Confirm Password',
    },
    content: {
        type: String,
        default: 'For your security, please confirm your password to continue.',
    },
    button: {
        type: String,
        default: 'Confirm',
    },
});

const confirmingPassword = ref(false);

const form = reactive({
    password: '',
    error: '',
    processing: false,
});

const passwordInput = ref(null);

const startConfirmingPassword = () => {
    axios.get(route('password.confirmation')).then(response => {
        if (response.data.confirmed) {
            emit('confirmed');
        } else {
            confirmingPassword.value = true;

            setTimeout(() => passwordInput.value.focus(), 250);
        }
    });
};

const confirmPassword = () => {
    form.processing = true;

    axios.post(route('password.confirm'), {
        password: form.password,
    }).then(() => {
        form.processing = false;

        closeModal();
        nextTick().then(() => emit('confirmed'));

    }).catch(error => {
        form.processing = false;
        form.error = error.response.data.errors.password[0];
        passwordInput.value.focus();
    });
};

const closeModal = () => {
    confirmingPassword.value = false;
    form.password = '';
    form.error = '';
};
</script>

<template>
    <span @click="startConfirmingPassword">
        <slot />
    </span>

    <v-dialog v-model="confirmingPassword" max-width="500">
        <v-card>
            <v-card-title>{{ title }}</v-card-title>
            <v-card-text>
                {{ content }}
                <v-text-field
                    ref="passwordInput"
                    v-model="form.password"
                    label="Password"
                    type="password"
                    autocomplete="current-password"
                    @keyup.enter="confirmPassword"
                    :error-messages="form.error"
                    class="mt-4"
                />
            </v-card-text>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn @click="closeModal">Cancel</v-btn>
                <v-btn
                    color="primary"
                    :loading="form.processing"
                    @click="confirmPassword"
                >
                    {{ button }}
                </v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>
