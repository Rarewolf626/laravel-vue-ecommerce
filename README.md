# Laravel E-commerce Website

## Installation 
Make sure you have environment setup properly. You will need MySQL, PHP8.1 and composer.

### Install Laravel Website + API
1. Download the project (or clone using GIT)
2. Copy `.env.example` into `.env` and configure database credentials
3. Navigate to the project's root directory using terminal
4. Run `composer install`
5. Set the encryption key by executing `php artisan key:generate --ansi`
6. Run migrations `php artisan migrate`
7. Start local server by executing `php artisan serve`
8. Open new terminal and navigate to the project root directory
9. Run `npm install`
10. Run `npm run dev` to start vite server for Laravel frontend

### Install Vue.js Admin Panel
1. Navigate to `backend` folder
2. Run `npm install`
3. Copy `backend/.env.example` into `backend/.env`
4. Make sure `VITE_API_BASE_URL` key in `backend/.env` is set to your Laravel API host (Default: http://localhost:8000)
5. Run `npm run dev`
