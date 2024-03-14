<?php
$koneksi = mysqli_connect("localhost", "root", "", "akj");

if ((mysqli_connect_errno())) {
    echo "Gagal tersambung ke database";
} else {
    echo "Berhasil tersambung ke database";
}
$main_url = "http://localhost/Basket_School/akademik/admin/";