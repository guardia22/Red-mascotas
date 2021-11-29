<template>
    <app-layout title="Dashboard">
        <template #header1>
            <h2 class="font-semibold text-xl text-black leading-tight">
                Adopta una mascota
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

        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <adopcion />
                </div>
            </div>
        </div>
 
    </app-layout>
    
</template>


<script>

import { defineComponent } from 'vue'
import AppLayout from '@/Layouts/AppLayout.vue'
import Adopcion from '@/components/Adopcion.vue'

    export default defineComponent({
        components: {
            AppLayout,
            Adopcion          
        },
    })
</script>
