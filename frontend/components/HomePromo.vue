<script setup>
import { ref, onMounted } from 'vue'

// TODO: Initial visibility should ideally be determined by SSR data from Laravel API
const isVisible = ref(true)

const isAnimated = ref(false)

const promoDuration = 700

onMounted(() => {
  // TODO: If the candidate implements localStorage/cookie checks, they should ensure
  // the timer runs ONLY if the user hasn't closed the promo before.

  setTimeout(() => {
    isAnimated.value = true
  }, 5000)
});

const hidePromo = () => {
  isAnimated.value = false

  setTimeout(() => {
    isVisible.value = false
  }, promoDuration)

  // TODO: Implement logic to save this state (e.g., in cookies or localStorage) 
  // so the promo doesn't reappear on page reload for the current user session.
}
</script>

<template>
  <div v-if="isVisible"
    class="w-full bg-gradient-to-r from-red-950 to-red-900 py-3 px-4 shadow-sm fixed bottom-0 left-0 z-10 transform transition-all ease-out"
    :class="{'opacity-100 translate-y-0': isAnimated,
      'opacity-0 translate-y-full': !isAnimated}"
      :style="{ transitionDuration: `${promoDuration}ms` }"
      >
    <div class="fluid-container flex flex-col sm:flex-row items-center justify-between gap-4">

      <div class="flex items-center gap-3 text-white flex-col sm:flex-row">
        <span class="flex-shrink-0 bg-white/20 px-2 py-1 rounded text-xs font-bold uppercase tracking-wider">
          Promo
        </span>
        <p class="text-sm font-medium text-center sm:text-left">
          Special Assessment Offer: Successfully connect your Laravel backend to unlock the full potential of this
          skeleton.
        </p>
      </div>

      <div class="flex items-center gap-4">
        <button
          class="text-sm font-semibold text-white underline hover:text-indigo-100 transition-colors whitespace-nowrap">
          Learn more
        </button>

        <button @click="hidePromo"
          class="text-indigo-100 hover:text-white transition-colors p-1 focus:outline-none rounded-md focus:ring-2 focus:ring-white/50"
          aria-label="Close promo">
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

    </div>
  </div>
</template>


