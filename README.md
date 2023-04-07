Akhmad Raihan Aulia Fikri  /  Universitas Trunojoyo Madura<br>
CRUD Online Shop in laravel and CMS for Admin/Seller
<br><hr>
Autentikasi manual<br>
Notifikasi alert menggunakan sweetalert

<hr>
Cara memakai :<br>
1. composer install<br>
2. php artisan key:generate<br>
3. set database di ENV<br>
4. php artisan migrate<br>
5. composer require realrashid/sweet-alert<br>
6. kernel.php -> protected middleware group -> web : \RealRashid\SweetAlert\ToSweetAlert::class, <br>
<hr>
Cara menggunakan web:<br>
Guest hanya bisa melihat view index saja pada index,produk dan kategori
<hr>
Cara masuk ke admin:<br>
127.0.0.1:8000/admin
<br>*Wajib login dan jika tidak punya akun bisa registrasi terlebih dahulu
