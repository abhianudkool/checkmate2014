<?php function connect(){
	$db=mysql_connect("127.0.0.1","root","900abhi622");
	if(!$db){
		die("connection fail, error 101");
	}
	$db_c=mysql_select_db("ck14",$db);
	if(!$db_c){
		die("connection failes, error 102");
	}
}
?>