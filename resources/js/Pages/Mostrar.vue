<template>
  <app-layout>
    <!-- <template #header>
      <h1 class="text-center text-2xl font-bold leading-7 text-gray-300 sm:text-3xl sm:truncate py-4 bg-gradient-to-1 from-indigo-500 "></h1>
    </template> -->

    <div class="py-12 px-12">

      <img class="h-8 w-auto sm:h-auto" src="https://tecnutral.com/wp-content/uploads/2018/10/AlimentosGatos-1.png" alt="" /> 
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden  shadow-xl sm:rounded-lg">
           <Link
             :href="route('alimentos.create')"
              class="flex-shrink-0 bg-blue-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue_500 focus:ring-offset-2 focus:ring-offset-blue-200" type="button"> 
             AGREGAR
             <!-- <button type="button">Estoy en huelga...</button> -->
           </Link>

            <table class="rounded-t-lg mt-5 w-3/5 bg-green-700 text-gray-100">
                        <thead>
                            <tr class="text-left border-b border-gray-300">
                                <th scope="col" class="px-3 py-3 text-center text-xs font-medium text-bg-white uppercase tracking-wider">Descripción</th>
                                <th scope="col" class="px-3 py-3 text-center text-xs font-medium text-bg-white uppercase tracking-wider">Tipo</th>
                                <th scope="col" class="px-3 py-3 text-center text-xs font-medium text-bg-white uppercase tracking-wider">Unidad</th>
                                <th scope="col" class="px-3 py-3 text-center text-xs font-medium text-bg-white uppercase tracking-wider">Acciones</th>
                            </tr>

                        </thead>
                        <tbody class="bg-gray-200 border-b border-b-gray-600 text-gray-800">
                            <tr v-for="alimento in alimentos" :key="alimento.id">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="ml-4">
                                    <div class="text-sm font-medium">{{ alimento.nombre}}</div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="ml-4">
                                    <div class="text-sm font-medium">{{ alimento.tipo}}</div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="ml-4">
                                    <div class="text-sm font-medium">{{ alimento.unidad}}</div>
                                    </div>
                                    </div>
                                </td>
                                 <div class="grid grid-cols-2 gap-4">
                                <Link 
                                  :href="route('alimentos.edit', alimento.id)"
                                   class="flex-shrink-0 bg-purple-600 text-white text-center font-semibold py-2 px-8 rounded-lg shadow-md hover:bg-purple-700 focus:outling-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200" type="button">
                                   Editar
                                </Link>
                               
                                <Link
                                  method="delete"
                                  :href="route('alimentos.destroy', alimento.id)"
                                   class="flex-shrink-0 bg-red-500 text-white text-center font-semibold py-2 px-8 rounded-lg shadow-md hover:bg-pink-500 focus:outling-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200" type="button">
                                   Borrar
                                </Link>

                              </div>
                            </tr>

                        </tbody>

                    </table>
        </div>

      </div>

    </div>
    

  </app-layout>
    
</template>

<script>


import AppLayout from '@/Layouts/AppLayout.vue'
import { Link } from '@inertiajs/inertia-vue3'
export default {
    props:{
      alimentos: Array
    },
    components:{
      AppLayout,
      Link
    }
};
</script>