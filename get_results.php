<?php
    session_start();    
    $tmpFile = $_SESSION["file"];
    session_write_close();
    
    $pyscript = "get_results.py";
    $python = "C:\\Python27\\python.exe";
    $result = exec($python." ".escapeshellarg($pyscript)." ".escapeshellarg($tmpFile));
    
    //$content = file($tmpFile);
    
    //$txt = json_encode($content);
    
    echo $result;    
?>