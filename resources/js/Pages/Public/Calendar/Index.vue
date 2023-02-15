<template>
    <publuc-layout>
        <div class="px-3 mb-10">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-2 text-gray-800">Calendar</h2>
                <p class="text-gray-700">Enjoy our events!</p>
            </div>
        </div>

        <div class="p-4 mt-4 visible md:hidden">
            <div class="container">
                <div class="flex flex-col md:grid grid-cols-12 text-gray-50">

                    <div v-for="event in events.data" :key="event.id" class="flex md:contents">
                        <div class="col-start-2 col-end-4 mr-2 md:mx-auto relative">
                            <div class="h-full w-6 flex items-center justify-center">
                                <div class="h-full w-1 bg-gray-600 pointer-events-none"></div>
                            </div>
                            <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-gray-600 shadow text-center">
                                <i class="fas fa-check-circle text-white"></i>
                            </div>
                        </div>
                        <div class="bg-gray-600 col-start-4 col-end-12 p-4 rounded-xl my-4 mr-auto shadow-md w-full">
                            <h3 class="font-semibold text-lg mb-1">{{ event.title}}</h3>
                            <p class="leading-tight text-justify w-full">
                                {{ event.start}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <calendar class="invisible md:visible"></calendar>
    </publuc-layout>
</template>

<script setup>
import Calendar from "@/Pages/Public/Calendar/Calendar.vue";
import PublucLayout from "@/Pages/Public/Layout/PublucLayout.vue";

defineProps({
    events: Object,
})
</script>

<style scoped>

</style>
