<?php 
    $server = "sql106.epizy.com";
    $username = "epiz_30783714";
    $password = "i96ohz99OR8ZZV";
    $dbname = "epiz_30783714_news";

    $conn = mysql_connect($server, $username, $password, $dbname);
    if (!$conn){
        die("Connection Failed:".mysql_connect_error());
    }
?>