<script setup lang="ts">
const { state } = useSubscriptionState();

const bannerText: Record<string, string> = {
  guest: 'Hero+Banner',
  trial: 'Trial+Plan',
  monthly: 'Monthly+Plan',
  annual: 'Annual+Plan',
  expired: 'Subscription+Expired',
};

const bannerUrl = computed(() => `https://placehold.co/1200x600?text=${bannerText[state.value]}`);
</script>

<template>
  <section class="py-16 md:py-20">
    <div class="container">
      <div class="flex justify-between lg:items-center gap-6 flex-col lg:flex-row">

        <HomeBannerTitle />

        <div class="lg:w-1/2">
          <img :src="bannerUrl" :alt="state" class="w-full rounded-2xl object-cover" />
        </div>

      </div>
    </div>
  </section>
</template>
