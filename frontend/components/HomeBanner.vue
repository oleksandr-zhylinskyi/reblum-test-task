<script setup>
// TODO: fetch Home Banner data (title, subtitle, image path) from Laravel API during SSR
</script>

<template>
  <section class="py-16 md:py-20">
    <div class="container">
      <div class="flex justify-between lg:items-center gap-6 flex-col lg:flex-row">

        <div class="space-y-6 lg:w-1/2">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
            Welcome to <span class="text-red-700">Reblum</span> skeleton frontend!
          </h1>

          <p class="text-lg text-slate-300 max-w-xl">
            This is a minimal frontend skeleton. Your task is to connect it to the backend, implement SSR fetching, and
            configure session logic.
          </p>
        </div>

        <div
          class="lg:w-1/2 aspect-video lg:aspect-[4/3] bg-slate-800 rounded-2xl flex items-center justify-center border-2 border-dashed border-slate-600">
          <div class="text-slate-400 font-medium text-center px-4">
            <svg class="w-12 h-12 mx-auto mb-3 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Banner Image Placeholder<br>
            <span class="text-sm font-normal">Candidate to bind `image_url` from API</span>
          </div>
        </div>

      </div>
    </div>
  </section>
</template>
