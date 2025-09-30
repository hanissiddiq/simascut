
# Sistem Pengajuan Cuti - Laravel 12

Sistem Pengajuan Cuti ini dibangun menggunakan Laravel 12 dan PHP 8.2, yang bertujuan untuk mempermudah proses pengajuan dan persetujuan cuti bagi pegawai di perusahaan. Sistem ini memungkinkan pegawai untuk mengajukan cuti, yang kemudian akan disetujui oleh Kepala Seksi dan HRD. Setelah persetujuan akhir, sistem akan menghasilkan surat cuti dalam format Word secara otomatis.

## Fitur

1. **Autentikasi dan Manajemen Role**:
   - Admin (HRD), Kepala Seksi, dan Pegawai memiliki akses yang berbeda dalam sistem.
   - Setiap pengguna akan memiliki hak akses berdasarkan role-nya (Admin, Kepala Seksi, Pegawai).

2. **Dashboard Pengguna**:
   - **Pegawai** dapat mengajukan cuti dan melihat status pengajuan mereka.
   - **Kepala Seksi** dapat menyetujui atau menolak pengajuan cuti.
   - **HRD** dapat memberikan persetujuan akhir dan mengeluarkan surat cuti.

3. **Pengajuan Cuti**:
   - Pegawai dapat mengajukan cuti dengan memilih jenis cuti yang sesuai (Tahunan, Besar, Sakit, Melahirkan, Alasan Penting, Diluar Tanggungan Negara).
   - Setiap pengajuan harus disertai dengan tanggal mulai, tanggal akhir, dan alasan cuti.
   - Kuota cuti per tahun adalah 12 kali untuk setiap pegawai.

4. **Proses Persetujuan**:
   - Kepala Seksi dapat menerima atau menolak pengajuan cuti.
   - Setelah disetujui oleh Kepala Seksi, pengajuan akan diteruskan kepada HRD untuk persetujuan final.

5. **Tanda Tangan Elektronik**:
   - Kepala Seksi dan HRD memberikan tanda tangan elektronik setelah menyetujui pengajuan cuti.
   - Tanda tangan elektronik disimpan dalam bentuk gambar.

6. **Pembuatan Surat Cuti**:
   - Setelah disetujui oleh HRD, sistem akan secara otomatis menghasilkan surat cuti dalam format Word, lengkap dengan nomor surat dan informasi cuti.
   - Surat cuti dapat diunduh oleh pegawai.

7. **Pengelolaan Kuota Cuti**:
   - Setiap pegawai memiliki kuota cuti tahunan sebanyak 12 kali.
   - Kuota cuti akan berkurang setiap kali pegawai mengajukan cuti.

8. **Laporan Cuti**:
   - HRD dapat melihat laporan cuti yang diajukan oleh pegawai.

## Instalasi

### Prasyarat

Pastikan Anda memiliki PHP 8.2 atau lebih tinggi dan Composer terinstal di komputer Anda. Anda juga memerlukan MySQL atau database lain yang didukung oleh Laravel.

### Langkah-langkah Instalasi

1. Clone repository ini ke dalam folder lokal:
   ```bash
   git clone https://github.com/hanissiddiq/simascut.git
   cd simascut
   ```

2. Install dependensi dengan Composer:
   ```bash
   composer install
   ```

3. Salin file `.env.example` ke `.env`:
   ```bash
   cp .env.example .env
   ```

4. Generate key aplikasi Laravel:
   ```bash
   php artisan key:generate
   ```

5. Set konfigurasi database di file `.env`:
   ```plaintext
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_simascut
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. Jalankan migrasi database untuk membuat tabel yang diperlukan:
   ```bash
   php artisan migrate
   ```

7. Untuk membuat role dan permissions, jalankan perintah seeding:
   ```bash
   php artisan db:seed
   ```

8. Jalankan server lokal Laravel:
   ```bash
   php artisan serve
   ```

   Akses aplikasi melalui `http://localhost:8000`.

## Teknologi yang Digunakan

- **Laravel 12**
- **PHP 8.2**
- **MySQL atau database lain yang didukung Laravel**
- **phpoffice/phpword** untuk pembuatan file Word
- **elitetree/laravel-signature-pad** untuk tanda tangan elektronik

## Struktur Direktori

```
├── app/
│   ├── Http/
│   │   ├── Controllers/  # Kontroler untuk mengelola proses pengajuan dan persetujuan cuti
│   ├── Models/           # Model untuk mengelola data pengajuan cuti, kuota, dan pengguna
│   └── ...
├── database/
│   ├── migrations/       # Skrip migrasi untuk membuat tabel di database
│   ├── seeders/          # Seeder untuk data default
├── resources/
│   ├── views/            # Blade templates untuk tampilan pengguna
│   └── ...
├── routes/
│   ├── web.php           # Rute aplikasi
└── storage/
    ├── app/public/       # Tempat menyimpan surat cuti yang dihasilkan
```

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan buat **fork** repositori ini dan buat **pull request** dengan penjelasan perubahan yang dilakukan.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).
