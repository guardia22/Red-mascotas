<template>
    <app-layout title="Dashboard">
        <template #header1>
            <h2 class="font-semibold text-xl text-black leading-tight">
                <img class="h-8 w-auto sm:h-10" src="https://thumbs.dreamstime.com/b/huellas-de-p%C3%A1gina-perro-icono-y-gato-mascota-espacio-cachorro-pie-aislado-en-fondo-blanco-paro-forma-silueta-negra-pegatina-lindo-202259604.jpg" alt="" />
                Blog de mascota
            </h2>
            <br>   
            <h2 class="text-lg font-semibold" align="center" >Cuidados basicos del gato</h2>
            <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2" >Cuidados</div>
            <div class="...">Cuidados basicos de los gatos</div>
             </div>

            <p align="left">
                <img class="h-30 w-1/2" src=" https://www.hola.com/imagenes/estar-bien/20210223184909/mi-gato-me-amasa-causas/0-925-122/gato-manta-3t-t.jpg" alt="" /> 
                <!-- <img class="h-8 w-auto sm:h-10" src="https://thumbs.dreamstime.com/b/huellas-de-p%C3%A1gina-perro-icono-y-gato-mascota-espacio-cachorro-pie-aislado-en-fondo-blanco-paro-forma-silueta-negra-pegatina-lindo-202259604.jpg" alt="" /> -->
                El aseo de tu gatito necesita tres cosas de ti: mucha atención, comidas regulares y equilibradas, y un poco de ayuda con su aseo. Estos cuidados favorecen su desarrollo y le ayudan a tener un pelo brillante y sano, con lo que lucirá un aspecto 
                lustroso y saludable como a él le gusta. Si los dos os acostumbráis cuanto antes a esta rutina, pronto se convertirá en algo habitual en vuestra vida y le encantará relajarse y dejar que le mimes. También es un modo estupendo de reforzar vuestra relación. 

            </p>
           
        
        <div class="flex  bg-gray-100 justify-center items-center">

  <div class="w-full bg-white p-2 pt-4 rounded shadow-lg">
    <div class="flex ml-3">
      <div class="mr-3">
        <img src="http://picsum.photos/50" alt="" class="rounded-full">
      </div>
      <div>
        <h1 class="font-semibold">Itay Buyoy</h1>
        <p class="text-xs text-gray-500">2 seconds ago</p>
      </div>

    </div>

    <div class="mt-3 p-3 w-full">
      <textarea rows="3" class="border p-2 rounded w-full" placeholder="Escribe tu comentario..."></textarea>
    </div>

    <div class="flex justify-between mx-3">
      <div><button class="px-4 py-1 bg-gray-800 text-white rounded font-light hover:bg-gray-700">Enviar</button></div>
      <div>
        <div tabindex="0" class="dropdown">
          <div tabindex="0" class="cursor-pointer">...</div>
          <!-- <ul class="dropdown-content bg-white p-3 shadow rounded menu w-52">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul> -->
        </div>
      </div>
    </div>

  </div>

</div>
        
        </template>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            AppLayout,
            Link
                
        },
    })
</script>