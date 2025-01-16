# Caesar Cipher - Enkripsi dan Deskripsi

## Deskripsi
Program ini menggunakan metode Caesar Cipher untuk melakukan enkripsi dan dekripsi teks. Dengan menggunakan kunci `k`, program ini dapat menggeser karakter dalam teks sesuai dengan nilai yang diberikan, baik untuk enkripsi maupun dekripsi.

### Fitur Utama
- **Enkripsi**: Menggeser karakter dalam teks ke depan berdasarkan nilai kunci.
- **Deskripsi**: Menggeser karakter dalam teks ke belakang berdasarkan nilai kunci.
- **Input kunci**: Pengguna dapat menentukan nilai kunci secara manual untuk mengatur seberapa banyak pergeseran yang dilakukan.

## Cara Penggunaan

### 1. Menjalankan Program
Program ini terdiri dari dua file utama:
- `index.php`: Halaman utama untuk memasukkan teks yang akan dienkripsi atau didekripsi.
- `process.php`: Halaman untuk memproses enkripsi atau dekripsi teks dan menampilkan hasilnya.

### 2. Langkah-langkah
1. Buka `index.php` di browser.
2. Masukkan teks yang ingin dienkripsi atau didekripsi pada kolom yang tersedia.
3. Tentukan nilai kunci (shift) yang diinginkan.
4. Pilih apakah Anda ingin mengenkripsi atau mendekripsi teks.
5. Klik tombol **Enkripsi** atau **Deskripsi** untuk melihat hasilnya.

### 3. Format Enkripsi dan Dekripsi
- Enkripsi: Menggeser huruf ke depan sebanyak `k` posisi dalam alfabet.
- Dekripsi: Menggeser huruf ke belakang sebanyak `k` posisi dalam alfabet.

### 4. Contoh Penggunaan
Misalkan Anda memasukkan teks:
dan menentukan kunci `k = 10`.
setelah itu tinggal anda pilih pilihan "enkripsi" atau "dekripsi"




## Teknologi yang Digunakan
- **PHP**: Digunakan untuk membuat algoritma Caesar Cipher dan memproses input/output dari pengguna.
- **HTML**: Digunakan untuk membangun antarmuka pengguna (UI).
- **CSS**: Digunakan untuk meningkatkan tampilan dan estetika halaman web.

## Instalasi
1. Pastikan Anda memiliki server web yang mendukung PHP seperti XAMPP atau LAMP.
2. Letakkan kedua file (`index.php` dan `process.php`) dalam folder root server web Anda (misalnya di dalam folder `htdocs` untuk XAMPP).
3. Akses file `index.php` melalui browser dengan URL `http://localhost/index.php` atau sesuai dengan pengaturan server Anda.

## Lisensi
Tugas ini merupakan karya pribadi dan tidak terikat pada lisensi khusus. Anda dapat menggunakannya untuk tujuan pembelajaran.

## Kontak
Jika Anda memiliki pertanyaan atau umpan balik, silakan hubungi saya melalui [email@example.com](mailto:email@example.com).
