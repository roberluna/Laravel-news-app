<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Editar nota
            </h2>
        </template>

        <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form @submit.prevent="update">
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
                         </div>
                          <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"
                            >Aceptar</button>
                            <button @click.prevent="destroy" class="float-right bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md">Eliminar</button>
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
            nota: Object
        },
        data () {
            return {
                form: {
                    titulo: this.nota.titulo,
                    contenido: this.nota.contenido
                }
            }
        },
        methods: {
            update() {
                this.$inertia.put(this.route('noticias.update', this.nota.id), this.form)
            },
            destroy() {
                if(confirm('¿Esta seguro que desesa eliminar esta nota?')){
                    this.$inertia.delete(this.route('noticias.destroy', this.nota.id))
                }

            },
        }

    })
</script>