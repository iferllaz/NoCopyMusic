<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'proyectoweb',
  'Timi.22%',
  'nocopydb'
) or die(mysqli_erro($mysqli));

?>