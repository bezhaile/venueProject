# Venue Booking System

A full scheduling and reservation platform with availability checks, payment structure, and a clean calendar driven user experience.

## Overview

The system is presented to users as a responsive web application that can be accessed on mobile devices and computers. This ensures accessibility for the majority of users in Addis Ababa who rely on smartphones or personal computers. Users can browse several venue categories and filter options such as price, capacity, and specific venue needs. The goal is to provide an efficient and time saving venue inquiry experience for the population of Addis Ababa.

## Features

* Availability checking for venues and time slots
* Calendar based booking UX
* Scheduling logic with conflict prevention
* Payment structure for deposits or full payments
* Admin dashboard for managing venues, prices, and bookings
* Authentication for users and administrators
* Email notifications for booking confirmations

## Tech Stack

* Laravel framework
* Blade with Vue
* Tailwind CSS
* MySQL 
* Stripe integration

## Installation

```bash
git clone https://github.com/bezhaile/venueProject.git
cd venue-booking-system
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Set up your `.env` file with database and payment keys, then run:

```bash
php artisan migrate --seed
npm run dev
php artisan serve
```

## License

This project is intended for learning and practical demonstration.
