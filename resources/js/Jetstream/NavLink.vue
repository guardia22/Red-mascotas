<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>

<script>
    import { defineComponent } from 'vue'
    import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },
        props: ['href', 'active'],

        computed: {
            classes() {
                return this.active
                    ? 'inline-flex items-center px-1 pt-1 border-b-2  text-sm font-bold leading-5 text-white focus:outline-none'
                    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-bold leading-5 text-gray-50 hover:text-gray-700 hover:border-gray-300 focus:outline-none '
            }
        }
    })
</script>
