<script setup lang="ts">
const { state } = useSubscriptionState();
const itemCount = computed(() => (['monthly', 'annual'].includes(state.value) ? 1 : 3));
</script>

<template>
  <section class="py-16 md:py-20">
    <div class="container">
      <div class="text-center mb-12 md:mb-16">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">
          Transformations
        </h2>
        <p class="text-lg text-zinc-300 mb-10 max-w-2xl mx-auto">
          See the before and after results. Connect your Laravel backend to load these images dynamically.
        </p>
      </div>

      <div class="flex gap-6 flex-col md:flex-row" :class="{ 'md:justify-center': itemCount === 1 }">
        <div v-for="i in itemCount" :key="i"
          class="group rounded-2xl overflow-hidden border border-zinc-600 bg-zinc-900 shadow-sm hover:shadow-md transition-shadow">
          <div class="relative flex w-full aspect-video overflow-hidden">

            <img src="https://placehold.co/600x400" alt="Before" class="w-1/2 h-full object-cover" />
            <img src="https://placehold.co/600x400" alt="After" class="w-1/2 h-full object-cover border-l border-zinc-600" />

            <span class="absolute bottom-3 left-3 bg-black/50 backdrop-blur-sm text-white text-xs font-semibold px-2 py-1 rounded">Before</span>
            <span class="absolute bottom-3 right-3 bg-black/50 backdrop-blur-sm text-white text-xs font-semibold px-2 py-1 rounded">After</span>

            <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-md text-xs font-bold text-zinc-700 uppercase tracking-wider shadow-sm">
              Picture {{ i }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
