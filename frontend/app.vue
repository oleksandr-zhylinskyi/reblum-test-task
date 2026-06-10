<script setup>
useHead({
  title: 'Reblum Nuxt Skeleton',
  meta: [
    { name: 'description', content: 'A minimal Nuxt 4 frontend skeleton for Reblum coding challenge.' }
  ]
});
</script>

<template>
  <div class="min-h-screen flex flex-col bg-zinc-900 text-neutral-200">
    <AppHeader />
    <NuxtPage />
    <AppFooter />
  </div>
</template>
