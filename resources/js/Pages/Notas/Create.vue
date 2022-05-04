<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Crear
            </h2>
        </template>

        <div>
            <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form @submit.prevent="enviar">

                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">

                                    <label class="block font-medium text-sm text-gray-700">
                                        Título
                                    </label>

                                    <textarea 
                                        class="form-input w-full rounded-md shadow-sm"
                                        v-model="form.titulo"
                                    ></textarea>

                                    <label class="block font-medium text-sm text-gray-700">
                                        Contenido
                                    </label>

                                    <textarea 
                                        class="form-input w-full rounded-md shadow-sm"
                                        v-model="form.contenido"
                                        rows="8"
                                    ></textarea>

                                    <label class="block font-medium text-sm text-gray-700">
                                        Categoría
                                    </label>

                                    <select v-model="form.categories_id" class="form-input w-full rounded-md shadow-sm">
                                        <option value="">Seleccionar</option>
                                        <option :value="category.id" v-for="category in categories" :key="category.id">
                                            {{category.category_name}}
                                        </option>
                                    </select>
                            
                                    <button 
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"
                                    >Crear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
        props:{
            categories: Array,
        },
        data () {
            return {
                form: {
                    titulo: '',
                    contenido: '',
                    categories_id: ''
                }
            }
        },
        methods: {
            enviar() {
                
                this.$inertia.post(this.route('noticias.store'), this.form)
            }
        }
    })
</script>
