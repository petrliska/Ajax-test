<?php
    //header("refresh: 3;");	//refresh pomocí PHP nefunguje v načtené HTML stránce
    
    $poleTestu = json_decode($_POST['jsonArray']);
    $number = ($_POST['pocetTestu']);
    $file = ($_POST['nazevSouboru']);
    
    foreach ($poleTestu as $test)
    {
      $rnd = rand(1,3);
      for ($i=0; $i<=$rnd; $i++)
      {
        $datum = StrFTime("%H hodin, %M minut a %S sekund", Time());
        $fp = fopen ($file, "a+");
        fputs($fp,"<p>".$datum."</p>");
        fclose($fp);
        sleep(1);
      }
      $fp = fopen ($file, "a+");
      fputs($fp,"||");
      fclose($fp);  
    }
    
    $response = "test dokoncen";
    echo $response;
?>