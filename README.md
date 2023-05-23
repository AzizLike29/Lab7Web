Nama : Abdul Aziz Firdaus

Kelas : TI.21.A.3

Nim : 312110262

Mata Kuliah : Pemrograman Web 2

<h2> Langkah - Langkah Praktikum Install Codeigniter 4 & Tugasnya </h2>

<h3> 1. Mengaktifkan ekstensi tersebut, melalui XAMPP control panel, pada bagian Apache klik config -> PHP.ini untuk menjalankan MySQL server dari menu XAMPP control.</h3>

![#1](https://github.com/AzizLike29/Lab7Web/assets/119909214/a96fbc61-fd6b-4a52-8b82-1be12de6193d)

Lalu pada bagian extention, hilangkan tanda ; (titik koma) pada ekstensi yang akan di aktifkan seperti berikut. kemudian simpan filenya dan restart Apache web server.

![#2](https://github.com/AzizLike29/Lab7Web/assets/119909214/35fb10af-73df-40b6-ac06-f7709e4d7184)

<h3> 2. Install codeigniter versi 4 </h3>

- Codeigniter dapat di download dari website

https://codeigniter.com/download

- Extract file zip Codeigniter ke direktori

C:\xampp\htdocs\lab7

- ubah nama directory framework-4.x.xx menjadi ci4.

- Buka google chrome dengan alamat

http://localhost/lab7/ci4/public/

Pada langkah - langkah praktikum ini menggunakan cara manual sebagai berikut.

![#3](https://github.com/AzizLike29/Lab7Web/assets/119909214/1273a7da-036a-48bd-b704-8ef5ddbafb8c)

<h3> 3. Menjalankan CLI (Command Line Interface) </h3>

Codeigniter 4 menyediakan CLI untuk mempermudah proses development. untuk mengakses CLI buka terminal/command prompt.

Arahkan lokasi direktori sesuai dengan direktori pada suatu projek

C:\xampp\htdocs\lab7\ci4

perintah yang dapat dijalankan untuk memanggil CLI codeigniter yaitu

php spark, dan ketik lagi :

php spark serve, untuk mengaktifkan localhost:8080

![#4](https://github.com/AzizLike29/Lab7Web/assets/119909214/8938271a-811e-4ad9-a168-2f14d419813a)

<h3> 4. Mengaktifkan Mode Debugging </h3>

Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program.

Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.

<img width="960" alt="#5" src="https://github.com/AzizLike29/Lab7Web/assets/119909214/22f01a55-a9e7-4744-b016-c275fcf6d8fe">

<h3> 5. Cara mengaktifkannya dengan mengubah nama file env menjadi .env kemudian buka filenya dan ubah nilai CI_ENVIRONMENT menjadi development </h3>

<h5> # CI_ENVIRONMENT = Production menjadi CI_ENVIRONMENT = development </h5>

Lalu ubah kode pada file app/Controller/Home.php kemudian hilangkan titik koma (;) pada akhir kode seperti berikut.

![#6](https://github.com/AzizLike29/Lab7Web/assets/119909214/d554d523-10cf-4e46-9cc6-01b8abe52967)

Kemudian kita jalankan lagi http://localhost:8080/ atau http://localhost/lab7/ci4/public/ hasilnya akan terjadi error seperti berikut.

![#7](https://github.com/AzizLike29/Lab7Web/assets/119909214/f095ffea-83aa-4d29-9dd3-dc385d8796bf)

<h3> 6. Membuat Route Baru </h3>

Menambahkan kode berikut ke dalam Routes.php

![#8](https://github.com/AzizLike29/Lab7Web/assets/119909214/c13d1786-f826-48cc-b96d-4fbb83e780ea)

Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut.

php spark routes

![#9](https://github.com/AzizLike29/Lab7Web/assets/119909214/eeda0372-02e1-4cd7-a25c-e43aede8e624)

Selanjutnya lakukan akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about atau http://localhost/lab7/ci4/public/about

![#10](https://github.com/AzizLike29/Lab7Web/assets/119909214/0fecfe43-69e0-474f-a6a0-3b211a3e4772)

ketika diakses akan muncul tampilan error "404 controller or its method is nout found", itu artinya file/page tersebut belum ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu controller yang sesuai dengan routing yang dibuat yaitu Controller Page.

<h3> 7. Membuat Controller </h3>

Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya.

selanjutnya refresh kembali google chrome, maka akan ditampilkan hasilnya yaitu halaman sudah dapat diakses.

![#11](https://github.com/AzizLike29/Lab7Web/assets/119909214/c5bb06e9-56c1-4a42-a289-82c43494a1ec)

Auto Routing Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true menjadi false dan tambahkan method baru pada Controller Page.

http://localhost:8080/page/tos

http://localhost/lab7/ci4/public/page/tos

![#12](https://github.com/AzizLike29/Lab7Web/assets/119909214/4daa3bc5-d3c7-416a-b719-a9757b7cf69a)

<h3> 8. Membuat View </h3>

Selanjutnya adalah membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian ada tambahan kode dan ubah method about pada class Controller Page.

![#13](https://github.com/AzizLike29/Lab7Web/assets/119909214/aa075809-f825-40a5-ab17-535821289cab)

kemudian lakukan refresh pada halaman tersebut.

![#14](https://github.com/AzizLike29/Lab7Web/assets/119909214/ff168117-4e8a-430d-9210-2d7b99afce97)

<h3> 9. Membuat Layout Web dengan CSS </h3>

Pada dasarnya layout web dengan css dapat di implementasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public.

Buat file css pada direktori public dengan nama style.css (copy file dari praktikum1). Kita akan gunakan layout yang pernah dibuat pada praktikum 1.

https://github.com/AzizLike29/Tugas-Praktikum-Web-1

![#15](https://github.com/AzizLike29/Lab7Web/assets/119909214/de32edf0-0398-4af8-a7b5-6fabebe36222)

<h3> 10. Folder Template </h3>

Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php

![#16](https://github.com/AzizLike29/Lab7Web/assets/119909214/6b00a2c4-e0ea-40a1-a880-28ec8af048ca)

<h2> Pertanyaan dan Tugas </h2>

Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

Menambahkan Route artikel di dalam Routes.php

![#17](https://github.com/AzizLike29/Lab7Web/assets/119909214/caff9757-76de-4b02-ad30-b729a79c9fd3)

Lalu kita cek untuk mengetahui route yang ditambahkan sudah benar apa belum, buka CLI dan jalankan perintah tersebut.

![#18](https://github.com/AzizLike29/Lab7Web/assets/119909214/d2e84b28-e5bf-4de4-8491-db93d41fc66f)

Selanjutnya akses pada tampilan header masing - masing

<h3> Tampilan article.php </h3>

![19-0](https://github.com/AzizLike29/Lab7Web/assets/119909214/75f59ba7-d82b-47f5-aa6d-92871f085cd7)

<h3> Tampilan about.php </h3>

![19](https://github.com/AzizLike29/Lab7Web/assets/119909214/f837cad4-cc4a-45f7-939e-0ccf3d923c26)

<h3> Tampilan contact.php </h3>

![20](https://github.com/AzizLike29/Lab7Web/assets/119909214/d13ce4ec-a0e7-4aaa-b9f1-8263de31f4da)

<h2> Praktikum 8 : Framework Lanjutan (CRUD) </h2>

11. Mengaktifkan kembali di shell XAMPP http://localhost:8080/ dengan cara :

cd [nama projek]

php spark

php spark serve

![1](https://github.com/AzizLike29/Lab7Web/assets/119909214/85443b21-62c6-4349-9d46-7c669968dec2)

12. Membuat database di phpMyAdmin dengan menambahkan tabel artikel beserta isinya.

![2](https://github.com/AzizLike29/Lab7Web/assets/119909214/a784148f-141d-4355-880d-e6c6e44c2e79)

13. Selanjutnya masuk ke halaman admin dengan mengakses http://localhost:8080/admin/artikel/ berikut tampilannya :

![3](https://github.com/AzizLike29/Lab7Web/assets/119909214/c0d84679-211a-44f1-97e8-1b826f5c37a1)

14. Dapat melakukan pencarian data di halaman admin, lalu klik tombol cari.

![4](https://github.com/AzizLike29/Lab7Web/assets/119909214/5362183b-66ac-4ce1-b3fc-e4272562abdf)

15. Kemudian bisa melakukan ubah data dengan klik tombolnya, lalu ubah sesuai keinginan.

![5](https://github.com/AzizLike29/Lab7Web/assets/119909214/2169121c-acea-4f10-af4b-42aabea3dc2d)

16. Setelah itu kita klik navbar artikel dan langsung masuk ke halaman beserta konten yang sudah dibuat.

![6](https://github.com/AzizLike29/Lab7Web/assets/119909214/04659ad9-3844-4d0e-8eb3-7055ac673ca1)

17. Dapat melakukan tambah artikel dengan klik navbar bagian atas, lalu tambah artikel sesuai keinginan.

![7](https://github.com/AzizLike29/Lab7Web/assets/119909214/54f5cf35-ab61-4056-8e03-d7b7f0774db1)

<p> Sekian dan Terima Kasih </p>
