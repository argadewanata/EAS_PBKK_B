# Sistem Manajemen Absen Pegawai

## Tugas Latihan Studi Kasus Laravel

Resources & Reference: https://codeastro.com/simple-attendance-management-system-in-php-laravel-with-source-code/

- Nama: Kurnia Cahya Febryanto
- NRP: 5025201073
- Kelas: Pemrograman Berbasis Kerangka Kerja B

--------------------------------

## Deskripsi Aplikasi
Aplikasi ini merupakan sebuah proyek sederhana berbasis Laravel PHP yang berfungsi sebagai sistem manajemen absensi.
Aplikasi ini memiliki sejumlah fitur yang memungkinkan pengguna untuk mengelola semua kehadiran karyawan.
Sistem ini juga menjelaskan konsep aplikasi web secara jelas dan implementasinya hampir sama dengan skenario kehidupan nyata.


Sistem Manajemen Absensi Sederhana ini terutama berfokus pada pelacakan kehadiran karyawan.
Lebih tepatnya, sistem ini membantu untuk melacak semua karyawan terdaftar dengan informasi masing-masing.
Sistem ini juga berisi semua manajemen jadwal. Selain itu, sistem ini memungkinkan manajemen karyawan dan lainnya.
Evidently, proyek ini hanya berisi panel admin. Sebagai gambaran umum aplikasi web ini, seorang administrator memiliki kontrol penuh atas sistem.
Dia dapat mengelola semua pengguna, jadwal, dan kehadiran.

## Fitur Aplikasi
Fitur yang tersedia meliputi:
- Panel Admin
- Manajemen Karyawan
- Manajemen Jadwal
- Lembar Absensi
- Laporan Absensi
- Log Absensi
- Pencarian Rekam Jejak

## Langkah-Langkah Penggunaan
1. Setelah Anda selesai mengunduh proyek, ekstrak file proyek.
2. Buka folder proyek, periksa file `env` dan perbarui kredensial database.
3. Buat database MySQL dengan nama yang diberikan di dalam file `env`.
4. Buka proyek di Terminal atau Command Prompt.
5. Pasang dependensi composer: `composer install`
6. Kemudian pasang dependensi lain: `npm install`
7. Sekarang migrasikan tabel: `php artisan migrate`
8. Jalankan seeder: `php artisan db:seed`
9. Dan akhirnya, jalankan proyek: `php artisan serve`
10. Ini akan memulai aplikasi dan memberikan Anda URL.
11. Terakhir, buka URL di browser favorit Anda; kami merekomendasikan menggunakan Google Chrome.

## Screenshot Aplikasi
Berikut adalah beberapa screenshot dari aplikasi ini:

### Halaman Awal
![Halaman Awal](https://github.com/kurniacf/PBKK-B-Latihan_Laravel_Sistem_Absen/assets/70510279/fa03a38e-872f-4a8a-82dd-83f9092d7050)
*Halaman awal aplikasi.*

### Halaman Login
![Login Page](https://github.com/kurniacf/PBKK-B-Latihan_Laravel_Sistem_Absen/assets/70510279/2454fc32-25e7-45d3-a325-066755f8f5b0)
*Halaman login sebelum mengisi informasi.*

![Login Page Input](https://github.com/kurniacf/PBKK-B-Latihan_Laravel_Sistem_Absen/assets/70510279/0f1f5fd9-8a1c-40fc-b0b8-6720ac3d4ad4)
*Halaman login setelah mengisi informasi.*

### Halaman Dashboard
![Dashboard Page](https://github.com/kurniacf/PBKK-B-Latihan_Laravel_Sistem_Absen/assets/70510279/2dff2a1d-f87f-4c60-9621-0559dab4a73f)
*Halaman dashboard utama.*

### Manajemen Jadwal
![Dashboard Schedule](https://github.com/kurniacf/PBKK-B-Latihan_Laravel_Sistem_Absen/assets/70510279/de9718ab-023e-4ce6-a5d5-ae0ce5fcecc8)
*Halaman manajemen jadwal.*

![Added Schedule Input](https://github.com/kurniacf/PBKK-B-Latihan_Laravel_Sistem_Absen/assets/70510279/93b72f10-078c-48be-b6ff-406d3a1ed51f)
*Halaman penambahan jadwal.*

![Added Schedule Set](https://github.com/kurniacf/PBKK-B-Latihan_Laravel_Sistem_Absen/assets/70510279/ba99cae7-76a7-4e82-a419-76ac67022aa6)
*Halaman penyetelan jadwal.*

![Success Added Schedule](https://github.com/kurniacf/PBKK-B-Latihan_Laravel_Sistem_Absen/assets/70510279/b3658c9a-3ba0-4600-b55b-d3221d811d31)
*Halaman setelah penambahan jadwal berhasil.*

### Manajemen Karyawan
![Dashboard Employee](https://github.com/kurniacf/PBKK-B-Latihan_Laravel_Sistem_Absen/assets/70510279/4787acd3-5c43-4202-8b91-ad9eebc6d6db)
*Halaman manajemen karyawan.*

![Added Employee](https://github.com/kurniacf/PBKK-B-Latihan_Laravel_Sistem_Absen/assets/70510279/71214b32-18eb-4de5-a9f0-5926592075c5)
*Halaman penambahan karyawan.*

![Dashboard Employee After](https://github.com/kurniacf/PBKK-B-Latihan_Laravel_Sistem_Absen/assets/70510279/feb9e57b-7cea-4c5b-b8fb-204534f001e2)
*Halaman setelah penambahan karyawan.*

### Lembar Absensi dan Laporan
![Attendace Sheet Page](https://github.com/kurniacf/PBKK-B-Latihan_Laravel_Sistem_Absen/assets/70510279/9867a4ed-c79f-4ed2-a677-12f2a7867f0f)
*Halaman lembar absensi.*

![Sheet Report](https://github.com/kurniacf/PBKK-B-Latihan_Laravel_Sistem_Absen/assets/70510279/2ca3c2c5-177f-485f-9b2d-66ed8efc8ba9)
*Halaman laporan absensi.*

![Attendance Logs](https://github.com/kurniacf/PBKK-B-Latihan_Laravel_Sistem_Absen/assets/70510279/4e58fd6b-0443-4b5e-8998-1309f663cf7b)
*Halaman log.*
