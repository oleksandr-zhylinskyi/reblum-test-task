<script setup>
// TODO: Fetch Gallery list (before/after image URLs, titles) from Laravel API during SSR
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

      <div class="flex gap-6 flex-col md:flex-row">
        <div v-for="i in 3" :key="i"
          class="group rounded-2xl overflow-hidden border border-zinc-600 bg-zinc-900 shadow-sm hover:shadow-md transition-shadow">
          <div class="relative flex w-full aspect-[4/3] bg-zinc-100">

            <div class="w-1/2 h-full bg-zinc-700 flex flex-col items-center justify-center border-r border-zinc-500">
              <svg class="w-8 h-8 text-zinc-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              <span class="text-zinc-500 font-medium text-sm">Before</span>
            </div>

            <div class="w-1/2 h-full bg-zinc-800 flex flex-col items-center justify-center">
              <svg class="w-8 h-8 text-zinc-500 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              <span class="text-zinc-600 font-medium text-sm">After</span>
            </div>

            <div
              class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-md text-xs font-bold text-zinc-700 uppercase tracking-wider shadow-sm">
              Picture {{ i }}
            </div>
          </div>

          <div class="p-5">
            <h3 class="font-bold text-lg mb-1">Picture Name Placeholder</h3>
            <p class="text-sm line-clamp-2">
              Candidate should bind the project description or meta-data here from the API response.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
