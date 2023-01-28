# Setup Instructions
*Setup time is about 3-4 minutes.*

## Dev
1. **Github:** Clone project
1. **.env:** Setup .env
1. **Terminal:** `docker compose -f docker-compose.composer.yml up`
1. **Terminal (Docker):** `./vendor/bin/sail up`
1. **Terminal:** `./vendor/bin/sail npm install`
1. **Terminal:** `./vendor/bin/sail npm run dev`
1. **Terminal:** `./vendor/bin/sail artisan migrate`

## Production
1. **Github:** Clone project
1. **.env:** Setup .env
1. **Terminal:** `docker compose -f docker-compose.composer.yml up`
1. **Terminal (Docker):** `./vendor/bin/sail up`
1. **Terminal:** `./vendor/bin/sail npm install`
1. **Terminal:** `./vendor/bin/sail npm run build`
1. **Terminal:** `./vendor/bin/sail artisan migrate` (not sure if this is safe for production / pre-existing databases yet)
1. **Terminal (Docker):** `Ctrl+C`
1. **Terminal (Docker):** `./vendor/bin/sail up`