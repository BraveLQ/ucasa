<template>
    <!-- HTML GOES HERE  -->
    <div class="px-2">
        <div class=" w-full bg-gray-800 rounded-2xl transform -translate-y-5 px">
            <section class="flex p-3 border-b border-gray-600">
                <div class="mr-1">
                    <img class="rounded-full"
                         src="https://pbs.twimg.com/profile_images/1366772608373387269/K6En5xnu_normal.jpg"
                         alt="Profile Picture">
                </div>
                <h1 class="text-white my-auto ml-3 font-bold text-xl">Box</h1>
            </section>
            <section class="w-full flex px-3 py-2">

                <div class="flex-1">
                    <form @submit.prevent="submit">
                        <textarea
                            v-model="form.messages"
                            class="w-full h-96 p-2 bg-transparent outline-none placeholder-gray-400 text-white resize-none"
                            rows="4" placeholder="What's happening?"></textarea>
                        <div class="flex items-center justify-between pt-2 border-t border-gray-700">
                            <div class="mx-auto py-4">
                                <button
                                    type="submit"
                                    class="transition duration-500 ease-in-out bg-white bg-opacity-100 hover:bg-opacity-50 text-gray-800 text-opacity-100 hover:text-opacity-50 py-2 px-4 rounded-lg text-base font-bold focus:outline-none">
                                    Send the messages
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </section>
        </div>
    </div>
</template>

<script setup>
import {useForm} from "@inertiajs/vue3";
defineProps({
    messages: Array
})
const form = useForm({
    messages:"",
})
const submit = () => {
    form.post(route("anonymousbox.store"))
}
</script>

<style scoped>

</style>
