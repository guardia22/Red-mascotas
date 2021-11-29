<template>
    <app-layout title="Dashboard">
        <template #header1>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Adopcion
            </h2>
            <br>

        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   {{adopcion.name}}
                </div>
            </div>
        </div>
 
    </app-layout>
    
</template>


<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'

    // import Paginator from '@/componets/Paginator.vue'


    export default defineComponent({
         props: ['adopcion'],
        components: {
            AppLayout,
            // Paginator,
                
        },
    })
</script>