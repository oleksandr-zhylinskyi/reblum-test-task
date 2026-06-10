<script setup lang="ts">
const { isAuthenticated, logout } = useSanctumAuth();
</script>

<template>
  <header>
    <div class="container py-4 flex justify-between items-center border-b border-zinc-800">
      <NuxtLink to="/" class="text-2xl font-bold">
        Reblum
      </NuxtLink>

      <NuxtLink
        v-if="!isAuthenticated"
        to="/login"
        class="px-5 h-10 flex items-center rounded-full bg-white text-zinc-900 text-sm font-semibold hover:bg-zinc-200 transition"
      >
        Sign in
      </NuxtLink>

      <button
        v-else
        @click="logout()"
        class="px-5 h-10 rounded-full bg-zinc-800 text-sm font-medium hover:bg-zinc-700 transition"
      >
        Sign out
      </button>
    </div>
  </header>
</template>
