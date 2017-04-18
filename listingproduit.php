<?php
    include 'identification.php';

    $mysql = new mysqli(MYSQL_SERVEUR,
                MYSQL_UTILISATEUR,
                MYSQL_MOTDEPASSE,
                MYSQL_BASE);

    $mysql->set_charset("utf8");
    $sql = "select * from Product";
    $result = $mysql->query($sql);
    // $row = $result->fetch_assoc();
    $count = 1;
    while ($row = $result->fetch_assoc()){
        $count++;
       echo $row['id'].' ';
       echo $row['name'].' ';
       echo $row['description'].' ';
       echo $row['price'].'€ ';
       echo $row['id_category'].'</br>';

    }
    echo "nombre de produit : ".$count;
    $result->free();
    $mysql->close();
 ?>
