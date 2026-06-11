<script setup lang="ts">
const { isAuthenticated } = useSanctumAuth();

const features = [
  {
    icon: 'M13 10V3L4 14h7v7l9-11h-7z',
    title: 'Retouch on the Go',
    description: 'Bring a professional retoucher with you. Reblum works right on your computer, wherever you are.',
  },
  {
    icon: 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z',
    title: 'Unlimited number of photos',
    description: 'Reblum processes as many photos as you need without any additional costs.',
  },
  {
    icon: 'M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z',
    title: 'All-in-one Solution',
    description: 'Reblum perfects skin in just one pass — no need for a bunch of plugins. It makes the process faster, easier, and more affordable.',
  },
  {
    icon: 'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z',
    title: 'Detailed Analytics',
    description: 'Placeholder — describe your reporting or insights feature here.',
  },
  {
    icon: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
    title: 'Team Collaboration',
    description: 'Placeholder — describe your multi-user or sharing capabilities here.',
  },
]
</script>

<template>
  <section v-if="!isAuthenticated" class="py-16 md:py-20">
    <div class="container">
      <div class="text-center mb-12 md:mb-16">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Everything you need</h2>
        <p class="text-lg text-zinc-400 max-w-2xl mx-auto">Here are some of the features</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div
          v-for="feature in features"
          :key="feature.title"
          class="bg-zinc-800 rounded-2xl p-6 flex flex-col gap-4"
        >
          <div class="w-10 h-10 rounded-xl bg-red-700/20 flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="feature.icon" />
            </svg>
          </div>

          <div>
            <h3 class="font-bold text-lg mb-1">{{ feature.title }}</h3>
            <p class="text-sm text-zinc-400">{{ feature.description }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
