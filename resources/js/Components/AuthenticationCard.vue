<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div>
            <slot name="logo" />
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 glassy shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>

<style scoped>
.glassy {
    backdrop-filter: blur(0px) saturate(172%);
    -webkit-backdrop-filter: blur(0px) saturate(172%);
    background-color: rgba(255, 255, 255, 0.47);
    border-radius: 12px;
    border: 1px solid rgba(209, 213, 219, 0.3);
}
</style>
