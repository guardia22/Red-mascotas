<template>
    <jet-form-section @submitted="updateProfileInformation">
        <template #title>
            Información de Perfil
        </template>

        <template #description>
            Actualice la información de perfil
        </template>

        <template #form>
            <!-- Profile Photo -->
            <div class="col-span-6 sm:col-span-4" v-if="$page.props.jetstream.managesProfilePhotos">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            ref="photo"
                            @change="updatePhotoPreview">

                <jet-label for="photo" value="Foto" />

                <!-- Current Profile Photo -->
                <div class="mt-2" v-show="! photoPreview">
                    <img :src="user.profile_photo_url" :alt="user.name" class=" h-96 w-96 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" v-show="photoPreview">
                    <span class="block w-96 h-96 bg-cover bg-no-repeat bg-center"
                          :style="'background-image: url(\''+ photoPreview + '\');'">
                    </span>
                </div>

                <jet-secondary-button class="mt-2 mr-2" type="button" @click.prevent="selectNewPhoto">
                    Subir foto de perfil
                </jet-secondary-button>

                <jet-secondary-button type="button" class="mt-2" @click.prevent="deletePhoto" v-if="user.profile_photo_path">
                    Quitar foto
                </jet-secondary-button>

                <jet-input-error :message="form.errors.photo" class="mt-2" />

                 <jet-secondary-button class="mt-2 mr-2" type="button" @click.prevent="selectNewPhoto">
                    Subir imagen
                </jet-secondary-button>

            </div>

            <!-- Name -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="name" value="Nombre" />
                <jet-input id="name" type="text" class="mt-1 block w-full" v-model="form.name" autocomplete="name" />
                <jet-input-error :message="form.errors.name" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="email" value="Correo Electrónico" />
                <jet-input id="email" type="email" class="mt-1 block w-full" v-model="form.email" />
                <jet-input-error :message="form.errors.email" class="mt-2" />
            </div>

            <!-- type pet -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="type_pet" value="Tipo de mascota" />
                <jet-input id="type_pet" type="text" class="mt-1 block w-full" v-model="form.type_pet" autocomplete="name" />
                <jet-input-error :message="form.errors.type_pet" class="mt-2" />
            </div>

            <!-- Name pet -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="namepet" value="Nombre de la mascota" />
                <jet-input id="namepet" type="text" class="mt-1 block w-full" v-model="form.namepet" autocomplete="namepet" />
                <jet-input-error :message="form.errors.namepet" class="mt-2" />
            </div>

            <!-- Birhtday -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="birthday" value="Fecha de nacimiento de la mascota" />
                <jet-input id="birthday"  class="mt-1 block w-full" v-model="form.birthday" autocomplete="name" />
                <jet-input-error :message="form.errors.birthday" class="mt-2" />
            </div>

            
            <!-- sex pet -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="sexo" value="Sexo de la mascota" />
                <jet-input id="sexo" type="text" class="mt-1 block w-full" v-model="form.sexo" autocomplete="sexo" />
                <jet-input-error :message="form.errors.sexo" class="mt-2" />
            </div>

        </template>

        <template #actions>
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                Guardado.
            </jet-action-message>

            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Guardar
            </jet-button>
        </template>
    </jet-form-section>
</template>

<script>
    import { defineComponent } from 'vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetFormSection from '@/Jetstream/FormSection.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetInputError from '@/Jetstream/InputError.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetActionMessage from '@/Jetstream/ActionMessage.vue'
    import JetSecondaryButton from '@/Jetstream/SecondaryButton.vue'

    export default defineComponent({
        components: {
            JetActionMessage,
            JetButton,
            JetFormSection,
            JetInput,
            JetInputError,
            JetLabel,
            JetSecondaryButton,
        },

        props: ['user'],

        data() {
            return {
                form: this.$inertia.form({
                    _method: 'PUT',
                    name: this.user.name,
                    email: this.user.email,
                    photo: null,
                    type_pet: this.user.type_pet,
                    namepet: this.user.namepet,
                    birthday: this.user.birthday,
                    sexo: this.user.sexo,
                }),

                photoPreview: null,
            }
        },

        methods: {
            updateProfileInformation() {
                if (this.$refs.photo) {
                    this.form.photo = this.$refs.photo.files[0]
                }

                this.form.post(route('user-profile-information.update'), {
                    errorBag: 'updateProfileInformation',
                    preserveScroll: true,
                    onSuccess: () => (this.clearPhotoFileInput()),
                });
            },

            selectNewPhoto() {
                this.$refs.photo.click();
            },

            updatePhotoPreview() {
                const photo = this.$refs.photo.files[0];

                if (! photo) return;

                const reader = new FileReader();

                reader.onload = (e) => {
                    this.photoPreview = e.target.result;
                };

                reader.readAsDataURL(photo);
            },

            deletePhoto() {
                this.$inertia.delete(route('current-user-photo.destroy'), {
                    preserveScroll: true,
                    onSuccess: () => {
                        this.photoPreview = null;
                        this.clearPhotoFileInput();
                    },
                });
            },

            clearPhotoFileInput() {
                if (this.$refs.photo?.value) {
                    this.$refs.photo.value = null;
                }
            },
        },
    })
</script>
