/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    
  $("a").click(function(){
    
    console.log("Ati apasat " + $(this).text()) ;
    console.log($(this).attr("data-type"));
    $("a").removeClass("selected");
    $(this).addClass("selected");
   
   $.get('JsonPhp.php', function(data) {
            
            //$('.result').html(data);
            console.log(data);
   }, 'json');
   
   $.get("JsonPhp.php",
         function(data){
             
            for (i = 0; i < data.studenti.length; i++) {
                $('#out').append( "Nume: " + data.studenti[i].nume ) // John
                .append( "Nota: " + data.studenti[i].nota ); //  2pm
            }
          }, "json");
          
   
    return false;
  });
});



