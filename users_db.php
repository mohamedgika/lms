<?php

include "db.php";


$query = "SELECT * FROM users";

$result = mysqli_query($connection,$query);

// $result = mysqli_fetch_assoc($result);

echo "<pre>";

// $result = mysqli_fetch_all($result);
//     print_r($result);

for($i=0; $users = mysqli_fetch_assoc($result); $i++){
        print_r($users);

}