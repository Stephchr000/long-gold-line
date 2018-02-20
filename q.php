<?php 
  
  $name="";
   if($_SERVER["REQUEST_METHOD"] === "POST"){
	$con = mysql_connect("198.57.247.178","mthudg_chris","441822000");
if (!$con)
  {
 
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("mthudg_LongGoldLine", $con);

$sql=mysql_query("SELECT * FROM Athlete");
while($w=mysql_fetch_assoc($sql)){

if($w["givenName"] == $_POST["name"] || $w["givenName"] . " " . $w["surname"]== $_POST["name"] ){
echo $w["givenName"];
echo " ";
echo $w["surname"];
echo "<br>";
}

}
} 
   ?>