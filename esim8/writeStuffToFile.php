<?php
if (isset($_POST['nimi']) && isset($_POST['kommentti'])) {
    //$vieraskirja = file_get_contents("vieraskirja.html");
    $rivi = implode(";",array( $_POST['nimi'] , $_POST['kommentti'] , date('d.m.Y') )) . PHP_EOL;
    file_put_contents("vieraskirja.html", $rivi, FILE_APPEND);
}

include 'getStuff.php';

 ?>
