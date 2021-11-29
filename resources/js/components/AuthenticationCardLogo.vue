<template>
    <inertia-link :href="'/'">
       <img :src="image" alt="logo mascotas">
    </inertia-link>
</template>

<script>
import image from '../../image/mascotas.png'


    export default {
        data(){
           return{
               image:image
                 }
        }
    }
</script>




