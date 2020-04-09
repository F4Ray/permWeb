<?php
include("menu.php"); 
include  'nofile.php';
echo "bedanya include dan require adalah jika error semua kode yang dibawah require tidak akan dieksekusi, sedangkan include masih di eksekusi";
echo "<br/>";
echo "saya telah meletakkan echo lain dibawah require tetapi karena require nya error maka echonya tidak tereksekusi";
require 'nofile.php';
echo "ini echo yang tidak tereksekusi";
 ?>