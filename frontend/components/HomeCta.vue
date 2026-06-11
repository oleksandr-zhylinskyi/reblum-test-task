<script setup lang="ts">
const { state } = useSubscriptionState();
</script>

<template>
  <section class="py-16 md:py-20">
    <div class="container">
      <div class="flex flex-col items-center text-center bg-zinc-800 py-12 sm:py-20 px-8 rounded-3xl">

        <div class="max-w-2xl">
          <h2 class="text-3xl md:text-4xl font-bold mb-6">
            <template v-if="state === 'guest'">Start Free Trial</template>
            <template v-else-if="state === 'trial'">Subscribe Now</template>
            <template v-else-if="state === 'monthly'">Download App</template>
            <template v-else-if="state === 'annual'">Download App</template>
            <template v-else-if="state === 'expired'">Resubscribe</template>
          </h2>

          <p class="text-lg text-slate-300 mb-10">
            <template v-if="state === 'guest'">
              Join thousands of users already building the future. Create an account to get started.
            </template>
            <template v-else-if="state === 'trial'">
              Upgrade before your trial ends to keep uninterrupted access to all features.
            </template>
            <template v-else-if="state === 'monthly'">
              Get two months free when you switch to an annual plan.
            </template>
            <template v-else-if="state === 'annual'">
              Thank you for your support. Explore everything Reblum has to offer.
            </template>
            <template v-else-if="state === 'expired'">
              Reactivate your subscription to restore full access to your account.
            </template>
          </p>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
          <button
            class="flex items-center justify-center py-2 px-8 rounded-full bg-red-700 text-lg hover:bg-red-600 transition-all text-slate-100">
            <template v-if="state === 'guest'">Get Started</template>
            <template v-else-if="state === 'trial'">Upgrade Now</template>
            <template v-else-if="state === 'monthly'">Switch to Annual</template>
            <template v-else-if="state === 'annual'">Go to Dashboard</template>
            <template v-else-if="state === 'expired'">Reactivate</template>
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


