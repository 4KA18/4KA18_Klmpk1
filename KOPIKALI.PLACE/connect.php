<?php

$Server_Name="localhost";
$User_Name="root";
$Pwd="";
$DB_Name="kopikali-place";
$conn=mysqli_connect($Server_Name,$User_Name,$Pwd,$DB_Name);

if(!$conn)
{
    die("Failed to connect to MySQL:" . mysqli_error());
}
else{
    echo "DB Connected";
}

?>