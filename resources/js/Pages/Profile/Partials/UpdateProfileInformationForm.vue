<script setup>
import { ref } from 'vue';
import { Link, router, useForm } from '@inertiajs/vue3';

const props = defineProps({
    user: Object,
});

const form = useForm({
    _method: 'PUT',
    name: props.user.name,
    email: props.user.email,
    photo: null,
});

const verificationLinkSent = ref(null);
const photoPreview = ref(null);
const photoInput = ref(null);

const updateProfileInformation = () => {
    if (photoInput.value) {
        form.photo = photoInput.value.files[0];
    }

    form.post(route('user-profile-information.update'), {
        errorBag: 'updateProfileInformation',
        preserveScroll: true,
        onSuccess: () => clearPhotoFileInput(),
    });
};

const sendEmailVerification = () => {
    verificationLinkSent.value = true;
};

const selectNewPhoto = () => {
    photoInput.value.click();
};

const updatePhotoPreview = () => {
    const photo = photoInput.value.files[0];

    if (! photo) return;

    const reader = new FileReader();

    reader.onload = (e) => {
        photoPreview.value = e.target.result;
    };

    reader.readAsDataURL(photo);
};

const deletePhoto = () => {
    router.delete(route('current-user-photo.destroy'), {
        preserveScroll: true,
        onSuccess: () => {
            photoPreview.value = null;
            clearPhotoFileInput();
        },
    });
};

const clearPhotoFileInput = () => {
    if (photoInput.value?.value) {
        photoInput.value.value = null;
    }
};
</script>

<template>
    <v-card>
        <v-card-title>Profile Information</v-card-title>
        <v-card-subtitle>Update your account's profile information and email address.</v-card-subtitle>
        <v-card-text>
            <!-- Profile Photo -->
            <div v-if="$page.props.jetstream.managesProfilePhotos">
                <!-- Profile Photo File Input -->
                <input
                    id="photo"
                    ref="photoInput"
                    type="file"
                    class="hidden"
                    @change="updatePhotoPreview"
                >

                <v-label for="photo">Photo</v-label>

                <!-- Current Profile Photo -->
                <div v-show="! photoPreview" class="mt-2">
                    <img :src="user.profile_photo_url" :alt="user.name" class="rounded-full size-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div v-show="photoPreview" class="mt-2">
                    <span
                        class="block rounded-full size-20 bg-cover bg-no-repeat bg-center"
                        :style="'background-image: url(\'" + photoPreview + "\');'"
                    />
                </div>

                <v-btn class="mt-2 me-2" @click.prevent="selectNewPhoto">
                    Select A New Photo
                </v-btn>

                <v-btn
                    v-if="user.profile_photo_path"
                    class="mt-2"
                    @click.prevent="deletePhoto"
                >
                    Remove Photo
                </v-btn>

                <div class="text-red-500 text-sm mt-2">{{ form.errors.photo }}</div>
            </div>

            <!-- Name -->
            <v-text-field
                id="name"
                v-model="form.name"
                label="Name"
                required
                autocomplete="name"
                :error-messages="form.errors.name"
            />

            <!-- Email -->
            <v-text-field
                id="email"
                v-model="form.email"
                label="Email"
                type="email"
                required
                autocomplete="username"
                :error-messages="form.errors.email"
            />

            <div v-if="$page.props.jetstream.hasEmailVerification && user.email_verified_at === null">
                <p class="text-sm mt-2">
                    Your email address is unverified.

                    <Link
                        :href="route('verification.send')"
                        method="post"
                        as="button"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        @click.prevent="sendEmailVerification"
                    >
                        Click here to re-send the verification email.
                    </Link>
                </p>

                <div v-show="verificationLinkSent" class="mt-2 font-medium text-sm text-green-600">
                    A new verification link has been sent to your email address.
                </div>
            </div>
        </v-card-text>
        <v-card-actions>
            <v-snackbar :model-value="form.recentlySuccessful" color="success" timeout="2000">
                Saved.
            </v-snackbar>
            <v-spacer></v-spacer>
            <v-btn :loading="form.processing" @click="updateProfileInformation">
                Save
            </v-btn>
        </v-card-actions>
    </v-card>
</template>