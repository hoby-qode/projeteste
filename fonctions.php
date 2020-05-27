<?php
/*
* supprime tout ce qui n'est pas [a-zA-Z0-9_] concerve les accentués
*/
function eraseSpecialChar($str,$replacement=''){
	return preg_replace('#[\W]#',$replacement,$str);
}

/*
* enleve les accents de les caracteres
*/
function shootAccent($str,$from_enc='UTF-8') {
	$str = mb_convert_encoding($str,'HTML-ENTITIES',$from_enc);
	return preg_replace( array('/ß/','/&(..)lig;/', '/&([aouAOU])uml;/','/&(.)[^;]*;/'), array('ss',"$1","$1".'e',"$1"), $str);
}

/*
* Dédoublonne une chaine de caractère
*/
function reduiceString($str,$char){
	while (strpos($str, $char.$char) !== false) {
		$str = str_replace($char.$char, $char, $str);
	}
	return $str;
}

/*
* epure une chaine. Utile pour url
*/
function clearString($str, $replacement=''){
	$str = shootAccent($str);
	$str = eraseSpecialChar($str,$replacement);
	$str = reduiceString($str,$replacement);
	return strtolower(trim($str,$replacement));
}

function GenererLienV2($type, $id, $titre){
	switch($type){
		case 'actualite':
			return '/expertises-immobilieres-'.clearString($titre,'-').'-a'.$id.'.html';
			break;
	}
}

function ucfirstOnly($str){
	return ucfirst(mb_strtolower($str,'UTF-8'));
}

/*
* Effectue les redirections
*/ 
function redirect($url, $time=false, $type=false){
	if($type == 301) header("HTTP/1.1 301 Moved Permanently");
	if(!$time){
		header('location:'.$url);
		die;
	}else header('refresh:'.$time.';url='.$url);
}

/*
* Tronque une chaine sans couper les mots
*/
function Tronquer_Texte ( $texte, $nbchar, $after="..." ) {
	$texte = strip_tags($texte);
	return (strlen($texte) > $nbchar ? substr(substr($texte,0,$nbchar),0,strrpos(substr($texte,0,$nbchar)," ")).$after : $texte);
}
