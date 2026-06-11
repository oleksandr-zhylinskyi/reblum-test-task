<script setup lang="ts">
const { user, state, expiresAtDate } = useSubscriptionState();
</script>

<template>
  <div class="space-y-6 lg:w-1/2">
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
      <template v-if="state === 'guest'">
        Professional <span class="text-red-700">AI</span> Photo Retouching
      </template>
      <template v-else-if="state === 'trial'">
        Welcome, <span class="text-red-700">{{ user!.firstName }}</span>! Your trial ends in {{ user!.subscription.daysLeft }} days.
      </template>
      <template v-else-if="state === 'monthly'">
        Welcome, <span class="text-red-700">{{ user!.firstName }}</span>!
      </template>
      <template v-else-if="state === 'annual'">
        Welcome, <span class="text-red-700">{{ user!.firstName }}</span>!
      </template>
      <template v-else-if="state === 'expired'">
        We miss you <span class="text-red-700">{{ user!.firstName }}</span>!
      </template>
    </h1>

    <p class="text-lg text-slate-300 max-w-xl">
      <template v-if="state === 'monthly'">
        Your plan: Monthly · Renews {{ expiresAtDate }}
      </template>
      <template v-else-if="state === 'annual'">
        Your plan: Annual · Renews {{ expiresAtDate }}
      </template>
      <template v-else-if="state === 'expired'">
        Your subscription ended on {{ expiresAtDate }}
      </template>
    </p>
  </div>
</template>
