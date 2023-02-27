<template>
    <PublucLayout>
<!--        <img :src="'/storage/' + club.logo" alt="img" class="h-80 w-72 object-cover rounded-t-xl" />-->
        <section id="content" class="prose lg:prose-2xl container mx-auto font-sans px-4 py-2 my-2">
            <article>
                <footer class="w-full mx-auto">
                    <div style="height: 1.5em; margin: 2em 0 2.5em 0" class="flex items-center">
                        <img :src="'/storage/' + club.logo"  alt="" class="rounded-full flex mr-1.5 border-orange-500 h-16 w-16 object-cover" >
                        <div class="flex items-center">
                            <address class="author ml-4">{{club.title}}</address>
                        </div>
                        <div class="flex flex-1 justify-end items-center">

                            <div>
                                <a aria-label="Share this article" href="#">
                                    <i class="fa-solid fa-share-from-square text-2-xl"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </footer>
                <figure>
                    <img class="rounded shadow"  :src="'/storage/' + club.banner" >
                    <figcaption class="italic text-lg md:text-sm">Members: {{club.members}}</figcaption>
                </figure>
                <div class="md:px-8">

                    <div class="">
                        <a aria-label="Accessibility help" :href="'mailto:' + club.email" class="no-underline px-2 py-1 bg-orange-800 hover:bg-orange-900 text-gray-100 rounded text-sm md:text-base">Become Member</a>
                    </div>
                    <p>{{club.description}}</p>
                </div>
            </article>
        </section>
    </PublucLayout>
</template>

<script setup>
import PublucLayout from "@/Pages/Public/Layout/PublucLayout.vue";

defineProps({
    club:Object
})
</script>

<style scoped>

</style>
