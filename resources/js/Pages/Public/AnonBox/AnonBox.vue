<template>
<publuc-layout>
    <div class="px-12 py-12">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-2 text-gray-800">Anonymous Box</h2>
            <p class="text-gray-700">Your messages 100% anonymous and encrypted!</p>
        </div>
    </div>

    <div>
        <box></box>
    </div>
</publuc-layout>
</template>

<script>
import PublucLayout from "@/Pages/Public/Layout/PublucLayout.vue";
import Box from "@/Pages/Public/AnonBox/Box.vue";
export default {
    name: "AnonBox",
    components: {Box, PublucLayout}
}
</script>

<style scoped>

</style>
