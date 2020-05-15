<?php  
@session_start(); 
if($_SESSION["aut"] != true)
{ 
  header("Location: index.html"); 
  exit(); 
} 
?>