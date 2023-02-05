<template>
    <publuc-layout>
        <div class="px-12 py-12">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-2 text-gray-800">Calendar</h2>
                <p class="text-gray-700">Enjoy our events!</p>
            </div>
        </div>
        <calendar class="invisible md:visible"></calendar>
    </publuc-layout>
</template>

<script>
import Calendar from "@/Pages/Public/Calendar/Calendar.vue";
import PublucLayout from "@/Pages/Public/Layout/PublucLayout.vue";
export default {
    name: "Index",
    components: {PublucLayout, Calendar}
}
</script>

<style scoped>

</style>
