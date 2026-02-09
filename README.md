# Brandify Digital - Multi-Page Site

This is a modern, responsive multi-page website built with **Laravel 11** and **TailwindCSS 4**. It includes a homepage, secondary pages, reusable components, and a scalable folder structure designed for easy maintenance and expansion.

---

## Table of Contents
- [Project Overview](#project-overview)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [Running the Project Locally](#running-the-project-locally)
- [Deploying the Project](#deploying-the-project)
- [Adding New Pages](#adding-new-pages)
- [License](#license)

---

## Project Overview

This project demonstrates a modern, responsive web design with:

- Hero sections with gradient overlays and animations  
- About, Services, and Contact pages  
- Reusable components: Navbar, Footer, Service Cards  
- Responsive layout using TailwindCSS breakpoints  
- Clean and scalable folder structure for easy expansion

---

## Tech Stack

- **Backend**: Laravel 11 (PHP 8.2+)  
- **Frontend**: TailwindCSS 4, Blade templates  
- **Assets**: Vite (for compiling CSS & JS)  
- **Images**: Public folder `/public/images`  
- **Version Control**: Git (recommended)

---

## Project Structure

project-root/
├─ app/                  # Laravel backend logic
├─ public/               # Publicly accessible files
│  └─ images/            # All images (hero, icons, logo)
├─ resources/            # Frontend assets and views
│  ├─ css/               # TailwindCSS files
│  ├─ js/                # Optional JS files
│  └─ views/             # Blade templates
│     ├─ layouts/        # Main layouts (e.g., app.blade.php)
│     ├─ components/     # Reusable components (navbar, footer)
│     ├─ home.blade.php
│     ├─ services.blade.php
│     └─ contact.blade.php
├─ routes/               
│  └─ web.php            # Web routes
├─ vite.config.js        # Vite configuration for asset bundling
└─ package.json          # Node dependencies



**Notes:**
- All pages extend the `layouts.app` layout.
- Components like Navbar and Footer are reusable across all pages.
- TailwindCSS is compiled using Vite for production-ready assets.

---

## Running the Project Locally

### Prerequisites
- PHP 8.2+  
- Composer  
- Node.js + npm  
- Optional: Local server like **Laravel Sail**, **XAMPP**, or **Laragon**

### Steps
1. Clone the repository:

```bash
git clone https://github.com/Jozelviernes/brandify-digital.git
cd brandify-digital
Install backend dependencies:

composer install
Install frontend dependencies:
npm install

Compile TailwindCSS using Vite:
npm run dev

Serve the Laravel app:
php artisan serve

Open your browser at:

http://127.0.0.1:8000


Deploying the Project
Upload the Laravel project to a PHP-supported hosting environment.

Ensure storage and bootstrap/cache folders are writable.

Run composer install --no-dev and npm run build for production.

Configure .env for production database and environment settings.

Adding New Pages Consistently
Create Blade View

Example: resources/views/about.blade.php

Extend layouts.app:

@extends('layouts.app')

@section('title', 'Brandify Digital - About')

@section('content')
<!-- Your About Page Content -->
@endsection
Add Route

In routes/web.php:

Route::get('/about', function () {
    return view('about');
});
Add Navbar Link

Edit resources/views/components/navbar.blade.php and add:

<li><a href="/about">About</a></li>
Add Optional Component

Reuse components from components/ folder (e.g., cards, CTA buttons).

This structure ensures scalability and maintainability, so new pages follow the same layout and design.

License
This project is open-source and free to use under the MIT License.


---

✅ This README covers:

- **Project organization**  
- **How to run/deploy**  
- **How to add new pages consistently**  
- Professional formatting suitable for submission to employers  
