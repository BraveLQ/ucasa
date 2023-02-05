<template>
    <publuc-layout>
        <calendar></calendar>
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
