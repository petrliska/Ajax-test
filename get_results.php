<?php
    $arr = array();       
    
    $file = ($_POST['nazevSouboru']);
    $content = file($file);
    $arr = explode("||",$content[0]);
    
    $txt = json_encode($arr);
    
    echo $txt;
    
?>