<template>
    <app-layout title="Dashboard">
        <template #header1>
            <h2 class="font-semibold text-xl text-black leading-tight">
                Blog de mascota
            </h2>
            <br>
  <div v-for="blog in blogs" :key="blog.id"> 
    <figure class="md:flex bg-blue-100 rounded-xl p-8 md:p-0">
      <img class="w-32 h-32 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto" :src="blog.image" alt="" width="384" height="512">
    <!-- <img class="h-8 w-auto sm:h-10" src="https://thumbs.dreamstime.com/b/huellas-de-p%C3%A1gina-perro-icono-y-gato-mascota-espacio-cachorro-pie-aislado-en-fondo-blanco-paro-forma-silueta-negra-pegatina-lindo-202259604.jpg" alt="" /> -->
      <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
        <blockquote>
            <Link :href="route('blogs.show', blog)" > 
            <h2 class="text-lg font-semibold">{{ blog.name}}</h2>
          
            {{ blog.description}}
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-6 rounded-full">
          Leer más
          </button>
          </Link>
        </blockquote>
        <figcaption class="font-medium">
          <div class="text-cyan-600">
            {{ blog.created_at}}
          </div>
        
        </figcaption>
      </div>
    </figure>
    <br>
  </div>
<br>

        </template>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
      props: ['blogs'],
        components: {
            AppLayout,
            Link
                
        },
    })
</script>