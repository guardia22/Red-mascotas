<template>
    <inertia-link :href="'/'">
       <img :src="image" alt="logo principal mascotas">
    </inertia-link>
</template>

<script>
import image from '../../image/perro-gato.png'


    export default {
        data(){
           return{
               image:image
                 }
        }
    }
</script>