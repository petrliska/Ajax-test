<?php
    session_start();    
    $tmpFile = $_SESSION["file"];
    session_write_close();
    
    $pyscript = "delete_file.py";
    $python = "C:\\Python27\\python.exe";
    exec($python." ".escapeshellarg($pyscript)." ".escapeshellarg($tmpFile));
    
    //unlink($file);
?>