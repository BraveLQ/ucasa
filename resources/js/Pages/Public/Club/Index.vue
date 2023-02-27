<template>
    <PublucLayout>
        <div class="px-3">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-2 text-gray-800">Clubs</h2>
                <p class="text-gray-700">Our clubs!</p>
            </div>
        </div>


        <div class="flex  mt-10 pb-10 gap-y-5  px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-full">

            <div v-for="club in clubs.data" :key="club.id" class=" mx-auto bg-white shadow-lg rounded-3xl pb-8 max-w-80">
                <Link :href="route('club.show', club.id)">
<!--                    <div class="p-2.5">-->
<!--                        <img :src="club.logo" alt="" class="rounded-2xl max-w-2xl h-56 object-cover shadow-lg">-->
<!--                    </div>-->
<!--                    <div class="flex items-center justify-between px-3.5">-->
<!--                        <div>-->
<!--                            <h2 class="font-semibold">{{club.title}}</h2>-->
<!--                            <p class="text-sm text-gray-500 capitalize">Members: {{club.members}}</p>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">

                            <img :src="club.logo" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                            <div class="px-4 py-3 w-72">

                                <p class="text-lg font-bold text-black truncate block capitalize">{{club.title}}</p>
                                <div class="flex items-center">
                                    <p class="text-lg font-semibold text-black cursor-auto my-3">Members:</p>

                                        <p class="text-sm text-gray-600 cursor-auto ml-2">{{club.members}}</p>


                                </div>
                            </div>
                    </div>
                </Link>
            </div>

        </div>
    </PublucLayout>
</template>

<script setup>
import PublucLayout from "@/Pages/Public/Layout/PublucLayout.vue";
import {Link} from "@inertiajs/vue3";
defineProps({
    clubs:Object
})
</script>

<style scoped>

</style>
