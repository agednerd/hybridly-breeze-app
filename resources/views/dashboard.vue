<script setup lang="ts">
import Authenticated from '../layouts/authenticated.vue';

defineOptions({
    properties: {
        title: 'Dashboard',
    }
})
</script>

<template>
    <Authenticated title="Dashboard">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">You're logged in!</div>
                </div>
            </div>
        </div>
    </Authenticated>
</template>
