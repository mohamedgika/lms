<?php
include "db.php";

$id = $_POST['id'];

$query ="DELETE FROM users ";
$query .="WHERE id=$id";

$res = mysqli_query($connection,$query);

echo $res ;