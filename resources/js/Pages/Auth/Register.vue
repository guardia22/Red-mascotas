<template>
    <Head title="Register" />

    <authentication-fondo>
        <template #logomascota>
            <authentication-fondo-mascota />
        </template>

        <jet-validation-errors class="mb-4" />

        <form @submit.prevent="submit">
            <!-- <h1>Registrate es fácil y rápido</h1> -->
            <div>
                <!-- <jet-label for="name" value="Nombre" /> -->
                <jet-input id="name" type="text" placeholder="Nombre" class="mt-1 block w-full bg-gray-50" v-model="form.name" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <!-- <jet-label for="email" value="Correo electrónico" /> -->
                <jet-input id="email" type="email" placeholder="Correo electrónico" class="mt-1 block w-full bg-gray-50" v-model="form.email" required />
            </div>

            <div class="mt-4">
                <!--<jet-label for="password" value="Contraseña" /> -->
                <jet-input id="password" type="password" placeholder="Contraseña" class="mt-1 block w-full bg-gray-50" v-model="form.password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <!--<jet-label for="password_confirmation" value="Confirm Password" /> -->
                <jet-input id="password_confirmation" type="password" placeholder="Confirmar Contraseña" class="mt-1 block w-full bg-gray-50" v-model="form.password_confirmation" required autocomplete="new-password" />
            </div>
    <br>
    <h1 align="center">Mascota</h1>
    <div class="lg:col-span-2">
    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
        <div class="md:col-span-3">
      <jet-label for="tipo" value="Tipo de mascota" />
        <select v-model="form.type_pet" class="mt-1 block w-full border-gray-300 bg-gray-100 py-2 px-4 pr-8  rounded  focus:outline-none">
                    <option value="perro">Perro</option>
                    <option value="gato">Gato</option>
                    <option value="otros">Otros</option>
        </select>
        </div>

        <div class="md:col-span-2">
            <!-- <div class="mt-4"> -->
                <jet-label for="namepet" value="Nombre" />
                <jet-input id="namepet" type="text" placeholder="Nombre" class="mt-1 block w-full bg-gray-100 text-gray-700" v-model="form.namepet" required autofocus autocomplete="namepet" />
            </div>
     </div>
    </div>
    <div class="lg:col-span-2">
    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
            <div class="md:col-span-3">
                <jet-label for="fecha" value="Fecha de nacimiento" />
                <jet-input  type="date" max="2021-10-30" class="mt-1 block w-full bg-gray-100 text-gray-700" v-model="form.birthday" required autofocus/>
            </div>   
            <div class="md:col-span-2">
               <jet-label for="sexo" value="Sexo" />
        <select v-model="form.sexo" class="mt-1 block w-full border-gray-300 bg-gray-100 py-2 px-4 pr-8  rounded  focus:outline-none">
                    <option value="macho">Macho</option>
                    <option value="hembra">Hembra</option>
        </select> 
            </div> 
            <!-- <div class="mt-4">
                <jet-label for="agepet" value="Edad de la mascota" />
                <jet-input id="agepet" type="number" min="0" max="20" placeholder="Ingresar edad" class="mt-1 block w-1/2 bg-gray-100 text-gray-700" v-model="form.agepet" required autofocus autocomplete="agepet" />
            </div> -->
    </div>
    </div>
            <div class="mt-4" v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature">
                <jet-label for="terms">
                    <div class="flex items-center">
                        <jet-checkbox name="terms" id="terms" v-model:checked="form.terms" />

                        <div class="ml-2">
                            I agree to the <a target="_blank" :href="route('terms.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>
                        </div>
                    </div>
                </jet-label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                    ¿Tienes una cuenta?
                </Link>

                <jet-button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Registrar
                </jet-button>
            </div>
        </form>


           <!-- Notificacion de registro con exito! -->
    <template>
        <div v-cloak class="h-full">
            <div class="absolute flex mas-w-xs w-full mt-4 mr-4 top-0 right-0 bg-white rounded shadow p-4">
              <div class="mr-2">icons</div>  
              <div class="flex-1">message</div>  
              <div class="ml-2">button</div>  
            </div>
        </div>

        <header class="flex justify-between flex-shrink-0 bg-gray-700">
            <div class="flex-shrink-0 px-4 py-2 lg:bg-gray-800 lg:w-64">
                <Link href="/" class="flex items-center">
                  <icon name="logo"></icon>
                  <span class="hidden pl-2 text-xl font-bold tracking-tight text-white md:inline-block">LinertiaJS</span>
                </Link>
            </div>

            <div class="flex items-center justify-between flex-shrink-0 px-4 py-2 bg-gray-700 lg:flex-1 focus:outline-none"></div>
              <nav class="hidden lg:flex">
                  <Link href="/" class="inline-block px-3 py-2 text-sm font-medium leading-noce text-whote rounded-lg">
                     Home
                  </Link>

              </nav>
        </header>
    </template>
    </authentication-fondo>

</template>

<script>
    import { defineComponent } from 'vue'
    import AuthenticationCard from '@/components/AuthenticationCard.vue'
    import AuthenticationCardLogo from '@/components/AuthenticationCardLogo.vue'
    import AuthenticationFondo from '@/components/AuthenticationFondo.vue'
    import AuthenticationFondoMascota from '@/components/AuthenticationFondoMascota.vue'
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
            JetButton,
            JetInput,
            JetCheckbox,
            JetLabel,
            JetValidationErrors,
            Link,
        },

        data() {
            return {
                form: this.$inertia.form({
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    terms: false,
                    namepet: '',
                    type_pet:'perro',
                    birthday: '',
                    sexo: 'macho'
                })
            }
        },

        methods: {
            submit() {
                this.form.post(this.route('register'), {
                    onFinish: () => this.form.reset('password', 'password_confirmation'),
                })
            }
        }
    })
</script>
