<script setup lang="ts">

import {reactive, ref} from "vue";

definePageMeta({ middleware: ['sanctum:guest'] })

const { login } = useSanctumAuth()
const form = reactive({ email: '', password: '' })
const error = ref<string | null>(null)

async function onSubmit() {
    error.value = null
    try {
        await login(form);
    } catch (e: any) {
        error.value = e?.data?.message ?? 'Login failed'
    }
}
</script>

<template>
    <form @submit.prevent="onSubmit">
        <input v-model="form.email" type="email" placeholder="Email" />
        <input v-model="form.password" type="password" placeholder="Password" />
        <button type="submit">Log in</button>
        <p v-if="error">{{ error }}</p>
    </form>
</template>
