<?php

$db_host = "localhost";
$db_user = 'root';
$db_pass = "";
$db_name = "loui_food";
$conn = "";





try {
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    //  echo "Connected";
} catch (mysqli_sql_exception) {
    echo "Could Not Conect <br>";
}


