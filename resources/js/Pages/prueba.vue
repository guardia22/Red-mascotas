<!-- Notificacion de registro con exito! -->
    <template>
        <div v-cloak class="h-full">
            <div class="absolute flex mas-w-xs w-full mt-4 mr-4 top-0 right-0 bg-white rounded shadow p-4">
              <div class="mr-2">icons</div>  
              <div class="flex-1">message</div>  
              <div class="ml-2">button</div>  
            </div>
        </div>

        <header class="flex justify-between flex-shrink-0 bg-gray-700">
            <div class="flex-shrink-0 px-4 py-2 lg:bg-gray-800 lg:w-64">
                <Link href="/" class="flex items-center">
                  <icon name="logo"></icon>
                  <span class="hidden pl-2 text-xl font-bold tracking-tight text-white md:inline-block">LinertiaJS</span>
                </Link>
            </div>

            <div class="flex items-center justify-between flex-shrink-0 px-4 py-2 bg-gray-700 lg:flex-1 focus:outline-none"></div>
              <nav class="hidden lg:flex">
                  <Link href="/" class="inline-block px-3 py-2 text-sm font-medium leading-noce text-whote rounded-lg">
                     Home
                  </Link>

              </nav>
        </header>
    </template>