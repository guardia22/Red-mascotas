<template>
    <app-layout>
        <template #header1>
            <img class="h-8 w-1/6 sm:h-auto items-center" src="https://medios.clinicaveterinariamadrid.es/vacunacion_perro_gato-1-300x300.png" alt="" /> 
            <h2 class="font-semibold text-xl text-blue-500 leading-tight">Editar Control de la mascota</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-green-300 overflow-hidden shadow-xl sm:rounded-lg">
                    
                    <form @submit.prevent="submit" class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Control</label>
                        <!-- <input id="control" v-model="form.control"
                          class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Control" /> -->
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
                        <input         
                            id="tipo"
                            v-model="form.Fecha"                
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="date" placeholder="Fecha" 
                        />
                        </div>
                        <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">horario</label>
                        <input 
                            id="horario"
                            v-model="form.horario"
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="time" placeholder="Horario" 
                        />
                        </div>
                        </div>

                        <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>
                        <Link
                            :href="route('horarios.index')"                    
                            class='w-auto bg-gray-700 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="button">
                            Cancelar
                        </Link> 
                        <button 
                            type="submit"
                            class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'
                        >
                            Guardar
                        </button>
                        </div>
                    </form>
                                    
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";
import { Link } from '@inertiajs/inertia-vue3';
export default {
  components: {
    AppLayout,
    Link
  },
  props: ["horario"],
  data() {
    return {
      form: {
        control: this.$props.horario.control,
        Fecha: this.$props.horario.Fecha,
        horario: this.$props.horario.horario,
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.put(
        route("horarios.update", this.$props.horario.id),
        this.form
      );
    },
  },
};
</script>