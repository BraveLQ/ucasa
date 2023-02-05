<template>
        <landing class="pt-8" ></landing>
        <front-cards></front-cards>
</template>

<script>
import TextAnimation from "@/Components/TextAnimation.vue";
import Landing from "@/Components/Landing.vue";
import FrontCards from "@/Components/FrontCards.vue";
export default {
    name: "EntryPoint",
    components: {FrontCards, Landing, TextAnimation, },
    data() {
        return {
            showMenu: false,
        };
    },
}
</script>

<style scoped>
/* Hide scrollbar for Chrome, Safari and Opera */
.scroll::-webkit-scrollbar {
    display: none;
}
</style>
