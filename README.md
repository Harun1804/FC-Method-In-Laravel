<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
# Gunakan Perintah Berikut Agar Aplikasi Berjalan Dengan Semestinya :

## Instal composer terlebih dahulu
[Download disini](https://getcomposer.org/download/)

### Instal packagenya pada folder project terlebih dahulu
```
composer install
```

### Copy isi file .env.example
```
cp .env.example .env
```

### Generate Key Baru
```
php artisan key:generate
```

Pada file .env yang telah dibuat, ganti DB_DATABASE dengan ***db_penyakit***
dan database tersebut harus ada pada web server kalian (phpmyadmin)

### Lakukan Import Database
Import db_penyakit dari folder database

### Jalankan aplikasi
```
php artisan serve
```

