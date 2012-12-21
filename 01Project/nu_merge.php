<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 

$webpage = "http://www.atpworldtour.com/Rankings/Singles.aspx";
$htmldoc =  new DOMDocument();	
@$htmldoc->loadHTMLFile($webpage);

$string_f = "";

foreach (($htmldoc->getElementsByTagName("table")) as $tagname){
   
    $atr = $tagname->getAttribute('class');
    if ($atr === "bioTableAlt stripeMe") {
       // $string_f .=  " <table>";
        foreach($tagname->childNodes as $node){
        
         foreach($node->childNodes as $node2){
        // $string_f .= " <tr>" ;  
           
            foreach($node2->childNodes as $node3){
               // $string_f .= " <td>";
                $string_f .=  " $node3->nodeValue ";
               // $string_f .=  " </td>";
            }
          //$string_f .= " </tr>";
            //echo "<br>";
         }
       }
    }
       
 }

  echo ' 
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script>
            function genereaza() {

            document.getElementById("afisare").innerHTML = '.$string_f.';

            
            }
        </script>
    </head>
    <body>
       
   <button type="button" onclick="genereaza()">Genereaza</button>
          <div id ="afisare">
              TODO write content
              
         </div>
   </body>
</html>
';
   
?>
