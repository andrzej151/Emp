<?php 
	$host = "mysql.cba.pl";
	$user = "anddab";
	$pass = "Andrzej151";
	$baza = "andrzejdab";

$tabela = "Euser"; //tabela 

mysql_connect($host,$user,$pass); 

mysql_select_db($baza); 
$sql=mysql_query("select * from $tabela"); 

while($row=mysql_fetch_assoc($sql)){ 
$output[]=$row; 
} 
print(json_encode($output)); 
mysql_close(); 

?>