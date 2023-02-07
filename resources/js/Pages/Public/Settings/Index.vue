<template>
<publuc-layout>
    <div class="px-3">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-2 text-gray-800">Settings</h2>
            <p class="text-gray-700">You have no permission for the App settings</p>
        </div>
    </div>

    <div class="container px-3 mx-auto">

        <!-- Section: Design Block -->
        <section class="mb-32 text-gray-800">

            <!-- Jumbotron -->
            <div class="container mx-auto xl:px-32 text-center lg:text-left">
                <div class="grid lg:grid-cols-2 flex items-center">
                    <div class="mb-12 lg:mb-0">
                        <div
                            class="block rounded-lg shadow-lg px-6 py-12 lg:py-6 xl:py-12 md:px-12 lg:-mr-14"
                            style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px)"
                        >
                            <h3 class="text-2xl font-bold mb-3">We know how valuable your time is</h3>
                            <h5 class="text-lg text-blue-600 font-bold mb-12 lg:mb-10 xl:mb-12">Let us answer your questions</h5>

                            <p class="font-bold mb-4">The App is powered by UCA CODED Club.</p>
                            <p class="text-gra-500 mb-6">
                                If you sow any problem with the App or have any suggestions please contact UCASA or members of CODED Club.
                            </p>

                        </div>
                    </div>

                    <div>
                        <img
                            src="https://avatars.mds.yandex.net/i?id=d0b0b024cd36631ada74f3f59625fbcc_l-5220417-images-thumbs&n=13"
                            class="w-full rounded-lg shadow-lg"
                            alt=""
                        />
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->

        </section>
        <!-- Section: Design Block -->

    </div>
    <!-- Container for demo purpose -->
</publuc-layout>
</template>

<script>
import PublucLayout from "@/Pages/Public/Layout/PublucLayout.vue";
export default {
    name: "Index",
    components: {PublucLayout}
}
</script>

<style scoped>

</style>
