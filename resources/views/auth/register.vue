<script setup>
const form = useForm({
    method: 'post',
    url: route('register'),
    fields: {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    }
});

useHead({
    title: 'Register',
});
</script>

<template layout="guest">
    <form @submit.prevent="form.submit">
        <div>
            <InputLabel for="name" value="Name" />

            <TextInput
                id="name"
                type="text"
                class="mt-1 block w-full"
                v-model="form.fields.name"
                required
                autofocus
                autocomplete="name"
            />

            <InputError class="mt-2" :message="form.errors.name" />
        </div>

        <div class="mt-4">
            <InputLabel for="email" value="Email" />

            <TextInput
                id="email"
                type="email"
                class="mt-1 block w-full"
                v-model="form.fields.email"
                required
                autocomplete="username"
            />

            <InputError class="mt-2" :message="form.errors.email" />
        </div>

        <div class="mt-4">
            <InputLabel for="password" value="Password" />

            <TextInput
                id="password"
                type="password"
                class="mt-1 block w-full"
                v-model="form.fields.password"
                required
                autocomplete="new-password"
            />

            <InputError class="mt-2" :message="form.errors.password" />
        </div>

        <div class="mt-4">
            <InputLabel for="password_confirmation" value="Confirm Password" />

            <TextInput
                id="password_confirmation"
                type="password"
                class="mt-1 block w-full"
                v-model="form.fields.password_confirmation"
                required
                autocomplete="new-password"
            />

            <InputError class="mt-2" :message="form.errors.password_confirmation" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <RouterLink
                :href="route('login')"
                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
            >
                Already registered?
            </RouterLink>

            <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Register
            </PrimaryButton>
        </div>
    </form>
</template>
