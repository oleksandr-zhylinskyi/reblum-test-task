# Reblum — Test Task

Full-stack application built with **Laravel** (API) and **Nuxt 4** (frontend).

I decided to use Laravel Sacntum for authentication and session management because it's a well-known and battle-tested package.

If there was a need for a mobile app, I would have considered token-based auth.
## Stack

| Layer | Technology                          |
|---|-------------------------------------|
| Backend | Laravel 13, PHP 8.5, MySQL 8.4      |
| Frontend | Nuxt 4, Vue 3, Tailwind CSS         |
| Auth | Laravel Sanctum + nuxt-auth-sanctum |
| Infrastructure | Docker, Nginx                       |

---

## Getting started

### 1. Clone and configure

```bash
cp .env.example .env
# fill in DB_DATABASE, DB_USERNAME, DB_PASSWORD, etc.
```

### 2. Start Docker

```bash
docker compose up -d
```

Services started:

| Container | Role | Port |
|---|---|---|
| `reblum_app` | PHP-FPM (Laravel) | — |
| `reblum_nginx` | Web server | `8080` |
| `reblum_db` | MySQL 8.4 | `3306` |

### 3. Database

```bash
make migrate       # run all migrations
make seed          # seed the database
make rollback      # roll back the last migration batch
```

#### Seeded test accounts

All accounts use the password **`password`**.

| Email | Plan |
|---|---|
| `trial@example.com` | Trial |
| `monthly@example.com` | Monthly |
| `annual@example.com` | Annual |
| `monthly-expired@example.com` | Monthly (expired) |

### 4. Frontend

```bash
cd frontend
cp .env.example .env
npm install
npm run dev        # http://localhost:3000
```

---

## Frontend

The Nuxt 4 frontend lives in `frontend/` and connects to the Laravel API via Laravel Sanctum session auth.

### Auth flow

- Login page at `/login` — submits credentials through the Sanctum CSRF + session cycle
- `useSanctumAuth()` drives the header login/logout button
- `sanctum:guest` middleware guards the login page; `sanctum:auth` guards protected routes

### Subscription-aware UI

Components adapt their content based on the user's subscription state (`guest`, `trial`, `monthly`, `annual`, `expired`). The shared logic lives in `composables/useSubscriptionState.ts`.
