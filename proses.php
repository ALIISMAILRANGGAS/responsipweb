<?php 

    $inama = $_POST['inama'];
    $itujuan = $_POST['itujuan'];
    $ijumlah = $_POST['ijumlah'];
    $osub = $_POST['osub'];

    echo "<head><title>PROSES</title></head>";
    $fp = fopen("file.txt", "a+");
    fputs($fp, "$inama|$itujuan|$ijumlah|$osub\n");
    fclose($fp);

    echo "Terima kasih telah mengorder<br><br>";
    echo "Format order  <br>";
    echo "Nama : $inama<br>";
    echo "Pilihan : $itujuan<br>";
    echo "Jumlah Barang : $ijumlah<br>";
    echo "Total yang harus di bayar : $osub<br>";
    echo "<a href='index.html'>Kembali ke website</a><br>";
 ?>