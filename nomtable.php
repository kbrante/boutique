<?php
    include 'identification.php';


    $mysql = new mysqli(MYSQL_SERVEUR,
                MYSQL_UTILISATEUR,
                MYSQL_MOTDEPASSE,
                MYSQL_BASE);

    $mysql->set_charset("utf8");
    $sql = "SHOW TABLES FROM shop;";
    $result = $mysql->query($sql);
    // $row = $result->fetch_array();
    while ($row = $result->fetch_array()){

       echo $row[0].'</br>';

    };
    $result->free();
    $mysql->close();
 ?>
