<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    
    estudiantes: {
        Object
    }
})
</script>

<template>
    <Head title="Estudiante" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Estudiantes
            </h2>
        </template>
        
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                
                <div class="py-3">
                    <Link 
                        :href="route('estudiantes.create')"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Agregar
                    </Link>
                </div>

                <table class="table-auto w-full border-collapse">
                    <thead class="bg-blue-500">
                        <tr>
                            <th class="px-4 py-2 text-left text-white">Codigo</th>
                            <th class="px-4 py-2 text-left text-white">Nombres</th>
                            <th class="px-4 py-2 text-left text-white">Primer Apellido</th>
                            <th class="px-4 py-2 text-left text-white">Segudo Apellido</th>
                            <th class="px-4 py-2 text-left text-white">DNI</th>
                            <th class="px-4 py-2 text-left text-white">Editar</th>
                            <th class="px-4 py-2 text-left text-white">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody class="hover:bg-gray-100">
                        <tr v-for="(estudiante, index) in estudiantes" :key="index">
                            <td class="px-4 py-2 border-b border-gray-300">{{ estudiante.codigo }}</td>
                            <td class="px-4 py-2 border-b border-gray-300">{{ estudiante.nombres }}</td>
                            <td class="px-4 py-2 border-b border-gray-300">{{ estudiante.pri_ape }}</td>
                            <td class="px-4 py-2 border-b border-gray-300">{{ estudiante.seg_ape }}</td>
                            <td class="px-4 py-2 border-b border-gray-300">{{ estudiante.dni }}</td>
                            <td class="px-4 py-2 border-b border-gray-300">
                                <Link 
                                    :href="route('estudiantes.edit', estudiante)"
                                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">
                                    Editar
                                </Link>
                            </td>
                            <td class="px-4 py-2 border-b border-gray-300">
                                eliminar
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            
        </div>
    </AuthenticatedLayout>

</template>