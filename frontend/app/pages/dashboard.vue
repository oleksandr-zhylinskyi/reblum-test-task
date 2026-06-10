<script setup lang="ts">

definePageMeta({ middleware: ['sanctum:auth'] })

const user = useSanctumUser()
const { logout } = useSanctumAuth()

// runs during SSR, authenticated, with cookies forwarded for you:
const { data: projects } = await useSanctumFetch('/api/projects')
</script>

<template>
    <div>
        <h1>Welcome, {{ user?.first_name }}</h1>
        <ul><li v-for="p in projects" :key="p.id">{{ p.name }}</li></ul>
        <button @click="logout()">Log out</button>
    </div>
</template>
