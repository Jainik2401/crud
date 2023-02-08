<?php

$conn = mysqli_connect("localhost","root","","event");
if(!$conn){
    echo 'connection failed...!!!!';
}
else{
    echo 'sucessfully...!!!';
}

?>