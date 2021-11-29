<template>
    <div style=' background-size: cover;  background-image: url("https://www.10wallpaper.com/wallpaper/1920x1200/1105/Toy_Poodle_Cici_Wallpapers_1920x1200.jpg");' class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
      
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
          <div class="flex-justify-center">
            <slot name="logo" />
          </div>
            <slot />
        </div>
        <slot name="register" />
    </div>
</template>
