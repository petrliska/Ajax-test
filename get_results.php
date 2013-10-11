<?php
    session_start();    
    $tmpFile = $_SESSION["file"];
    $lastID = $_SESSION["lastID"];
    session_write_close();
    
    $pyscript = "get_results.py";
    $python = "C:\\Python27\\python.exe";
    exec($python." ".escapeshellarg($pyscript)." ".escapeshellarg($tmpFile)." ".$lastID, $result);
    
    session_start();    
    $_SESSION["lastID"] = $result[1];
    session_write_close();    
    
    echo $result[0];    
?>