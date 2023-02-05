<template>
    <!-- HTML GOES HERE  -->
    <div class="px-12">
        <div class=" w-full bg-gray-800 rounded-2xl transform -translate-y-5 px">
            <section class="p-3 border-b border-gray-600">
                <h1 class="text-white font-bold text-xl">Box</h1>
            </section>
            <section class="w-full flex px-3 py-2">
                <div class="mr-1">
                    <img class="rounded-full" src="https://pbs.twimg.com/profile_images/1366772608373387269/K6En5xnu_normal.jpg" alt="Profile Picture">
                </div>
                <div class="flex-1">
                    <textarea class="w-full h-96 p-2 bg-transparent outline-none placeholder-gray-400 text-white resize-none" rows="4" placeholder="What's happening?"></textarea>
                    <div class="flex items-center justify-between pt-2 border-t border-gray-700">
                        <div class="mx-auto py-4">
                            <button class="transition duration-500 ease-in-out bg-white bg-opacity-100 hover:bg-opacity-50 text-gray-800 text-opacity-100 hover:text-opacity-50 py-2 px-4 rounded-lg text-base font-bold focus:outline-none">Send the messages </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
export default {
    name: "Box"
}
</script>

<style scoped>

</style>
