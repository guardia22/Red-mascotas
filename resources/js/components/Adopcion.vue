<template>
  <div class="bg-white">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <!-- <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Customers also purchased</h2> -->

      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div v-for="pet in pets" :key="pet.id" class="group relative">
          <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img :src="pet.imageSrc" :alt="pet.imageAlt" class="w-full h-full object-center object-cover lg:w-full lg:h-full" />
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a :href="route('adopciones.show', {'id': pet.id }) ">
                  <span aria-hidden="true" class="absolute inset-0" />
                  {{ pet.name }}
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">{{ pet.color }}</p>
            </div>
            </div>
            <p class="text-sm font-medium text-gray-900">{{ pet.sexo }}</p>
           <button type="submit" class="w-auto bg-red-700 hover:bg-purple-700  shadow-xl font-medium text-white px-4 py-2 items-center">Adoptame</button>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
const pets = [
  {
    id: 1,
    name: 'Lady',
    imageSrc: 'https://static.wixstatic.com/media/5ab9c4_13531bed104d43e49b7f8c68be27d931~mv2.jpg/v1/fill/w_560,h_464,al_c,q_85/5ab9c4_13531bed104d43e49b7f8c68be27d931~mv2.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
    sexo: 'Hembra',
    // color: 'Black',
  },

   {
    id: 2,
    name: 'Osito',
    href: '#',
    imageSrc: 'https://static.wixstatic.com/media/5ab9c4_1b9bbeee17384a39989d7be610d3cd5d~mv2.jpg/v1/fill/w_296,h_296,al_c,q_80,usm_0.66_1.00_0.01/5ab9c4_1b9bbeee17384a39989d7be610d3cd5d~mv2.webp',
    imageAlt: "Front of men's Basic Tee in black.",
    sexo: 'Macho',
    // color: 'Black',
  },

  {
    id: 3,
    name: 'Lulu',
    href: '#',
    imageSrc: 'https://static.wixstatic.com/media/f4b088_09e6e4d3e1bf44459c81146e8b544ebd~mv2.jpg/v1/fill/w_296,h_296,al_c,q_80,usm_0.66_1.00_0.01/f4b088_09e6e4d3e1bf44459c81146e8b544ebd~mv2.webp',
    imageAlt: "Front of men's Basic Tee in black.",
    sexo: 'Hembra',
    // color: 'Black',
  },

  {
    id: 4,
    name: 'Michi',
    href: '#',
    imageSrc: 'https://adopcionanimales.com/wp-content/uploads/2016/07/sircan-gatito-300x300.png',
    imageAlt: "Front of men's Basic Tee in black.",
    sexo: 'Hembra',
    // color: 'Black',
  },

   {
    id: 5,
    name: 'Cielo',
    href: '../components/descripcion',
    imageSrc: 'https://t2.ea.ltmcdn.com/es/images/5/3/9/1_cahorro_o_gato_adulto_20935_0_600.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
    sexo: 'Hembra',
    // color: 'Black',
  },

   {
    id: 6,
    name: 'Firulais',
    href: '../components/descripcion',
    imageSrc: 'https://static.wixstatic.com/media/f4b088_0e8390fbcb4e4530bc723f49e66f6047~mv2.jpg/v1/fill/w_328,h_272,al_c,q_80,usm_0.66_1.00_0.01/f4b088_0e8390fbcb4e4530bc723f49e66f6047~mv2.webp',
    imageAlt: "Front of men's Basic Tee in black.",
    sexo: 'Macho',
    // color: 'Black',
  },

//   {
//     id: 7,
//     name: 'Jueguete Pluma para Gatos',
//     href: '#',
//     imageSrc: 'https://image.dhgate.com/0x0s/f2-albu-g9-M00-9C-B0-rBVaWFwZuyOAbm8dAAGZKAv_HRI104.jpg/juguetes-para-gatos-pluma-varita-varita-gatito.jpg',
//     imageAlt: "Front of men's Basic Tee in black.",
//     price: 'S/. 15',
//     // color: 'Black',
//   },

//   {
//     id: 8,
//     name: 'Juguete Pelota para Perro',
//     href: '#',
//     imageSrc: 'https://production-tailoy-repo-magento-statics.s3.amazonaws.com/imagenes/872x872/productos/i/p/e/pelota-para-mascota-grande-rojo-47735-default-1.jpg',
//     imageAlt: "Front of men's Basic Tee in black.",
//     price: 'S/. 10',
//     // color: 'Black',
//   },
 

  // More products...
]

export default {
  setup() {
    return {
      pets,
    }
  },
}
</script>
