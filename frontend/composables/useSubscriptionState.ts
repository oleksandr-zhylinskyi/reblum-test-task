export type SubscriptionState = 'guest' | 'trial' | 'monthly' | 'annual' | 'expired';

export function useSubscriptionState() {
  const { isAuthenticated } = useSanctumAuth();
  const rawUser = useUser();
  const user = computed(() => rawUser.value ? mapUser(rawUser.value as any) : null);

  const state = computed<SubscriptionState>(() => {
    if (!isAuthenticated.value || !user.value) {
      return 'guest';
    }
    const { plan, isExpired } = user.value.subscription;
    if (isExpired) {
      return 'expired';
    }
    if (plan === 'trial') {
      return 'trial';
    }
    if (plan === 'monthly') {
      return 'monthly';
    }
    if (plan === 'annual') {
      return 'annual';
    }
    return 'guest';
  });

  const expiresAtDate = computed(() => {
    const raw = user.value?.subscription.expiresAt;
    if (!raw) return null;
    return new Date(raw).toLocaleDateString(undefined, { year: 'numeric', month: 'long', day: 'numeric' });
  });

  return { user, state, expiresAtDate };
}
