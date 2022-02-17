<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Editar noticia
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    
                    <form @submit.prevent="update">

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

                        <button 
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md"
                        >Aceptar</button>
                        
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
            nota: Object,
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
            }
        }
    })
</script>
