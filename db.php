<?php
$connection = mysqli_connect('localhost','root','','lms');
if($connection){
    echo "You Are Connect DB";
}else{
    echo "You Arenot Connect DB";
}
?>