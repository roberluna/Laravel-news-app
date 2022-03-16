<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Ver noticia
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    
                    <inertia-link :href="route('noticias.edit', nota.id)">
                        Editar
                    </inertia-link>
                    <hr>

                    <p>Titulo</p>

                    <p>{{ nota.titulo }}</p>

                    <p>Contenido</p>

                     <p>{{ nota.contenido }}</p>
                    

                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default defineComponent({
        components: {
            AppLayout,
        },
        props: {
            nota: Object,
        }
    })
</script>
