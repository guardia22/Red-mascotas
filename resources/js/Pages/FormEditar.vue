 <template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar Producto</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    
                    <form @submit.prevent="submit" class="mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                        <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Descripción</label>
                        <input 
                            id="descripcion"
                            v-model="form.nombre"
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Descripción" 
                        />
                        </div>
                        <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Tipo</label>
                        <input         
                            id="tipo"
                            v-model="form.tipo"                
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Tipo" 
                        />
                        </div>
                        <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">unidad</label>
                        <input 
                            id="descripcion"
                            v-model="form.unidad"
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Descripción" 
                        />
                        </div>
                        </div>

                        <div class='flex justify-end md:gap-8 gap-4 pt-5 pb-5 pr-5'>
                        <Link
                            :href="route('alimentos.index')"                    
                            class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2' type="button">
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
  props: ["alimento"],
  data() {
    return {
      form: {
        nombre: this.$props.alimento.nombre,
        tipo: this.$props.alimento.tipo,
        unidad: this.$props.alimento.unidad,
      },
    };
  },
  methods: {
    submit() {
      this.$inertia.put(
        route("alimentos.update", this.$props.alimento.id),
        this.form
      );
    },
  },
};
</script>