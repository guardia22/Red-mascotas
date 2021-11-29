<template>
   <app-layout>
     <template #header>
      <h1 class="text-center text-2xl font-bold leading-7 text-gray-300 sm:text-3xl sm:truncate py-4 bg-gradient-to-1 from-indigo-500 ">CONTROL DE LA MASCOTA</h1>
      
      <!-- <img class="h-8 w-1/6 sm:h-auto" src="https://medios.clinicaveterinariamadrid.es/vacunacion_perro_gato-1-300x300.png" alt="" /> -->
   
     </template>
     <div class="py-12">
      <!-- <img class="h-8 w-1/6 sm:h-auto" src="https://cdn.bioguia.com/embed/bf8c9298b288ce324638060b42b2229f11524409465/Como_saber_si_estamos_alimentando_bien_a_nuestra_mascota?imagick=1&size=500" alt="" />  -->
      <div class="max-w-2xl mx-auto sm:px-6 lg:px-8" >
        <div class="bg-gray-50 overflow-hidden  shadow-xl sm:rounded-lg">
           <Link
             :href="route('horarios.create')"
              class="flex-shrink-0 bg-blue-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue_500 focus:ring-offset-2 focus:ring-offset-blue-200" type="button"> 
             Nuevo
             <!-- <button type="button">Estoy en huelga...</button> -->
           </Link>

           <table class="rounded-t-lg mt-5 w-3/5 bg-green-700 text-gray-100">
                        <thead>
                          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
                            <tr class="text-left border-b border-gray-300">
                              
                                <th scope="col" class="px-3 py-3 text-center text-xs font-medium text-bg-white uppercase tracking-wider">Control </th>
                                <!-- <i class="fas fa-dog"> -->
                                <th scope="col" class="px-3 py-3 text-center text-xs font-medium text-bg-white uppercase tracking-wider">Fecha</th> 
                                <!-- <i class="fas fa-calendar-check"></i> -->
                                <th scope="col" class="px-3 py-3 text-center text-xs font-medium text-bg-white uppercase tracking-wider">Horario</th>
                                <th scope="col" class="px-3 py-3 text-center text-xs font-medium text-bg-white uppercase tracking-wider">Acciones</th>
                            </tr>

                        </thead>
                        <tbody class="bg-gray-200 border-b border-b-gray-600 text-gray-800">
                            <tr v-for="horario in horarios" :key="horario.id">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="ml-4">
                                    <div class="text-sm font-medium">{{ horario.control}}</div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="ml-4">
                                    <div class="text-sm font-medium">{{ horario.Fecha}}</div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    <div class="ml-4">
                                    <div class="text-sm font-medium">{{ horario.horario}}</div>
                                    </div>
                                    </div>
                                </td>
                                <td class="flex m-2">
                                
                                <Link 
                                  :href="route('horarios.edit', horario.id)"
                                   class="flex-shrink-0 bg-purple-600 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-purple-700 focus:outling-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200" type="button">
                                   Editar
                                </Link>
                           
                                <Link
                                  method="delete"
                                  :href="route('horarios.destroy', horario.id)"
                                   class="flex-shrink-0 bg-red-500 text-white text-base font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-pink-500 focus:outling-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-blue-200" type="button">
                                   Borrar
                                </Link>

                                </td>
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
      horarios: Array
    },
    components:{
      AppLayout,
      Link
    }
};
</script>