<template>
     <inertia-link :href="'/'">
       <img :src="image" alt="logo fondo mascotas">
    </inertia-link>
</template>

<script>
import image from '../../image/Mascotasegura.jpg'
export default {
     data(){
           return{
               image:image
                 }
        }
    
}
</script>