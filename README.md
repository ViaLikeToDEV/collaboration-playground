# Team 3 Concert Ticketing System

Laravel scaffold for a concert ticketing platform based on the provided ER/class design decisions.

## Implemented scaffold

- Domain enums under `/app/Enums`
- Eloquent models and relationships under `/app/Models`
- Controller endpoints under `/app/Http/Controllers`
- Service layer stubs under `/app/Services`
- `ExpireBookingJob` queue job under `/app/Jobs`
- `SetPasswordMail` and mail view under `/app/Mail` and `/resources/views/emails`
- Migrations for all entities and key relationships in `/database/migrations`

## Key decisions reflected

- Single role per account via `users.role`
- `password_hash` is nullable for organizer/admin invitation flow
- No refund model/enum status
- Anomaly controller method names use `updateAnomalyStatus` and `executeAction`
- Organizer/Admin set-password flow uses temporary signed route
- Seat lock design scaffold includes Redis-focused `SeatLockService` and persistent `seat_lock_log`

## Quick start

```bash
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
npm install
npm run dev
```

> Note: In this environment, Composer install may fail if local PHP version is below lockfile requirements.
