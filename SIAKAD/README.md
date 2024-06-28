
# IS184412 - Rancang Bangun Perangkat Lunak [C]

Dosen Pengampu Radityo Prasetianto Wibowo, S.Kom., M.Kom.

Sistem Informasi Akademik

Website Sistem Informasi Akademik yang dibuat oleh Kelompok sebagai proyek tugas akhir dari mata kuliah Rancang Bangun Perangkat Lunak [C]

## Documentation

[Requirement & Design](https://github.com/revonsio/SIAKAD-Copy/blob/main/DokumenLaporan/Requirements%20%26%20Design.pdf)

[Test Plan & Results](https://github.com/revonsio/SIAKAD-Copy/blob/main/DokumenLaporan/Test%20Plan.xlsx)

[User Manual](https://github.com/revonsio/SIAKAD-Copy/blob/main/DokumenLaporan/User%20Manual.pdf)



## Prerequisites

 - [PHP 8.1.5 or above](https://www.php.net/downloads.php)
 - [Laravel 9.2 or above](hhttps://laravel.com/docs/11.x/installation)
 - [Composer 2.3.5 or above](https://getcomposer.org/download/)
 - [MySQL, or any other database platform](https://dev.mysql.com/downloads/installer/)


## Installation

Clone latest repository

```bash
  git clone https://github.com/revonsio/SIAKAD-Copy.git
```

A bash script is provided to automate the deployment process below, you can run the deploy.sh script

```bash
  bash ./deploy.sh
```

Generate new .env environment

```bash
  cp .env.example .env
```

Install dependencies

```bash
  composer install --no-interaction --no-dev --prefer-dist --optimize-autoloader
```

Generate new APP_KEY application key

```bash
php artisan key:generate
```

Clear application cache

```bash
php artisan cache:clear
```

Cache application configuration

```bash
php artisan config:cache
```

Create siakad database

```bash
php artisan database:create
```

Migrate and seed database

```bash
php artisan migrate:fresh --seed --force
```

Deploy local development server

```bash
php artisan serve
```
## Appendix

By default, local server will be deployed on localhost:8000

