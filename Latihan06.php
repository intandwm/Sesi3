<?php
    $mhs = array(
        array("Ardika", "2233445512","Denpasar"),
        array("Wahyu Hidayat","12123111223","Magelang"),
        array("Samsul", "3212345621","Mataram"),
        array("Zizi", "4432114536","Manado"),

    );
    
    header ("Contect-Type: application/json");
    echo json_encode($mhs);