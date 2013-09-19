<?php
    //header("refresh: 3;");	//refresh pomocí PHP nefunguje v načtené HTML stránce
    
    $datum = StrFTime("%H hodin, %M minut a %S sekund", Time());
    
    //$filename = "results.txt";
    //$content = file($filename);
    
    //$arr = explode("||",$content[0]);    
    
    $arr[] = getcontent("results1.txt");
    $arr[] = getcontent("results2.txt");
    $arr[] = getcontent("results3.txt");
    
    $rnd = rand(1,3);
    switch ($rnd)
    {
      case 1:
          $arr['0'] .="<p>".$datum."</p>";
          insertcontent($arr['0'], "results1.txt");
      break;
      case 2:
          $arr['1'] .="<p>".$datum."</p>";
          insertcontent($arr['1'], "results2.txt");
      break;
      case 3:
          $arr['2'] .="<p>".$datum."</p>";
          insertcontent($arr['2'], "results3.txt"); 
      break;
    }
    
    //$inserttofile = $arr['0']."||".$arr['1']."||".$arr['2'];
    //$fp = fopen ($filename, "w");
    //fputs($fp,$inserttofile);
    //fclose($fp);
     
    $txt = json_encode($arr);
    echo $txt;
    
    
    function getcontent($filename)
    {
      $temp = "";
      $file = fopen($filename, "a+");
      while(!feof($file))
      {
        $temp .= fgets($file);
      }
      fclose($file);
      return ($temp);
    }
    
    function insertcontent($content,$filename)
    {
      $fp = fopen ($filename, "w");
      fputs($fp,$content);
      fclose($fp);
    }
?>