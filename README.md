# Konsep Web
Web untuk menyimpan data data lagu untuk Radio

# Fitur Web
- Autentifikasi, Register, Login, Logout
- Halaman Dashboard
- Halaman Song (index untuk list lagu
- Halaman Profile

# Multi User
## Admin
- Dapat menambahkan list
- Dapat melakukan edit pada list
- Dapat melakukan update pada list
- Dapat menghapus data pada list

## User
- Dapat melihat data pada list
- Dapat melihat detail sebuah data

# Akun Default Untuk Pengujian
## Admin
- email: admin@example.com
- password: 12345

## User
- email: user@example.com
- password: 12345

**Admin** dan **User** dapat Login di URL `/login`. URL tersebut juga bisa di akses dari `welcome.blade.php` di pojok kiri atas
**User** dapat menambahkan akun baru melalui URL `/register`. Akun yang di buat di halaman ini akan selalu menjadi User, karena Akun **Admin** hanya ada satu

# Teknologi yang Digunakan
- [Laravel 10](https://laravel.com/)
- [Bootstrap 5.3](https://getbootstrap.com/)

# Persyaratan Instalasi
- PHP 8.1.6 atau lebih
- Web Browser

# Entity Relationship Diagram (ERD)
![ERD](https://github.com/Trisna-Roam/Project-ujikom/blob/master/ERD.png)


# UML Use Case Diagram
![UML Use Case](https://github.com/Trisna-Roam/Project-ujikom/blob/master/UML.jpg)


# Instalasi
 **1. Clone Repo**
 
git clone https://github.com/Trisna-Roam/  
composer install  
cp .env.example .env

**2. Konfigurasi Database pada file `.env`**

DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=5432  
DB_DATABASE=CRUD-ukk  
DB_USERNAME=root  
DB_PASSWORD=

**3. Migrasi dan Menyambungkan Storage**

php artisan key:generate  
php artisan storage:link  
php artisan migrate --seed   

**4. Mulai Website**

php artisan serve
