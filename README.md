# � Space-Themed Personal Portfolio CMS

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Filament](https://img.shields.io/badge/Filament-F2C14E?style=for-the-badge&logo=laravel&logoColor=black)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

A dynamic, space-themed personal portfolio website built with **Laravel** and **Filament PHP**. This project features a fully customizable landing page via a robust CMS and includes administrative tools for managing CV downloads and portfolio content.

� **Live Demo:** [https://kukuhagung.my.id/](https://kukuhagung.my.id/)

---

## ✨ Key Features

* **� Space Theme Design:** A visually engaging, dark-mode interface inspired by outer space aesthetics.
* **� Dynamic CMS (Filament):**
    * Fully customizable landing page content (hero section, about, skills, etc.).
    * Manage portfolio projects and blog posts (if applicable).
* **� CV Management:** Dedicated admin feature to upload and manage the CV file available for download on the frontend.
* **� Responsive Design:** Optimized for desktop, tablet, and mobile viewing.
* **� Secure Admin Panel:** Powered by Filament for easy and secure content management.

## � Tech Stack

* **Framework:** [Laravel 12](https://laravel.com)
* **Admin Panel:** [Filament PHP](https://filamentphp.com)
* **Frontend Styling:** Tailwind CSS
* **Database:** MySQL

## � Screenshots

| Landing Page | Admin Dashboard |
| :---: | :---: |
| ![Landing Page](/public/img/Screenshot-landing.png) | ![Admin Panel](/public/img/Screenshot-admin.png) |

## ⚙️ Installation & Setup

Follow these steps to set up the project locally:

1.  **Clone the repository**
    ```bash
    git clone [https://github.com/Kukuh2307/Portfolio-2025.git)
    cd Portfolio-2025
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    npm install && npm run build
    ```

3.  **Environment Setup**
    Copy the `.env` file and configure your database credentials:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Database Migration**
    Run the migrations to set up the database tables:
    ```bash
    php artisan migrate
    ```

5.  **Create Admin User**
    Create a user to access the Filament admin panel:
    ```bash
    php artisan make:filament-user
    ```

6.  **Link Storage**
    Link the public storage for images and CV files:
    ```bash
    php artisan storage:link
    ```

7.  **Run the Server**
    ```bash
    php artisan serve
    ```
    Access the site at `http://localhost:8000` and the admin panel at `http://localhost:8000/admin`.

## � Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## � License

This project is licensed under the [MIT](https://opensource.org/licenses/MIT) license.

---

Made with ❤️ by [Kukuh Agung](https://kukuhagung.my.id/)
