<script setup>
import { Head,  } from '@inertiajs/vue3';
import PublucLayout from "@/Pages/Public/Layout/PublucLayout.vue";
import EntryPoint from "@/Pages/Public/EntryPoint.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />
    <publuc-layout>
        <entry-point></entry-point>
    </publuc-layout>
</template>
