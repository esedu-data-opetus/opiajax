<?php
if (!isset($_GET['nimi']) || empty($_GET['nimi'])) {
  die("No name is set");
}
echo strtoupper($_GET['nimi']);
 ?>
