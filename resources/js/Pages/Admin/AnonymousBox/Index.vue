<template>
<AppLayout>
    <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Anonymous Box messages
        </h2>
    </template>
    <div class="px-12 pb-16">
        <div class="pt-16">
            <div class="accordion" id="accordionExample">
                <div v-for="message in messages.data" :key="message.id" class="accordion-item bg-white border border-gray-200">
                    <h2 class="accordion-header mb-0" id="headingOne">
                        <button class="
        accordion-button
        relative
        flex
        items-center
        w-full
        py-4
        px-5
        text-base text-gray-800 text-left
        bg-white
        border-0
        rounded-none
        transition
        focus:outline-none
      " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                            Anonymous messages {{message.id}}
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-bs-parent="#accordionExample">
                        <div class="accordion-body py-4 px-5">
                            {{message.messages}}
                        </div>
                    </div>

<!--                    <div class="flex justify-end pb-4">-->
<!--                        <Link :href="route('messages.destroy', message.id)" methods="delete" type="button" as="button" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Delete</Link>-->
<!--                    </div>-->
                </div>

            </div>
        </div>

    </div>
</AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    messages: Object,
})
</script>

<style scoped>

</style>
