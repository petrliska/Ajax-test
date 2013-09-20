<?php
    //header("refresh: 3;");	//refresh pomocí PHP nefunguje v načtené HTML stránce
    session_start();
    
    $_SESSION["results1"]="";
    $_SESSION["results2"]="";
    $_SESSION["results3"]="";
    
    for ($i=0; $i<= 10; $i++)
    {
      $datum = StrFTime("%H hodin, %M minut a %S sekund", Time());
      $rnd = rand(1,3);
      session_start();
      switch ($rnd)
      {
        case 1:
          $_SESSION["results1"] .="<p>".$datum."</p>";
          break;
        case 2:
          $_SESSION["results2"] .="<p>".$datum."</p>";
          break;
        case 3:
          $_SESSION["results3"] .="<p>".$datum."</p>";
          break;
      }
      session_write_close();
      sleep(2);
    }
    echo "test dokoncen";
?>