<template>
    <Head title="Inicio" />
     <!-- <img class="h-8 w-auto sm:h-10" src="https://thumbs.dreamstime.com/b/huellas-de-p%C3%A1gina-perro-icono-y-gato-mascota-espacio-cachorro-pie-aislado-en-fondo-blanco-paro-forma-silueta-negra-pegatina-lindo-202259604.jpg" alt="" /> -->
   <authentication-card>
        <template #logo>
            <authentication-card-logo />
        </template>
        <jet-validation-errors class="mb-4" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <jet-label for="email" value="Correo electrónico" />
                <jet-input id="email" type="email"  placeholder="Ingresar correo" class="mt-1 block w-full bg-gray-50" v-model="form.email" required autofocus />
            </div>

            <div class="mt-4">
                <jet-label for="password" value="Contraseña" />
                <jet-input id="password" type="password" placeholder="Ingresar contraseña" class="mt-1 block w-full bg-gray-50" v-model="form.password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <jet-checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Recuérdame</span>
                </label>
            </div>

            <div class="w-full flex justify-center flex items-center justify-end mt-4">
                <!-- <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    ¿Olvidaste tu contraseña?
                </Link> -->

                <jet-button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Iniciar sesión
                </jet-button>
            </div>
        </form>
        
        <template #register>
          <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
              <div class="flex justify-center">
                  <div ></div>
                   <span class="mr-4 text-gray-600">¿No tienes cuenta?</span>
                   <Link  :href="route('register')" class="underline text-gray-600 hover:text-gray-900">
                    Registrate
                   </Link>
             </div>
          </div>
        </template>
    </authentication-card>

    <!-- <authentication-inicio>
        <template #fondomascota>
            <authentication-inicio-fondo />
        </template>
        <jet-validation-errors class="mb-4" />
    </authentication-inicio> -->
    
    
</template>



<script>
    import { defineComponent } from 'vue'
    import AuthenticationCard from '@/components/AuthenticationCard.vue'
    import AuthenticationCardLogo from '@/components/AuthenticationCardLogo.vue'
    import AuthenticationFondo from '@/components/AuthenticationFondo.vue'
    import AuthenticationFondoMascota from '@/components/AuthenticationFondoMascota.vue'
    // import AuthenticationInicio from '@/components/AuthenticationInicio.vue'
    // import AuthenticationInicioFondo from '@/components/AuthenticationInicioFondo.vue'
    // import Fondo from '@/components/Fondo.vue'
    // import FondoPrincipal from '@/components/FondoPrincipal.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from '@/Jetstream/Input.vue'
    import JetCheckbox from '@/Jetstream/Checkbox.vue'
    import JetLabel from '@/Jetstream/Label.vue'
    import JetValidationErrors from '@/Jetstream/ValidationErrors.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';


    export default defineComponent({
        components: {
            Head,
            AuthenticationCard,
            AuthenticationCardLogo,
            AuthenticationFondo,
            AuthenticationFondoMascota,
            // AuthenticationInicio,
            // AuthenticationInicioFondo,
            // Fondo,
            // FondoPrincipal,
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            Link
               
        },

        props: {
            canResetPassword: Boolean,
            status: String
        },

        data() {
            return {
                form: this.$inertia.form({
                    email: '',
                    password: '',
                    remember: false
                })
            }
        },

        methods: {
            submit() {
                this.form
                    .transform(data => ({
                        ... data,
                        remember: this.form.remember ? 'on' : ''
                    }))
                    .post(this.route('login'), {
                        onFinish: () => this.form.reset('password'),
                    })
            }
        }
    })
</script>
