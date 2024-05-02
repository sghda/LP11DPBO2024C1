# LP11DPBO2024C1
## Janji
Saya Salma Ghaida dengan NIM 2207186 mengerjakan Latihan Praktikum 11 dalam mata kuliah Desain Pemrograman Berbasis Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin...

## Penjelasan Kode
### 1. Model:

Model adalah komponen yang bertanggung jawab untuk mengelola data aplikasi dan logika bisnis. Dalam aplikasi Anda, model terdiri dari kelas-kelas yang berinteraksi dengan database dan menyediakan operasi-operasi untuk mengakses, menambah, mengedit, dan menghapus data pasien. 

- **TabelPasien**: Kelas ini berfungsi sebagai model yang berinteraksi langsung dengan database untuk menjalankan query SQL terkait data pasien, seperti mengambil data pasien, menambahkan data pasien baru, mengedit data pasien, dan menghapus data pasien.

- **Pasien** Kelas ini berperan sebagai bagian Model dalam arsitektur MVP. Setiap objek dari kelas Pasien mewakili satu entitas data pasien. Konstruktor kelas Pasien digunakan untuk menginisialisasi atribut-atribut yang merepresentasikan data pasien seperti ID, NIK, nama, tempat lahir, tanggal lahir, jenis kelamin, email, dan nomor telepon. Kelas Pasien memiliki metode setter dan getter untuk mengatur dan mendapatkan nilai atribut-atribut pasien.

### 2. View:

View adalah tampilan dari aplikasi yang menampilkan data kepada pengguna dan menerima input dari pengguna. Dalam aplikasi Anda, view terdiri dari kelas-kelas yang menangani presentasi data kepada pengguna melalui antarmuka pengguna.

- **FormPasien**: Kelas ini merupakan bagian dari view yang bertanggung jawab untuk menampilkan formulir tambah data pasien dan formulir edit data pasien kepada pengguna. Kelas ini menggunakan template HTML untuk merender formulir dan mengirimkan data ke presenter untuk diproses.

- **TampilPasien**: Kelas ini merupakan bagian dari view yang bertanggung jawab untuk menampilkan data pasien ke pengguna dalam bentuk tabel. Kelas ini juga menggunakan template HTML untuk merender tabel dan menampilkan data pasien yang telah diproses oleh presenter.

### 3. Presenter:

Presenter bertindak sebagai perantara antara model dan view. Ini menerima input dari pengguna dari view, memprosesnya menggunakan logika bisnis yang sesuai dari model, dan kemudian memperbarui tampilan. Dalam aplikasi Anda, presenter terdiri dari kelas-kelas yang mengelola logika aplikasi dan berkomunikasi dengan model dan view.

- **ProsesPasien**: Kelas ini merupakan presenter utama dalam aplikasi Anda. Ini bertanggung jawab untuk memproses data pasien, seperti mengambil data pasien dari model, menambahkan data pasien baru, mengedit data pasien yang ada, dan menghapus data pasien.

## Alur Program:

1. Pengguna berinteraksi dengan aplikasi melalui view (FormPasien untuk tambah data dan TampilPasien untuk menampilkan data).
2. Ketika pengguna mengirimkan formulir tambah data pasien, FormPasien mengambil data dari formulir, kemudian meneruskannya ke presenter ProsesPasien.
3. Presenter ProsesPasien menerima data, memvalidasi, dan memprosesnya menggunakan model TabelPasien untuk menambahkan data pasien baru ke database.
4. Ketika pengguna meminta untuk melihat data pasien, TampilPasien meminta presenter ProsesPasien untuk mengambil data pasien dari model.
5. Presenter ProsesPasien mengambil data dari model, kemudian meneruskannya kembali ke TampilPasien untuk ditampilkan kepada pengguna.
