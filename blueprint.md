# Blueprint: F-I-KZ Project

## 1. Overview

This project, `f-i-kz`, is a full-stack web application built on the Laravel framework. It appears to be a system for managing contacts and consultations, leveraging Laravel's robust backend capabilities for data handling and its Blade templating engine for the frontend. The application is configured to use an SQLite database for local development.

## 2. Implemented Features & Design

### Backend

*   **Framework:** Laravel 12.53.0
*   **Language:** PHP 8.2.27
*   **Database:** SQLite
*   **Core Dependencies:** `guzzlehttp`, `laravel/sail`, `laravel/tinker`
*   **Database Schema:**
    *   `users`: Standard Laravel user authentication table.
    *   `cache`: For storing cached data.
    *   `jobs`: For managing queued jobs.
    *   `consultations`: To store consultation request data.
    *   `contacts`: To store contact form submissions or contact details.
    *   `sessions`: For managing user sessions.

### Frontend

*   **Compiler:** Vite
*   **Templating:** Blade
*   **Core Dependencies:** `laravel-vite-plugin`, `vite`, `axios`
*   **Styling:** The project is set up with a basic structure, likely using the default styles that come with a new Laravel project, which can be extended (e.g., with Tailwind CSS).

### Design

*   **Current View:** The application currently displays the default Laravel welcome page (`welcome.blade.php`).
*   **Layout:** A simple, centered content layout.
*   **Typography:** Default system fonts.
*   **Color Scheme:** Grayscale with Laravel's signature red accents.

## 3. Current Plan: Project Restoration (Completed)

The following steps were just completed to restore the project from a GitHub repository and ensure it is in a runnable state.

1.  **Clean Workspace:** Completely cleared the project directory to prevent conflicts.
2.  **Clone Repository:** Cloned the project from `https://github.com/fortinform-bot/f-i-kz.git`.
3.  **Install Dependencies:**
    *   Ran `composer install` to install all PHP packages.
    *   Ran `npm install` to install all Node.js/frontend packages.
4.  **Configure Environment:**
    *   Copied `.env.example` to `.env`.
    *   Generated a unique application key with `php artisan key:generate`.
5.  **Set Up Database:**
    *   Created the SQLite database file at `database/database.sqlite`.
    *   Ran `php artisan migrate` to create all necessary tables in the database.
6.  **Launch Application:** Executed `npm run dev` to start the Vite development server and serve the application.
