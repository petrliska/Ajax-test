<?php    
    session_start();   
    
    switch ($_POST['id'])
    {
      case "1":
          $txt = $_SESSION["results1"];
      break;
      case "2":
          $txt = $_SESSION["results2"];
      break;
      case "3":
          $txt = $_SESSION["results3"]; 
      break;
    }
    echo $txt;
?>