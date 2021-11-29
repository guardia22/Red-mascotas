<!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<template>
  <div class="bg-white">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <!-- <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Customers also purchased</h2> -->

      <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div v-for="product in products" :key="product.id" class="group relative">
          <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
            <img :src="product.imageSrc" :alt="product.imageAlt" class="w-full h-full object-center object-cover lg:w-full lg:h-full" />
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a :href="route('accesorios.show', {'id': product.id }) ">
                  <span aria-hidden="true" class="absolute inset-0" />
                  {{ product.name }}
                  <button type="submit" class="w-auto bg-red-700 hover:bg-purple-700  shadow-xl font-medium text-white px-4 py-2 items-center">Agregar a favorito</button>
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">{{ product.color }}</p>
            </div>
            <p class="text-sm font-medium text-gray-900">{{ product.price }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
const products = [
  {
    id: 1,
    name: 'Pelotas de Goma para Perro',
    imageSrc: 'https://superpet.pe/3796-large_default/kong-sport-balls-small-pack-3-unid.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 18',
    // color: 'Black',
  },

   {
    id: 2,
    name: 'Cama para Perro',
    href: '#',
    imageSrc: 'https://www.pipostore.com/wp-content/uploads/2020/06/all-for-paws-camas-para-cachorros-pups-36x49x135cm.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 45',
    // color: 'Black',
  },

  {
    id: 3,
    name: 'Cama para Gato',
    href: '#',
    imageSrc: 'https://www.lo-mejor.com/wp-content/uploads/2020/04/las-mejores-camas-para-gatos.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 35',
    // color: 'Black',
  },

  {
    id: 4,
    name: 'Collar y Correa para Perro',
    href: '#',
    imageSrc: 'https://sc04.alicdn.com/kf/HTB15yOIKf9TBuNjy1zbq6xpepXaV.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 30',
    // color: 'Black',
  },

   {
    id: 5,
    name: 'Cama para gato',
    href: '../components/descripcion',
    imageSrc: 'https://sc04.alicdn.com/kf/H517fb66a047c4845923c36bd6f4eb423V.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 40',
    // color: 'Black',
  },

   {
    id: 6,
    name: 'Cama grande para perro',
    href: '../components/descripcion',
    imageSrc: 'https://www.bullsira.com/wp-content/uploads/2018/07/cama-perros-300x300.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 35',
    // color: 'Black',
  },

  {
    id: 7,
    name: 'Jueguete Pluma para Gatos',
    href: '#',
    imageSrc: 'https://image.dhgate.com/0x0s/f2-albu-g9-M00-9C-B0-rBVaWFwZuyOAbm8dAAGZKAv_HRI104.jpg/juguetes-para-gatos-pluma-varita-varita-gatito.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 15',
    // color: 'Black',
  },

  {
    id: 8,
    name: 'Juguete Pelota para Perro',
    href: '#',
    imageSrc: 'https://production-tailoy-repo-magento-statics.s3.amazonaws.com/imagenes/872x872/productos/i/p/e/pelota-para-mascota-grande-rojo-47735-default-1.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 10',
    // color: 'Black',
  },

  {
    id: 9,
    name: 'Juguete de Goma para Perro ',
    href: '#',
    imageSrc: 'https://falabella.scene7.com/is/image/FalabellaPE/18309544_1?wid=1500&hei=1500&qlt=70',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 30',
    // color: 'Black',
  },

  {
    id: 10,
    name: 'Colonia para Mascotas',
    href: '#',
    imageSrc: 'https://falabella.scene7.com/is/image/FalabellaPE/17672080_1?wid=800&hei=800&qlt=70',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 30',
    // color: 'Black',
  },

  {
    id: 11,
    name: 'Cepillo para Perro',
    href: '#',
    imageSrc: 'https://falabella.scene7.com/is/image/FalabellaPE/17673221_1?wid=1500&hei=1500&qlt=70',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 30',
    // color: 'Black',
  },

  {
    id: 12,
    name: 'Cama para Perro',
    href: '#',
    imageSrc: 'https://cdn.shopify.com/s/files/1/0244/4866/3632/products/cama-zoomba-orthopet-talla-5.jpg?v=1567806987',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 30',
    // color: 'Black',
  },

  {
    id: 13,
    name: 'Baño Arenero para Gatos con Pala',
    href: '#',
    imageSrc: 'https://www.animal-lovers.cl/wp-content/uploads/2020/10/78016182076953-5.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 30',
    // color: 'Black',
  },

    {
    id: 14,
    name: 'Arena para Gatos',
    href: '#',
    imageSrc: 'https://plazavea.vteximg.com.br/arquivos/ids/525819-450-450/127677.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 30',
    // color: 'Black',
  },

    {
    id: 15,
    name: 'Arena para Gatos',
    href: '#',
    imageSrc: 'https://wongfood.vteximg.com.br/arquivos/ids/365594-750-750/Super-Clean-Arena-para-Gatos-10-kg-1-141242255.jpg?v=637290746584830000',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 30',
    // color: 'Black',
  },

    {
    id: 16,
    name: 'Juguete Pollo de Hule para Perros',
    href: '#',
    imageSrc: 'https://i.linio.com/p/f3e3a86d8482dd259da7b6bafe077606-product.webp',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 30',
    // color: 'Black',
  },

  {
    id: 17,
    name: 'Juguete Pollo de Hule para Perros',
    href: '#',
    imageSrc: 'https://i.linio.com/p/f3e3a86d8482dd259da7b6bafe077606-product.webp',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 30',
    // color: 'Black',
  },

  {
    id: 18,
    name: 'Juguete Pollo de Hule para Perros',
    href: '#',
    imageSrc: 'https://i.linio.com/p/f3e3a86d8482dd259da7b6bafe077606-product.webp',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 30',
    // color: 'Black',
  },

  {
    id: 19,
    name: 'Manta para Perro',
    href: '#',
    imageSrc: 'https://i.linio.com/p/ace3efc79ec1263ee1b71721eedab920-catalog.webp',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 30',
    // color: 'Black',
  },

  {
    id: 20,
    name: 'Arnes para Perro',
    href: '#',
    imageSrc: 'https://www.labeldepot.group/wp-content/uploads/2018/07/label-depot-pechera-para-perros-sintetico-2.jpg',
    imageAlt: "Front of men's Basic Tee in black.",
    price: 'S/. 30',
    // color: 'Black',
  },

  // More products...
]

export default {
  setup() {
    return {
      products,
    }
  },
}
</script>
