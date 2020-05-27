<?php

mysql_connect(BDD_SERVEUR, BDD_USER, BDD_PASSWORD);
mysql_select_db(BDD_BASE);
register_shutdown_function('mysql_close');

function query($query){
	return mysql_query($query);
}

function queryRow($sql){
	$result = mysql_query($sql);
	$rs = mysql_fetch_array($result,MYSQL_ASSOC);
	mysql_free_result($result);
	return $rs;
}

function queryArray($sql){
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
		$rs[] = $row;
	}
	mysql_free_result($result);
	return $rs;
}

function queryO($query){
	if($result = query($query))
	while ($row = mysql_fetch_object($result)) {
		$rs[] = $row;
	}
	mysql_free_result($result);
	return $rs;
}

function queryError(){
	return mysql_error().'<br/>'.$query;
}
