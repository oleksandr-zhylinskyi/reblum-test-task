<script setup>
// TODO: Fetch CTA text data from Laravel API if it is dynamic during SSR
</script>

<template>
  <section class="py-16 md:py-20">
    <div class="container">
      <div class="flex flex-col items-center text-center bg-zinc-800 py-12 sm:py-20 px-8 rounded-3xl">

        <div class="max-w-2xl">
          <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Ready to scale your business?
          </h2>
  
          <p class="text-lg text-slate-300 mb-10">
            Join thousands of users who are already building the future. Create an account to access the dashboard and
            test the authentication flow.
          </p>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
          <button
            class="flex items-center justify-center py-2 px-8 rounded-full bg-red-700 text-lg hover:bg-red-600 transition-all text-slate-100">
            Get Started
          </button>

          <button
            class="flex items-center justify-center border border-slate-100 px-6 py-2 rounded-full hover:text-black hover:bg-slate-100 transition-all text-lg text-slate-100">
            Learn More
          </button>
        </div>

      </div>
    </div>
  </section>
</template>


