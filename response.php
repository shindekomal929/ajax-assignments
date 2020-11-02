<?php

$data=$_GET['datavalue'];
$a=array('Pune','Mumbai');
$b=array('Gorakhpur','Lucknow');
$c=array('Patna','Kishanganj');

if($data=="Maharashtra"){
    foreach($a as $aone){
        echo "<option> $aone </option>";
    }
}

if($data=="UP"){
    foreach($b as $bone){
        echo "<option> $bone </option>";
    }
}

if($data=="Bihar"){
    foreach($c as $cone){
        echo "<option> $cone </option>";
    }
}

?>