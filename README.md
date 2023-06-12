Nama : Abdul Aziz Firdaus

Kelas : TI.21.A.3

Nim : 312110262

Mata Kuliah : Pemrograman Web 2

<h2> Praktikum 7 : PHP Framework (Codeigniter) </h2>

Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

<h3> 1. Tampilan article.php </h3>

![8](https://github.com/AzizLike29/Lab7Web/assets/119909214/df5594df-4ee1-42a7-a69e-bd7110355edb)

<h3> 2. Tampilan about.php </h3>

![9](https://github.com/AzizLike29/Lab7Web/assets/119909214/cc191efc-8bd9-4690-a630-f455550b6f51)

<h3> 3. Tampilan contact.php </h3>

![10](https://github.com/AzizLike29/Lab7Web/assets/119909214/528da4fe-7524-4745-bd77-678969a83b6b)

<h2> Praktikum 8 : Framework Lanjutan (CRUD) </h2>

Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi.

<h3> 4. Mengaktifkan kembali di shell XAMPP http://localhost:8080/ dengan cara : </h3>

cd [nama projek]

php spark

php spark serve

![1](https://github.com/AzizLike29/Lab7Web/assets/119909214/85443b21-62c6-4349-9d46-7c669968dec2)

<h3> 5. Membuat database di phpMyAdmin dengan menambahkan tabel artikel beserta isinya. </h3>

![2](https://github.com/AzizLike29/Lab7Web/assets/119909214/a784148f-141d-4355-880d-e6c6e44c2e79)

<h3> 6. Selanjutnya masuk ke halaman admin dengan mengakses http://localhost:8080/admin/artikel/ berikut tampilannya : </h3>

![3](https://github.com/AzizLike29/Lab7Web/assets/119909214/c0d84679-211a-44f1-97e8-1b826f5c37a1)

<h3> 7. Dapat melakukan pencarian data di halaman admin, lalu klik tombol cari. </h3>

![4](https://github.com/AzizLike29/Lab7Web/assets/119909214/5362183b-66ac-4ce1-b3fc-e4272562abdf)

<h3> 8. Kemudian bisa melakukan ubah data dengan klik tombolnya, lalu ubah sesuai keinginan. </h3>

![5](https://github.com/AzizLike29/Lab7Web/assets/119909214/2169121c-acea-4f10-af4b-42aabea3dc2d)

<h3> 9. Setelah itu kita klik navbar artikel dan langsung masuk ke halaman beserta konten yang sudah dibuat. </h3>

![6](https://github.com/AzizLike29/Lab7Web/assets/119909214/030caa9c-9936-4122-80c9-a5fed518de5c)

<h3> 10. Dapat melakukan tambah artikel dengan klik navbar bagian atas, lalu tambah artikel sesuai keinginan. </h3>

![7](https://github.com/AzizLike29/Lab7Web/assets/119909214/54f5cf35-ab61-4056-8e03-d7b7f0774db1)

<h2> Praktikum 9 : Framework Lanjutan (Modul Login) </h2>

Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi.

<h3> 11. Tambahkan tabel pada database lab_ci4 dengan nama user. </h3>

![11](https://github.com/AzizLike29/Lab7Web/assets/119909214/3efbafc8-b04b-4d23-b773-be1f8a1f9826)

<h3> 12. Berikut merupakan tampilan halaman login : </h3>

![12](https://github.com/AzizLike29/Lab7Web/assets/119909214/7dc61aca-9244-42df-8cc6-26c345225143)

<h3> 13. setelah itu isi dengan email dan password yang sesuai pada tabel user, sedangkan password_hash sebagai keterangan : </h3>

Dalam PHP, fungsi password_hash() digunakan untuk mengamankan atau mengenkripsi kata sandi (password) pengguna.

Tujuan utamanya adalah untuk melindungi kata sandi pengguna dengan cara yang aman.

Jika penulisan password tidak sesuai yang ada di database maka muncul notif danger/password salah.

Passwordnya adalah "admin123"

![13](https://github.com/AzizLike29/Lab7Web/assets/119909214/4cf1f87c-14b1-4545-a979-2c53b7723ba4)

<h3> 14. Isikan email dan password dengan benar, lalu klik login : </h3>

![14](https://github.com/AzizLike29/Lab7Web/assets/119909214/15f7bf40-bfc6-4741-89cd-3d991c8a0b68)

<h3> 15. Berhasil masuk ke tampilan halaman admin makanan. </h3>

![15](https://github.com/AzizLike29/Lab7Web/assets/119909214/399dccda-0412-4188-8bb1-fafc270ed656)

<h3> 16. Kemudian terdapat menu atas logout, jika tidak memerlukan akses web tersebut dan klik : </h3>

![16](https://github.com/AzizLike29/Lab7Web/assets/119909214/9fb4e6a0-4108-4194-9df8-e7e708609ee5)

<h3> 16. Kembali ke tampilan halaman login </h3>

![17](https://github.com/AzizLike29/Lab7Web/assets/119909214/32ba8b40-6778-4efe-a5ca-ebf03270209d)

<h2> Praktikum 10: Pagination dan Pencarian </h2>

Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi.

<h3> 17. Pilihan penomeran halaman </h3>

Terdapat penomeran halaman yang dapat dipilih apabila menu yang disediakan ada banyak, dan bisa memilih nomer secara urut maka akan tampil menu yang lainnya makanan & minuman.

![18](https://github.com/AzizLike29/Lab7Web/assets/119909214/0f3aef5d-7ab3-4c36-8a35-908170059eec)

lanjut pilih nomer :

![19](https://github.com/AzizLike29/Lab7Web/assets/119909214/ee5fe907-5775-4f00-8ee3-099e67af1e26)

<h3> 18. Pencarian halaman menu makanan & minuman </h3>

Buka folder dan file app/Controllers/Artikel.php lalu ubah pada function admin_index paginate ubah menjadi 10 yang tadinya 1.

1 --> Memperkecil halaman page

10 --> Memperluas halaman page

Kemudian lakukan pencarian dengan kata kunci harus judul makanan & minuman yang harus di cari, contohnya :

![20](https://github.com/AzizLike29/Lab7Web/assets/119909214/56e4c017-5591-45a3-882a-556c182d50b0)

lalu hasil ketika dicari halamannya :

![21](https://github.com/AzizLike29/Lab7Web/assets/119909214/05c47903-25b7-4624-90f7-c91502a67304)

<h2> Praktikum 11: Upload File Gambar </h2>

Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi.

<h3> 19. Menambahkan upload data file </h3>

Selanjutnya, saya menambahkan upload file data/choose file, tambahkan data sesuai keinginan.

![22](https://github.com/AzizLike29/Lab7Web/assets/119909214/3bad40ce-9065-440a-9c5a-93c9126bbb51)

<h3> 20. Data berhasil ditambahkan </h3>

Lalu klik navbar article, data berhasil ditambahkan :)

![23](https://github.com/AzizLike29/Lab7Web/assets/119909214/16d9875a-f0d2-4770-abbd-6e16e1b8cfea)

Data sudah masuk ke dalam database phpmyadmin.

![24](https://github.com/AzizLike29/Lab7Web/assets/119909214/0f89c743-33f0-482a-a888-c66e83b4759f)

<p> Sekian dan Terima Kasih </p>
