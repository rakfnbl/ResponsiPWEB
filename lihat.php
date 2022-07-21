<?php 

echo "<head><title>Booking List</title></head>";
$fp = fopen("booking.txt", "r");

echo "<table border='1'>";
echo "<tr>";
echo "<td>tanggal</td><td>Nama</td><td>Alamat</td><td>Email</td><td>Komentar</td>";

while ($isi = fgets($fp)) {
    $pisah = explode(' | ', $isi);
    echo "<tr>";
    echo "<td> $pisah[0] </td>";
    echo "<td> $pisah[1] </td>";
    echo "<td> $pisah[2] </td>";
    echo "<td> $pisah[3] </td>";
    echo "<td> $pisah[4] </td>";
    echo "</tr>";
}

echo "</tr>";
echo "</table>";
echo "<a href='booking.php'> Booking List </a>";

?>