<template>
    <app-layout title="Dashboard">
        <template #header1>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Accesorios para tu mascota
            </h2>
            <br>

        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   {{accesorio.name}}
                
                   <!-- {{accesorio.imageSrc}} -->
                    <!-- <h2>Pelota</h2> -->
                    <img class="h-8 w-2/5 sm:h-auto items-center" src="https://superpet.pe/3796-large_default/kong-sport-balls-small-pack-3-unid.jpg" alt="" /> 

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
         props: ['accesorio'],
        components: {
            AppLayout,
            // Paginator,
                
        },
    })
</script>