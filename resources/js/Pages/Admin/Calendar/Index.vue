<template>
    <AppLayout>
        <div class="p-9">
            <div>
                <h1 class="text-xl font-bold">Events Dashboard</h1>
            </div>

            <div class="pt-16">

                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-orange-50">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                ID
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Event Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Start date
                            </th>
                            <th scope="col" class="py-3 px-6">
                                End date
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="event in events.data" :key="event.id" class="bg-white border-b  hover:bg-gray-50">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                {{ event.id }}
                            </th>
                            <td class="py-4 px-6">
                                {{ event.title}}
                            </td>
                            <td class="py-4 px-6">
                                {{ event.start}}
                            </td>
                            <td class="py-4 px-6">
                                {{ event.end }}
                            </td>
                            <td class="py-4 px-6 text-right">
                                <Link :href="route('events.destroy', event.id)" method="delete" as="button" type="button" class="font-medium text-red-500 hover:text-red-700 ml-6">Delete</Link>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    events: Object
})
</script>

<style scoped>

</style>
