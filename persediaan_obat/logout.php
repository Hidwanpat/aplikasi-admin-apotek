<!-- Aplikasi Persediaan Obat pada Apotek
*******************************************************
* Developer    : Wanapati
* Company      : Wana Studio
* Release Date : 1 Desember 2023
* Website      : www.wanapati.com
* E-mail       : patiwana@gmail.com
* Phone        : +62-895-9808-2029
-->

<?php
session_start();
// hapus session
session_destroy();

// alihkan ke halaman login (index.php) dan berikan alert = 2
header('Location: index.php?alert=2');
?>