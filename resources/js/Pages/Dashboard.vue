<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="text-center text-2xl font-bold leading-7 text-gray-300 sm:text-3xl sm:truncate py-4 bg-gradient-to-1 from-indigo-500 ">RedMascotas</h2>

             <!-- Required form plugin -->
             <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
             <!-- Required font awesome -->
             <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

             <!-- <div class="relative flex w-full flex-wrap items-stretch mb-3">
               <span
                class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                <i class="fas fa-search"></i>
               </span>
                <input type="text" placeholder="Buscar"
                class="px-3 py-3 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full pl-10" />
             </div> -->

             
             <!-- <form method="get" class="flex mt-2"  :action="route('dashboard')">
                   <jet-input  name="search" placeholder="Buscar" type="text" />
                   <button type="submit" class="w-auto bg-red-700 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Buscar</button>
             </form> -->
         
        </template>
            <br>
           
           <!-- <div class="relative flex w-1/2 flex-wrap mb-3 px-16">
               <span
                class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3">
                <i class="fas fa-search"></i>
               </span>
                <input type="text" placeholder="Buscar"
                class="px-3 py-3 placeholder-gray-400 text-gray-600 relative bg-white bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring w-full pl-10" />
           </div> -->

            <div class="py-2 px-16">
                <form method="get" class="flex mt-2"  :action="route('dashboard')">
                   <input  name="search" placeholder="Buscar" type="text"/>
                   <button type="submit" class="w-auto bg-red-600 hover:bg-red-800  shadow-xl font-medium text-white px-4 py-2 items-center">Buscar</button>
                </form>
                <br>
                <div class="grid grid-cols-4 gap-7 max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> -->
                        <tr v-for="p in perfiles" :key="p.id"> 
                                <img class="h-60 w-80  object cover" :src="p.profile_photo_url" alt="abc">
                                <!-- <td class="p-3 border">{{ p.id }}</td> -->
                                <!-- <td class="p-3 border">{{ p.name }}</td> -->
                                <!-- <td class="p-3 border">{{ p.email }}</td> -->
                                <div class="grid grid-cols-2 gap-4">
                                  <h2 class="flex-auto text-xl font-medium text-gray-500">
                                  <td class="p-3">{{ p.namepet}}</td>
                                  </h2>
                                  <div class="text-xl font-medium text-gray-500">
                                  <td class="p-3">{{ p.sexo}}</td>
                                </div>
                                </div>
                                <div class="flex space-x-3 mb-4 text-sm font-medium">
                                     <div class="flex-auto flex space-x-3">
                                       <a 
                                         :href="route('mascota.otraMascota', {perfil:p}) "
                                         class="flex-shrink-0 bg-purple-600 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-purple-700 focus:outling-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200" type="button">
                                         Ver perfil
                                       </a>
                                         <!-- <button class="w-1/2 flex items-center justify-center rounded-md bg-green-800 text-white" type="submit">Ver perfil</button> -->
                                         <button class="w-1/2 flex items-center justify-center rounded-md border border-gray-300" type="button">Seguir</button>
                                     </div>
                                         <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-gray-400 border border-gray-300" type="button" aria-label="like">
                                           <svg width="20" height="20" fill="currentColor">
                                           <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                                           </svg>
                                         </button>
                                         
                                </div>
                        </tr>
                </div>
            </div>
            
           
           <!-- <paginator :paginator="perfiles" /> -->
    </app-layout>

<!-- Required font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  
  <footer class="text-gray-600 body-font bg-gray-700">
    <div
      class="container px-5 py-8 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
      <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
        <a href="" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-200">
         <i class="fas fa-dog"></i>
          <span class="ml-3 text-xl">RedMascotas</span>
        </a>
        <p class="mt-2 text-sm text-gray-400">La red de mascotas y servicios para tu mascota</p>
      </div>
      <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-200 tracking-widest text-sm mb-3">CATEGORIES</h2>
         
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-200 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            
          </nav>
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
 
        </div>
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-gray-200 tracking-widest text-sm mb-3">CATEGORIES</h2>
          <nav class="list-none mb-10">
            <li>
              <a href="" class="text-gray-600 hover:text-gray-800">First Link</a>
            </li>
          </nav>
        </div>
      </div>
    </div>
    <div class="bg-gray-800">
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class="text-gray-200 text-sm text-center sm:text-left">© 2021 Copyright:
          <a href="https://www.tailwind-elements.com/" class="text-gray-300 ml-1" target="_blank">RedMascotas</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
          <a href="" class="text-gray-200">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="ml-3 text-gray-200">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="ml-3 text-gray-200">
            <i class="fab fa-youtube"></i>
          </a>
          <a href="" class="ml-3 text-gray-200">
            <i class="fab fa-instagram"></i>
          </a>
        </span>
      </div>
    </div>
  </footer>
</template>


<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import JetButton from '@/Jetstream/Button.vue'
    import JetInput from "@/Jetstream/Input.vue";
    import Paginator from '@/components/Paginator.vue';
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        props: ['perfiles'],
        data() {
          return {
            modalOpen: false,
            selectedUser: Object,
          };
        },
        components: {
            AppLayout,
            // Welcome,
            JetInput,
            JetButton,
            Paginator,
            Link
        },
        created() {
            console.log(this.perfiles)
        }
    })
</script>
