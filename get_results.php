<?php
    $arr = array();       
    session_start();
    $arr[] = $_SESSION["results1"];
    $arr[] = $_SESSION["results2"];
    $arr[] = $_SESSION["results3"];
    $txt = json_encode($arr);
    session_write_close();
    echo $txt;
    
?>