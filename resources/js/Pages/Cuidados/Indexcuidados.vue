<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Cuidados para tu mascota
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- <welcome /> -->
                    <!-- <Link
                        :href="route('agenda.create')"
                        class="flex-shrink-0 bg-blue-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 focus:outling-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200" type="button">
                        Nuevo
                        
                    </Link>
                    <table class="rounded-t-lg mt-5 min-w-full mx-auto bg-gray-800 text-gray-100">
                        <thead>
                            <tr class="text-left border-b border-gray-300">
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Controles</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Fecha</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">Acciones</th>
                            </tr>

                        </thead>
                        <tbody class="bg-gray-700 border-b border-b-gray-600 text-gray-200">
                            <tr v-for="agenda in agenda" :key="agenda.id">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="ml-4">
                                    <div class="text-sm font-medium">{{ agenda.control}}</div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm"><span>$</span>{{ agenda.fecha}}</div>
                                </td>
                                <td class="flex m-2">
                                <inertia-link 
                                  :href="route('agenda.edit', agenda.id)"
                                   class="flex-shrink-0 bg-purple-600 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-purple-700 focus:outling-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200" type="button">
                                   Editar
                                </inertia-link>
                                <inertia-link 
                                  :href="route('agenda.destroy', agenda.id)"
                                   class="flex-shrink-0 bg-pink-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-pink-500 focus:outling-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200" type="button">
                                   Borrar
                                </inertia-link>

                                </td>
                            </tr>

                        </tbody>

                    </table> -->
                </div>
            </div>
        </div>

    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import { Link } from '@inertiajs/inertia-vue3';
    // import Welcome from '@/Jetstream/Welcome.vue'

    export default defineComponent({
        props:{
           agenda: Array
        },
        components: {
            AppLayout,
            Link
            // Welcome,
        },
    })
</script>