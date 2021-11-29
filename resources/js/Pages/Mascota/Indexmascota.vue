<template>
    <app-layout title="Dashboard">
        <!-- <template #header>
            <h2 class="font-semibold text-xl text-white leading-tight">
            Mascota
            </h2>
        </template> -->
                <!-- <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> -->
                    <!-- <welcome /> -->
                   
                    <!-- {{variable1}}
                    {{user.name}}
                    {{user.email}}
                    {{user.type_pet}}
                    {{user.namepet}} -->
                   
                 <!-- </div>
            </div>
        </div> -->
        <!-- This example requires Tailwind CSS v2.0+ -->
<div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      <!-- {{variable1}} -->
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      <!-- Datos de la Mascota -->
      
    </p>
  </div>
  <img :src="user.profile_photo_url" :alt="user.name" class=" h-80  w-screen object-cover" align="left">
  <div class="border-solid border-gray-200">
    <!-- <button class="w-1/2 flex items-center justify-center rounded-md border border-gray-300" type="button">Me gusta</button> -->
    <button class="w-full flex items-center justify-center bg-green-700 text-gray-50 rounded-md border border-gray-300" type="button">Agregar a favoritos</button>
    <dl>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Nombre del dueño
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{user.name}}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Correo electrónico
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
           {{user.email}}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Tipo de mascota
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
           {{user.type_pet}}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Nombre de la mascota
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{user.namepet}}
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Fecha de nacimiento
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{user.birthday}}
        </dd>
      </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Sexo de la mascota
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{user.sexo}}
        </dd>
      </div>

      <!-- <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Edad de la mascota
        </dt>
      <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          {{user.agepet}}
        </dd>
      </div> -->
  
      

    </dl>
  </div>
</div>

    </app-layout>
    <p> 
</p>
</template>



<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    // import Welcome from '@/Jetstream/Welcome.vue'

    export default defineComponent({
        props: ['variable1', 'user'],
        components: {
            AppLayout,
            // Welcome,
        },
    })
</script>