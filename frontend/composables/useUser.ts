export interface Subscription {
  plan: string;
  isExpired: boolean;
  daysLeft: number;
  expiresAt: string;
}

export interface User {
  email: string;
  firstName: string;
  lastName: string;
  subscription: Subscription;
}

interface UserResource {
  email: string;
  first_name: string;
  last_name: string;
  subscription: {
    plan: string;
    is_expired: boolean;
    days_left: number;
    expires_at: string;
  };
}

export function mapUser(raw: UserResource): User {
  return {
    email: raw.email,
    firstName: raw.first_name,
    lastName: raw.last_name,
    subscription: {
      plan: raw.subscription.plan,
      isExpired: raw.subscription.is_expired,
      daysLeft: raw.subscription.days_left,
      expiresAt: raw.subscription.expires_at,
    },
  };
}

export const useUser = () => useSanctumUser<User>();
