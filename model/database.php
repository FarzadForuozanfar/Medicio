<?php
//$db = new mysqli("localhost","","F@rzad306762","");
    $db = new mysqli("localhost","root","","online_reservation");
    if($db->connect_error)
    {
        echo $db->connect_error;
    }
    else
    {
        date_default_timezone_set("Asia/Tehran");
        $db->set_charset('utf8mb4');
        $db->query("SET CHARACTER SET utf8mb4");
    }
?>
