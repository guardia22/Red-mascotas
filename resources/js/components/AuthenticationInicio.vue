<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-left pt-6 sm:pt-0 bg-gray-200">

        <div class="w-full sm:max-w-md mt-6  bg-white shadow-md overflow-hidden sm:rounded-lg">
          <div class="flex-justify-center">
            <slot name="fondomascota" />
          </div>
            <slot />
        </div>
        <!-- <slot name="register" /> -->
    </div>
</template>