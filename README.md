# Lab8Web - Praktikum 8: PHP dan Database MySQL

**Nama:** (isi nama)
**NIM:** (isi NIM)
**Kelas:** (isi kelas)

Aplikasi CRUD sederhana untuk data barang menggunakan PHP dan MySQL (XAMPP).

## 1. Menjalankan MySQL Server
Jalankan **Apache** dan **MySQL** dari XAMPP Control Panel.

![XAMPP](screenshot/01_xampp.png)

## 2. Membuat Database dan Tabel
Buka `http://localhost/phpmyadmin/`, lalu jalankan isi file `database.sql`: membuat database `latihan1`, tabel `data_barang`, dan 3 data awal.

![phpMyAdmin](screenshot/02_phpmyadmin.png)

## 3. Struktur Folder
Folder `lab8_php_database` diletakkan di `htdocs`:

```
lab8_php_database/
├── gambar/
├── database.sql
├── koneksi.php
├── index.php
├── tambah.php
├── ubah.php
├── hapus.php
└── style.css
```

![Folder](screenshot/03_folder.png)

## 4. koneksi.php
Membuat koneksi ke database `latihan1` dengan `mysqli_connect()`. Jika gagal, tampil pesan error dan program berhenti.

![Koneksi](screenshot/04_koneksi.png)

## 5. index.php (Read)
Menjalankan `SELECT * FROM data_barang`, lalu menampilkan hasilnya dalam tabel dengan perulangan `while`. Tersedia link **Tambah Barang**, **Ubah**, dan **Hapus**.

![Index](screenshot/05_index.png)

## 6. tambah.php (Create)
Form (method POST, `enctype="multipart/form-data"`) untuk input data dan upload gambar ke folder `gambar/`, lalu data disimpan dengan `INSERT`.

![Tambah](screenshot/06_tambah.png)

## 7. ubah.php (Update)
Mengambil data berdasarkan `id` (GET), menampilkannya di form, lalu menyimpan perubahan dengan `UPDATE`. Gambar hanya diganti jika ada file baru.

![Ubah](screenshot/07_ubah.png)

## 8. hapus.php (Delete)
Menghapus data berdasarkan `id` dengan `DELETE`, lalu kembali ke `index.php`.

![Hapus](screenshot/08_hapus.png)

## Catatan Perbaikan dari Modul
- Query memakai *prepared statement* agar aman dari SQL Injection.
- `enctype` diperbaiki menjadi `multipart/form-data` (di modul tertulis `multipart/formdata`).
- Urutan kolom tabel di `index.php` disamakan dengan datanya, dan link Tambah/Ubah/Hapus ditambahkan.
- `is_select()` di `ubah.php` disesuaikan agar kategori terpilih dengan benar.
- Path gambar disesuaikan karena database sudah menyimpan `gambar/namafile`.
