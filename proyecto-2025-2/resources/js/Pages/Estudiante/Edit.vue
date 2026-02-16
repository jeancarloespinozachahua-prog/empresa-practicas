<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';


const props = defineProps({
    estudiante: Object
})

const formulario = useForm({
    codigo: props.estudiante.codigo,
    nombres: props.estudiante.nombres,
    pri_ape: props.estudiante.pri_ape,
    seg_ape: props.estudiante.seg_ape,
    dni:     props.estudiante.dni,
})

const updateEstudiante = () => {

    //console.log(formulario)

    formulario.put(route('estudiantes.update', props.estudiante), {
        onSuccess: () => {
            console.log('Estudiante actualizado con éxito!');
        },
        onError: (errors) => {
            console.error('Errores de validación:', errors);
        }
    });
}

</script>

<template>
    <Head title="Estudiante" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Editar Estudiante
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

                <form @submit.prevent="updateEstudiante">

                    <div class="mb-4">
                        <label for="codigo" class="block text-gray-700 text-sm font-bold mb-2">Código:</label>
                        <input type="text" v-model="formulario.codigo" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    
                    <div class="mb-4">
                        <label for="nombres" class="block text-gray-700 text-sm font-bold mb-2">Nombres:</label>
                        <input type="text" v-model="formulario.nombres" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4">
                        <label for="pri_ape" class="block text-gray-700 text-sm font-bold mb-2">Primer Apellido:</label>
                        <input type="text" v-model="formulario.pri_ape" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4">
                        <label for="seg_ape" class="block text-gray-700 text-sm font-bold mb-2">Segundo Apellido:</label>
                        <input type="text" v-model="formulario.seg_ape" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="mb-4">
                        <label for="dni" class="block text-gray-700 text-sm font-bold mb-2">DNI:</label>
                        <input type="text" v-model="formulario.dni" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <div class="flex items-center justify-center">
                        <button type="submit" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>