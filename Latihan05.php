<?php   
    //modul 1
    //$age = array("Peter" =>"35", "Ben"=>"37","Joe"=>"43");
     
    //Modul 2
    $age["AGUS"] = "35";
    $age["AGNES"] = "65";
    $age["JARJIT"] = "30";
    $age["NYOMAN"] ="25";
    $age["MADE"] = "35";



    header ("Contect-Type: application/json");
    echo json_encode($age);