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
                                        Nombre de la categoria
                                    </label>

                                        <input type="text"  v-model="form.category_name" class="form-input w-full rounded-md shadow-sm">

                                    <label class="block font-medium text-sm text-gray-700">
                                        Estatus
                                    </label>

                                        <select v-model="form.category_status" class="form-input w-full rounded-md shadow-sm">
                                            <option value=1>Enabled</option>
                                            <option value=0>Disabled</option>
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
        data () {
            return {
                form: {
                    category_name: '',
                    category_status: ''
                }
            }
        },
        methods: {
            enviar() {
                
                this.$inertia.post(this.route('categorias.store'), this.form)
            }
        }
    })
</script>
