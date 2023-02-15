<template>
        <div class="container px-2 mx-auto">

            <!-- Section: Design Block -->
            <section class="mb-10">

                <div class="relative overflow-hidden bg-no-repeat bg-cover rounded-lg bg-[url('/images/bg.jpg')]" style="background-position: 50%; height: 500px;"></div>

                <div class="container mx-auto px-6 md:px-12 xl:px-32">
                    <div class="text-center text-gray-800">
                        <div class="block rounded-lg shadow-lg px-6 py-12 md:py-16 md:px-12" style="margin-top: -170px; background: hsla(0,0%,100%,0.21); backdrop-filter: blur(30px);">
                            <h1 class="text-3xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">Welcome to <br /><span >CODSA</span></h1>
                            <Link :href="route('calendars.index')" class="inline-block px-7 py-3 mb-2 md:mb-0 mr-0 md:mr-2 bg-gray-800 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-400 hover:shadow-lg transition duration-150 ease-in-out"  role="button">Calendar</Link>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Design Block -->
        </div>
        <!-- Container for demo purpose -->
    <!-- Container for demo purpose -->

</template>

<script>
import FrontCards from "@/Components/FrontCards.vue";
import {Link} from "@inertiajs/vue3";

export default {
    name: "Landing",
    components: {FrontCards, Link}
}
</script>

<style scoped>

</style>
