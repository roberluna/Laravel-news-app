<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Ver
            </h2>
        </template>

        <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <inertia-link :href="route('categorias.edit',category.id)"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-8 rounded-md"
                    >
                        Editar
                </inertia-link>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg p-10">
						
                            <div class="min-w-full divide-y divide-gray-200 w-full">
                            <b>Nombre de la categoría</b>
                            <p>{{ category.category_name }}</p>

                            <b>Estatus</b>
                                <p v-if="category.category_status == 1">Enabled</p>
                                <p v-else>Disabled</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="block mt-8">
                 <inertia-link :href="route('categorias.index')"
                        class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded"
                    >
                        Categorias
                </inertia-link>
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
            category: Object
        }

    })
</script>
