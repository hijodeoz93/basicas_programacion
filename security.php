<?  
@session_start(); 
if($_SESSION["aut"] != true)
{ 
  header("Location: index.php"); 
  exit(); 
} 
?>