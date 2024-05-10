<script setup lang="ts">
const props = defineProps<{ email: string; token: string }>();

const form = useForm({
    method: "post",
    url: route("password.store"),
    fields: {
        token: props.token,
        email: props.email,
        password: "",
        password_confirmation: "",
    },
});
</script>

<template layout="guest">
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

            <InputError
                class="mt-2"
                :message="form.errors.password_confirmation"
            />
        </div>

        <div class="flex items-center justify-end mt-4">
            <PrimaryButton
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
            >
                Reset Password
            </PrimaryButton>
        </div>
    </form>
</template>
