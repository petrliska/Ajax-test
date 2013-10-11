<?php
    $pyscript = "testy.py";
    $python = "C:\\Python27\\python.exe";
    
    $tmpFile = tempnam("C:\Program Files\Apache Software Foundation\Apache2.2\Ajax-test", "tmp");
    
    session_start();
    $_SESSION["file"]=$tmpFile;
    $_SESSION["lastID"]=-1;
    session_write_close();
    
    exec($python." ".escapeshellarg($pyscript)." ".$_POST['jsonArray']." ".escapeshellarg($tmpFile));

    echo "Test dokoncen";
?>