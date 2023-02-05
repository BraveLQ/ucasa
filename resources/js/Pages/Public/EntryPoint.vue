<template>
    <main class="max-w-full h-full flex relative overflow-y-hidden">
        <!-- Container -->
        <landing></landing>

    </main>
</template>

<script>
import TextAnimation from "@/Components/TextAnimation.vue";
import Landing from "@/Components/Landing.vue";
export default {
    name: "EntryPoint",
    components: {Landing, TextAnimation, },
    data() {
        return {
            showMenu: false,
        };
    },
}
</script>

<style scoped>

</style>
