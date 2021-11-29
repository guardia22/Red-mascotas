<template>
    <app-layout title="Dashboard">
        <template #header1>
            <h2 class="font-semibold text-xl text-black leading-tight">
               Blog de mascota
            </h2>
            <br>   
            <h2 class="text-lg font-semibold" align="center" >Cuidados basicos del gato</h2>
            <br>
            <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2" >El aseo de tu gatito necesita tres cosas de ti: mucha atención, comidas regulares y equilibradas, y un poco de ayuda con su aseo. Estos cuidados favorecen su desarrollo 
              y le ayudan a tener un pelo brillante y sano, con lo que lucirá un aspecto lustroso y saludable como a él le gusta. Si los dos os acostumbráis cuanto antes a esta rutina, pronto se convertirá 
              en algo habitual en vuestra vida y le encantará relajarse y dejar que le mimes. También es un modo estupendo de reforzar vuestra relación. El aseo de tu gatito necesita tres cosas de ti: mucha atención, comidas regulares y equilibradas, y un poco de ayuda con su aseo. Estos cuidados favorecen su desarrollo y le ayudan a tener un pelo brillante y sano, con lo que lucirá un aspecto 
                lustroso y saludable como a él le gusta. Si los dos os acostumbráis cuanto antes a esta rutina, pronto se convertirá en algo habitual en vuestra vida y le encantará relajarse y dejar que le mimes. También es un modo estupendo de reforzar vuestra relación. </div>
               <p>
                <img class="h-30 w-full" src=" https://www.hola.com/imagenes/estar-bien/20210223184909/mi-gato-me-amasa-causas/0-925-122/gato-manta-3t-t.jpg" alt="" /> 
               </p>
             </div>
             <br>
           Publicado por Ronny 
         <br> 
         <br>  
        <h2 class="text-lg font-semibold">Publicar comentario</h2> 
        <div class="flex  bg-gray-100 justify-center items-center">

  <div class="w-full bg-blue-200 p-2 pt-4 rounded shadow-lg">
    <div class="flex ml-3">
      <div class="mr-3">
        <img :src="user.profile_photo_url" :alt="user.name" class="rounded-full h-12 w-12" align="left">
        <!-- <img src="http://picsum.photos/50" alt="" class="rounded-full"> -->
      </div>
      <div>
         {{user.name}}
        <!-- <p class="text-xs text-gray-500">2 seconds ago</p> -->
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
        props: ['variable1', 'user'],
        components: {
            AppLayout,
            Link
                
        },
    })
</script>