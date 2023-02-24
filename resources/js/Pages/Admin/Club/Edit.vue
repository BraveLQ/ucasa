<template>
    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Club
            </h2>
        </template>


        <div class="flex items-center justify-center p-12">
            <div class="mx-auto w-full max-w-[550px] bg-white">
                <form
                    class="py-6 px-9"
                    @submit.prevent="submit"
                >
                    <div class="mb-5">
                        <label
                            for="title"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Title of the Club or organization
                        </label>
                        <input
                            v-model="form.title"
                            type="text"
                            name="title"
                            id="title"
                            placeholder="Club name"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                    <div class="mb-5">
                        <label
                            for="logo"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Upload logo (in png format without background)
                        </label>
                        <input
                            @input="form.logo = $event.target.files[0]"
                            type="file"
                            name="logo"
                            id="logo"
                            placeholder="Club name"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                    <div class="mb-5">
                        <label
                            for="title"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            How many people in club (provide in number)
                        </label>
                        <input
                            v-model="form.members"
                            type="text"
                            name="members"
                            id="members"
                            placeholder="0"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                    <div class="mb-5">
                        <label
                            for="title"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Upload banner
                        </label>
                        <input
                            @input="form.banner = $event.target.files[0]"
                            type="file"
                            name="banner"
                            id="banner"
                            placeholder="banner"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                    <div class="mb-5">
                        <label
                            for="title"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Contact Email Address
                        </label>
                        <input
                            v-model="form.email"
                            type="text"
                            name="email"
                            id="email"
                            placeholder="example@gmail.com"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                        />
                    </div>
                    <div class="w-full md:w-full px-3 mb-2 mt-2">
                        <label
                            for="title"
                            class="mb-3 block text-base font-medium text-[#07074D]"
                        >
                            Description
                        </label>
                        <textarea v-model="form.description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder='Description' required></textarea>
                    </div>


                    <div>
                        <button
                            type="submit"
                            class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none"
                        >
                            Send File
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import {router, useForm,} from "@inertiajs/vue3";
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    club:Object,
})

const form = useForm({
    title: props.club?.title,
    logo: null,
    members: props.club?.members,
    banner: null,
    email: props.club?.email,
    description: props.club?.description,
})

const submit = () => {
    router.post(`/clubs/${props.club.id}`, {
        _method: 'put',
        title: form.title,
        logo: form.logo,
        members: form.members,
        banner: form.banner,
        email: form.banner,
        description: form.description,
    });
}
</script>

<style scoped>

</style>
