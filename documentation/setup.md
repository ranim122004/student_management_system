# Laravel Student Management System – Setup Guide

## Requirements
- PHP 8.1 or higher
- Composer
- MySQL

---

## Installation

```bash
# 1. Clone the Repository
git clone https://github.com/ranim122004/student_management_system.git
cd student_management_system

# Step 2: Install Backend Dependencies
composer install

# Step 3: Create Environment File
cp .env.example .env
php artisan key:generate

# Step 4: Configure .env
Set your DB credentials (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD)

# Step 5: Run Migrations and Seeders
php artisan migrate --seed

# 5. Run Migrations and Seeders
php artisan migrate --seed

