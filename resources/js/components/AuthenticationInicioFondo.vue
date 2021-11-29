<template>
     <inertia-link :href="'/'">
       <img :src="image" alt="fondo mascotas">
    </inertia-link>
</template>

<script>
import image from '../../image/cuadroperros.jpg'
export default {
     data(){
           return{
               image:image
                 }
        }
    
}
</script>