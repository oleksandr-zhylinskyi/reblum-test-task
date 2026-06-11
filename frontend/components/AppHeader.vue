<script setup lang="ts">
const { isAuthenticated, logout } = useSanctumAuth();

const rawUser = useUser();
const user = computed(() => rawUser.value ? mapUser(rawUser.value as any) : null);
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
        Log in
      </NuxtLink>

      <div v-else class="flex items-center gap-4">
        <span v-if="user" class="text-sm text-zinc-400">
          {{ user.firstName }} {{ user.lastName }}
        </span>
        <button
          @click="logout()"
          class="px-5 h-10 rounded-full bg-zinc-800 text-sm font-medium hover:bg-zinc-700 transition"
        >
          Log out
        </button>
      </div>
    </div>
  </header>
</template>
