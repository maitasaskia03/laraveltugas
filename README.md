# Laravel CRUD Mobil

#Deskripsi

Berikut ini adalah aplikasi CRUD (Create, Read, Update, Delete) sederhana menggunakan Laravel 12 untuk mengelola data mobil.

---

#Teknologi yang Digunakan

* Laravel 12
* PHP 8
* MySQL
* XAMPP

---

Cara Instalasi

1. Clone repository:

```
git clone https://github.com/maitasaskia03/laraveltugas.git
```

2. Masuk ke folder project:

```
cd laraveltugas
```

3. Install dependency:

```
composer install
```

4. Copy file environment:

```
copy .env.example .env
```

5. Generate key:

```
php artisan key:generate
```

---

Konfigurasi Database

1. Buat database baru dengan nama:

```
laraveltugas
```

2. Atur file `.env`:

```
DB_DATABASE=laraveltugas
DB_USERNAME=root
DB_PASSWORD=
```

3. Jalankan migrasi:

```
php artisan migrate
```



#Menjalankan Project

Jalankan server:

```
php artisan serve
```

Akses di browser:

```
http://127.0.0.1:8000/mobil
```

Fitur

* Tambah data mobil
* Edit data mobil
* Hapus data mobil
* Tampilkan data mobil


Author

* Nama: Maita Saskia_240180017
