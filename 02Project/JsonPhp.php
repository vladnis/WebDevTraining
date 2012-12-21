<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$array = array (
    "studenti" => array ( 
        array("nume" => "Iulian", "nota" => "9"),
        array("nume" => "Cipri", "nota" => "8"),
        array("nume" => "Ana", "nota" => "9"),
        array("nume" => "Vlad", "nota" => "10"),
        array("nume" => "Bogdan", "nota" => "9"),
    )
);

echo json_encode($array);

?>
