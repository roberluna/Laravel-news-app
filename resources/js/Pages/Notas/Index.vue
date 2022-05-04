<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Listar
            </h2>
        </template>

        
    <div>
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                    <inertia-link :href="route('noticias.create')"
                         class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-8 rounded-md"
                    >
                        Crear
                    </inertia-link>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 w-full">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Titulo
								</th>
                                <th scope="col" colspan="2" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Categoría
								</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="nota in notas" :key="nota.id">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{nota.titulo}}
                                </td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    {{nota.category_name}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                    <inertia-link :href="route('noticias.show',nota.id)" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">
                                        Ver
                                    </inertia-link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                        </div>
                    </div>
                </div>
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
            notas: Array
        }
    })
</script>
