<template>
    <app-layout>
        <template #header1>
            <img class="h-8 w-1/6 sm:h-auto items-center" src="https://medios.clinicaveterinariamadrid.es/vacunacion_perro_gato-1-300x300.png" alt="" /> 
            <h2 class="font-semibold text-xl text-blue-500 leading-tight">Control de la mascota</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-green-300 overflow-hidden shadow-xl sm:rounded-lg">
                    
                <form @submit.prevent="submit" class="mb-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-8 mt-5 mx-7">

                <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Control</label>
                <jet-label for="control" value="control" />
                   <select v-model="form.control" class="mt-1 block w-full border-gray-300 bg-gray-100 py-2 px-4 pr-8  rounded  focus:outline-none" placeholder="Seleccione">
                       <option value="baño">Baño</option>
                       <option value="corte de pelo">Corte de pelo</option>
                       <option value="paseo">Paseo</option>
                       <option value="desparasitación">Desparasitación</option>
                       <option value="desparasitación">Vacunación</option>
                   </select>
                </div>

                <div class="grid grid-cols-1">
                    
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha</label>
                <input  id="control" v-model="form.Fecha" type="date"
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Fecha" />
                </div>
                
                <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Horario</label>
                <input  id="horario" v-model="form.horario" type="time" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"  placeholder="horario" />
                </div>

                </div>
            
            
                <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>      
                <Link
                    :href="route('horarios.index')"                    
                    class='w-auto bg-red-600 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="button">
                    Cancelar
                </Link>
                <button 
                    type="submit"
                    class='w-auto bg-purple-800 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>
                    Guardar
                </button>
                

                           <!-- Notificacion de registro con exito! -->
    <!-- <template>
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
    </template> -->
                </div>
            
                </form>
										
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';
export default {
    components:{
        AppLayout,
        Link
    },
    props:{
        errors: Object
    },
    data(){
        return{
            form:{
                nombre:null,
                tipo:null,
                unidad:null
            }
        }
    },
    methods:{
        submit(){
            this.$inertia.post(route('horarios.store'), this.form);
        }
    }
}
</script>