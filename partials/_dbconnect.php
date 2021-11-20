<?php
$server="sql306.epizy.com";
$username="epiz_28998414";
$password="LhKWnM9G29";
$database="epiz_28998414_tom";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn)
//{
//    echo "success";
//}
{
    die("Error". mysqli_connect_error());
}
?>