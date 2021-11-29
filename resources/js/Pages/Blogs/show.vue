<template>
    <app-layout title="Dashboard">
        <template #header1>
            <h2 class="font-semibold text-xl text-black leading-tight">
               Blog de mascota
            </h2>
            <br>   
            <h2 class="text-lg font-semibold" align="center" >{{blog.name}}</h2>
            <br>
            <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2" > 
                {{blog.description}}</div>
               <p>
                <img class="h-30 w-full" :src="blog.image" alt="" /> 
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
<form @submit.prevent="submit" >
    <div class="mt-3 p-3 w-full">
      <textarea  v-model="form.message"    rows="3" class="border p-2 rounded w-full" placeholder="Escribe tu comentario..."></textarea>
    </div>

         <button 
            type="submit"
            class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>
              Enviar
         </button>
</form>
<!-- 
    <div class="flex justify-between mx-3">
      <div><button class="px-4 py-1 bg-gray-800 text-white rounded font-light hover:bg-gray-700">Enviar</button></div>
      <div>
        <div tabindex="0" class="dropdown">
          <div tabindex="0" class="cursor-pointer">...</div>
    
        </div>
      </div>
    </div> -->
<div v-for="comment in comments" :key="comment.id"> 
  <h5>{{comment.user.name}} dijo:</h5>
  <h5>{{comment.message}}</h5>
  <span>{{comment.created_at}}</span>

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
        props: ['blog', 'user', 'comments'],
        data(){
        return{
            form:{
                message:null,
                
            }
        }
    },
        components: {
            AppLayout,
            Link
                
        },
            methods:{
        submit(){
            this.$inertia.post(route('blogs.storeComment', this.blog), this.form);
        }
    }
    })
</script>