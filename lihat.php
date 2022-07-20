<?php 
    $date=date('Y-m-d');
    echo "<head><title>My Guest Book</title></head>";
    $fp = fopen("file.txt", "r");
    echo "<center>";
    echo "<h1>Tabel Buku Orderan</h1>";
    echo "<a href='responsipweb.html'><b>::Kembali Ke Website::</b></a>";
    echo "<hr>";
    echo "<table border='1' cellspacing='0' cellpadding='2' ";
    echo "<tr>  <td width='150px'>Tanggal</td>
                <td width='150px'>Nama</td>
                <td width='300px'>Material</td>
                <td width='150px'>Jumlah Barang</td>
                <td width='150px'>Total Bayar</td>
            </tr>";
    while ($isi = fgets($fp,80)) {
        $pisah = explode('|', $isi);
        
        echo "<tr>  <td>$date</td>
                    <td>$pisah[0]</td>
                    <td>$pisah[1]</td>
                    <td>$pisah[2]</td>
                    <td>$pisah[3]</td>
            </tr>";

    }

    echo "</table>";
    echo "</center>";
?>