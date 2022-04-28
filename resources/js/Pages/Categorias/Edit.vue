<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Editar
            </h2>
        </template>

        <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form @submit.prevent="update">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label class="block font-medium text-sm text-gray-700">
                                Nombre de la categoría
                            </label>

                            <input type="text" v-model="form.category_name" class="form-input w-full rounded-md shadow-sm">

                            <label class="block font-medium text-sm text-gray-700">
                                Estatus
                            </label>

                            <select v-model="form.category_status" class="form-input w-full rounded-md shadow-sm">
                                <option value=1>Enabled</option>
                                <option value=0>Disabled</option>
                            </select>

                         </div>
                          <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
                                Aceptar
                            </button>

                          </div>
						
						
                    </div>
                    </form>
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
        },
        data () {
            return {
                form: {
                    category_name: this.category.category_name,
                    category_status: this.category.category_status
                }
            }
        },
        methods: {
            update() {
                this.$inertia.put(this.route('categorias.update', this.category.id), this.form)
            },
        }

    })
</script>