<script setup lang="ts">
useHead({
	title: 'Welcome'
})
</script>

<template layout="guest">
	<div class="flex gap-2 items-center justify-center">
		<RouterLink :href="route('login')">Login</RouterLink>
		<RouterLink :href="route('register')">Register</RouterLink>
	</div>
</template>
