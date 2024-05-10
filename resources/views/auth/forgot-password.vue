<script setup lang="ts">
defineProps<{
    status: string | null;
}>();

const form = useForm({
    method: "post",
    url: route("password.email"),
    fields: {
        email: "",
    },
});

useHead({
    title: "Forgot Password",
});
</script>

<template layout="guest">
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        Forgot your password? No problem. Just let us know your email address
        and we will email you a password reset link that will allow you to
        choose a new one.
    </div>

    <div
        v-if="status"
        class="mb-4 font-medium text-sm text-green-600 dark:text-green-400"
    >
        {{ status }}
    </div>

    <form @submit.prevent="form.submit">
        <div>
            <InputLabel for="email" value="Email" />

            <TextInput
                id="email"
                type="email"
                class="mt-1 block w-full"
                v-model="form.fields.email"
                required
                autofocus
                autocomplete="username"
            />

            <InputError class="mt-2" :message="form.errors.email" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <PrimaryButton
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
            >
                Email Password Reset Link
            </PrimaryButton>
        </div>
    </form>
</template>
