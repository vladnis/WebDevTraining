<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include ("tenis.php");

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
            function loadXMLDoc()
            {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                  xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }

                xmlhttp.onreadystatechange=function()
                {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                    {
                        document.getElementById("afisare").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET","rankings.html",true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
       
   <button type="button" onclick="loadXMLDoc()">Genereaza</button>
          <div id ="afisare">
              TODO write content
         </div>
   </body>
</html>
';
   
?>
