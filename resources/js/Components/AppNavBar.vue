<script setup>
import {Link} from "@inertiajs/vue3";
</script>

<template>
    <nav class="bg-gray-800">
        <div class="container mx-auto flex justify-between items-center p-4">
            <Link href="/" class="text-white">Home</Link>
            <Link href="/about" class="text-white">About</Link>
            <Link href="/contact" class="text-white">Contact</Link>
        </div>
    </nav>

</template>

<style scoped>

</style>
