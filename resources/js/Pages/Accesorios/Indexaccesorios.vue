<template>
    <app-layout title="Dashboard">
        <template #header1>
            <h2 class="font-semibold text-xl text-black leading-tight">
                Accesorios para tu mascota
            </h2>
            <br>
       
<!-- Required form plugin -->
          <link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
          <!-- Required font awesome -->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
            <div class="flex border-grey-light border">
             <input class="w-full" type="text" placeholder="Buscar...">
             <button class="bg-grey-lightest border-grey border-l shadow hover:bg-grey-lightest">
             <span class="w-auto flex justify-end items-center text-grey p-2 hover:text-grey-darkest">
                <i class="fas fa-search"></i>
             </span>
             </button>
            </div>
        </template>
    <!-- <div class="max-w-sm p-8">
        <label class="inline-flex items-center">
    <input class="text-indigo-500 w-6 h-6 mr-2 focus:ring-indigo-400 focus:ring-opacity-25 border border-gray-300 rounded" type="checkbox" />
    Perro
  </label>
 <br>
       <label class="inline-flex items-center">
    <input class="text-indigo-500 w-6 h-6 mr-2 focus:ring-indigo-400 focus:ring-opacity-25 border border-gray-300 rounded" type="checkbox" />
    Gato
  </label>
  <br>
       <label class="inline-flex items-center">
    <input class="text-indigo-500 w-6 h-6 mr-2 focus:ring-indigo-400 focus:ring-opacity-25 border border-gray-300 rounded" type="checkbox" />
    Casa
  </label>
  <br>
       <label class="inline-flex items-center">
    <input class="text-indigo-500 w-6 h-6 mr-2 focus:ring-indigo-400 focus:ring-opacity-25 border border-gray-300 rounded" type="checkbox" />
    Juguete
  </label>
</div>  -->
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <welcome />
                </div>
            </div>
        </div>
 
    </app-layout>
    
</template>



<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/components/Welcome.vue'
    // import Paginator from '@/componets/Paginator.vue'


    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
            
            // Paginator,
                
        },
    })
</script>