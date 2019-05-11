<?php


// menampilkan jam sekarang
date_default_timezone_set('Asia/Jakarta');
echo "Jam : ";
echo date('H:i:s a');
echo "<br/>";

//kombinasi format tanggal dan jam
echo "Tanggal : ";
echo date(' d-m-y');
echo "<br/>";

// now
date_default_timezone_set('Asia/Jakarta');
echo date('l, d-m-Y H:i:s');

?>
