# Sort experimental dashboard
Andreas Ek, 2022-02-01


Built with:
* Laravel
* Livewire
* Tailwind
* Filament
* https://github.com/nextapps-be/livewire-sortablejs


## Setup steps:
1. `git clone git@github.com:leasify/sort.git`
1. `cd sort && valet secure`
1. `cp .env.example .env`
1. `php artisan key:gen`
1. `composer install`
1. `npm i && npm run dev`
1. `touch database/database.sqlite`
1. `php artisan migrate`
1. Browse [https:://sort.test](https://sort.test)


## All in one:
```
git clone git@github.com:leasify/sort.git && \
cd sort && valet secure && \
cp .env.example .env && \
php artisan key:gen && \
composer install && \
npm i && npm run dev && \
touch database/database.sqlite && \
php artisan migrate
```
