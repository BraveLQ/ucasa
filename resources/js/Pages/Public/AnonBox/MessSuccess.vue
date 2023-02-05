<template>
    <publuc-layout>
        <div class='flex items-center justify-center min-h-screen bg-gray-100'>
            <div class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
                <div class='max-w-md mx-auto space-y-6'>

                    <!-- Component starts here -->
                    <h2 class="flex flex-row flex-nowrap items-center my-8">
                        <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                        <span class="flex-none block mx-4  px-4 py-2.5 text-xs leading-none font-medium uppercase bg-green-600 text-white">
                    Your message was received by UCASA
                </span>
                        <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                    </h2>
                    <div class="flex">

                            <Link :href="route('home.index')"
                                type="button"
                                class="mx-auto justify-center border border-gray-700 bg-gray-700 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            >
                                Back to home
                            </Link>


                    </div>

                    <!-- Component ends here -->

                </div>
            </div>
        </div>
    </publuc-layout>
</template>

<script>
import PublucLayout from "@/Pages/Public/Layout/PublucLayout.vue";
import {Link} from "@inertiajs/vue3";

export default {
    name: "MessSuccess",
    components: {PublucLayout, Link}
}
</script>

<style scoped>


</style>
