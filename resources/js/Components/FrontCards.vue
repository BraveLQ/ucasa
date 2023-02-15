<template>
    <div class="flex flex-wrap items-center justify-center">

        <Link :href="route('calendars.index')">
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg">
                <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                    <img class="relative w-40" src="https://static.vecteezy.com/system/resources/previews/010/872/630/original/3d-calendar-icon-png.png" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">Check</span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">Our latest event</span>
                    </div>
                </div>
            </div>
        </Link>

        <Link :href="route('anonymousbox.index')">
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg">
                <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                    <img class="relative w-40" src="https://static.vecteezy.com/system/resources/previews/010/872/393/original/3d-delivery-box-icon-png.png" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">Check</span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">Anonymous Box</span>
                    </div>
                </div>
            </div>
        </Link>
        <Link :href="route('gym.index')">
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-blue-400 rounded-lg max-w-xs shadow-lg">
                <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>
                </svg>
                <div class="relative pt-10 px-10 flex items-center justify-center">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>
                    <img class="relative w-40" src="https://cdn1.iconfinder.com/data/icons/sport-fitness-6/512/dumbbell-fitness-gym-heavy-muscle-1024.png" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">Check</span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">GYM schedule</span>
                    </div>
                </div>
            </div>
        </Link>
        <!--        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-purple-500 rounded-lg max-w-xs shadow-lg">-->
<!--            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none" style="transform: scale(1.5); opacity: 0.1;">-->
<!--                <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white"/>-->
<!--                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white"/>-->
<!--            </svg>-->
<!--            <div class="relative pt-10 px-10 flex items-center justify-center">-->
<!--                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3" style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;"></div>-->
<!--                <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">-->
<!--            </div>-->
<!--            <div class="relative text-white px-6 pb-6 mt-6">-->
<!--                <span class="block opacity-75 -mb-1">Outdoor</span>-->
<!--                <div class="flex justify-between">-->
<!--                    <span class="block font-semibold text-xl">Oak Tree</span>-->
<!--                    <span class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
</template>

<script setup>
import {Link} from "@inertiajs/vue3";

</script>

<style scoped>

</style>
