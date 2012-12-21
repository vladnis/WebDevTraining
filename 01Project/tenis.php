<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$myFile = "rankings.html";
$fh = fopen($myFile, 'w') or die("can't open file");

$webpage = "http://www.atpworldtour.com/Rankings/Singles.aspx";
$htmldoc =  new DOMDocument();	
@$htmldoc->loadHTMLFile($webpage);

foreach (($htmldoc->getElementsByTagName("table")) as $tagname){
    
    $atr = $tagname->getAttribute('class');
    if ($atr === "bioTableAlt stripeMe") {
        $aux = '<table align="center" width="800">';
        fwrite($fh, $aux);
        foreach($tagname->childNodes as $node){
        
         foreach($node->childNodes as $node2){
             $aux = '<tr>';
            fwrite($fh,$aux);  
         
            foreach($node2->childNodes as $node3){
                $aux =  '<td>';
                fwrite($fh,$aux);
                $aux =  "$node3->nodeValue ";
                fwrite($fh,$aux);
                $aux = '</td>';
                fwrite($fh,$aux);
            }
          $aux = '</tr>';
          fwrite($fh, $aux);
            //echo "<br>";
         }
       }
    }
       
 }
 
 fclose($fh);


?>
