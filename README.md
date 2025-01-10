
# Test Nexa
project Test Nexa Web Development.

## Menjalankan BE

Clone repositori:

```bash
  git https://github.com/MRoynaldi-30/test-nexa.git
  cd test-nexa
```

Install dependencies:

```bash
  composer install
  npm install
```

Konfigurasi Database Buat file .env dari .env.example:

```bash
  cp .env.example .env
```
Kemudian, edit file .env dan atur konfigurasi database Anda:

```bash
  DB_CONNECTION=pgsql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=test-nexa
  DB_USERNAME=root
  DB_PASSWORD=your_password
```

Migrasi Database Pastikan database kosong tanpa tabel, lebih baik jika belum ada databasenya. Kemudian, jalankan:

```bash
  php artisan migrate:fresh --seed
```

Menjalankan Tampilan FrontEnd menggunakan npm antara lain:
```bash
  npm run dev
```

Menjalankan Server Untuk menjalankan project antara lain:
```bash
  php artisan serve
```


## Sekian dan Terima kasih