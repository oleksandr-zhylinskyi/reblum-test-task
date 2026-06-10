<script setup lang="ts">
definePageMeta({ middleware: 'sanctum:guest' });

const { login } = useSanctumAuth();

const form = reactive({ email: '', password: '' });
const error = ref('');
const loading = ref(false);

async function handleSubmit() {
  error.value = '';
  loading.value = true;

  try {
    await login(form);
  } catch {
    error.value = 'Invalid credentials. Please try again.';
  } finally {
    loading.value = false;
  }
}
</script>

<template>
  <main class="flex-1 flex items-center justify-center px-4 py-16">
    <div class="w-full max-w-sm">
      <h1 class="text-2xl font-bold text-center mb-8">Sign in to Reblum</h1>

      <form @submit.prevent="handleSubmit" class="bg-zinc-800 rounded-2xl p-8 space-y-5">
        <div v-if="error" class="text-sm text-red-400 bg-red-400/10 border border-red-400/20 rounded-lg px-4 py-3">
          {{ error }}
        </div>

        <div class="space-y-1.5">
          <label for="email" class="block text-sm font-medium text-zinc-300">Email</label>
          <input
            id="email"
            v-model="form.email"
            type="email"
            autocomplete="email"
            required
            placeholder="you@example.com"
            class="w-full bg-zinc-900 border border-zinc-700 rounded-lg px-4 py-2.5 text-sm text-neutral-200 placeholder-zinc-500 focus:outline-none focus:ring-2 focus:ring-white/20 focus:border-zinc-500 transition"
          />
        </div>

        <div class="space-y-1.5">
          <label for="password" class="block text-sm font-medium text-zinc-300">Password</label>
          <input
            id="password"
            v-model="form.password"
            type="password"
            autocomplete="current-password"
            required
            placeholder="••••••••"
            class="w-full bg-zinc-900 border border-zinc-700 rounded-lg px-4 py-2.5 text-sm text-neutral-200 placeholder-zinc-500 focus:outline-none focus:ring-2 focus:ring-white/20 focus:border-zinc-500 transition"
          />
        </div>

        <button
          type="submit"
          :disabled="loading"
          class="w-full bg-white text-zinc-900 font-semibold rounded-lg px-4 py-2.5 text-sm hover:bg-zinc-200 active:bg-zinc-300 disabled:opacity-50 disabled:cursor-not-allowed transition"
        >
          <span v-if="loading">Signing in…</span>
          <span v-else>Sign in</span>
        </button>
      </form>
    </div>
  </main>
</template>
