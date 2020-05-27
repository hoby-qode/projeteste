<?php
session_start();
date_default_timezone_set('Europe/Paris');

/* SERVER EXTRANET */
// BDD
define("BDD_SERVEUR", "localhost");
define("BDD_USER", "projetest");
define("BDD_PASSWORD", "BTnRrBbM8z");
define("BDD_BASE", BDD_USER);
define("BDD_PREFIXE", "pre_");
define("URL_SOGEXPERT", "");
define("HTTPS", false);

define("CLEF_PUBLIQUE_LIENCONTENU","F3usO9BlaBWidemPInHdLpPwSAmwwTDQCAvNN03v");
define("RDV_DIAG",false);

//SITE
$PART = isset($PART) ? $PART : '';

define("SITE_URL", "http://".preg_replace("/\/$/","",$_SERVER["HTTP_HOST"]).$PART);

    
define("FILE_SRC", dirname(__FILE__).$PART);

define("HASDIAG", true);
define("HASLABELRT2012", false);
define("VERSION_MOBILE", true);


define("PREFIXE_LIEN_V2", '/expertises-immobilieres-');
// define("PREFIXE_LIEN_V2", '/rt2012-');


//POG
global $configuration;
$configuration['soap'] = "http://www.phpobjectgenerator.com/services/pog.wsdl";
$configuration['homepage'] = "http://www.phpobjectgenerator.com";
$configuration['revisionNumber'] = "";
$configuration['versionNumber'] = "3.0f";
$configuration['pdoDriver']	= 'mysql';
$configuration['setup_password'] = '';
$configuration['db_encoding'] = 0;

$configuration['db']	= BDD_BASE;
$configuration['host'] 	= BDD_SERVEUR;
$configuration['user'] 	= BDD_USER;
$configuration['pass']	= BDD_PASSWORD;
$configuration['port']	= '3306';

$configuration['proxy_host'] = false;
$configuration['proxy_port'] = false;
$configuration['proxy_username'] = false;
$configuration['proxy_password'] = false;

define("URL_REWRITING", true);

//APPLI
define("APPLI_SRC", "/home/t4t00457/www/admin_market/prod/src");
define("APPLI_URL", "https://ns30-appli.sogexpert.com/admin_market/prod/src");

/* configuration client */
define("COM_PRINCIPALE", "Bapaume");
define("NOM_APPLI", "FL EXPERTISES");
define("SIRET_APPLI", "000000000");

/* Fonctionnalités à activer dans l'admin : Mettre false pour désactiver */
define("CONTACTS", true);
define("CALLBACK", true);
define("DEVIS", true);
define("PAIEMENT", true);
define("CONTENU", true);
define("ACTUALITES", true);
define("SMS", true);
define("LIVREDOR", true);
define("REDUCTION", false);
define("ANNUAIRES", true);
define("EMAIL", true);

//plugin settings
//$configuration['plugins_path'] = '/var/www/adminmarketing/plugins';  //absolute path to plugins folder, e.g c:/mycode/test/plugins or /home/phpobj/public_html/plugins

include(APPLI_SRC."/inc/includes.php");

//Implémentation de l'objet admin : contient toutes les infos de l'admin
$objAdmin = new admin();
$tabWhere[0] = array("adminid", "=", 1);
$tabAdmin = $objAdmin->GetList($tabWhere);
$tabWhere = array();
$admin = $tabAdmin[0];

define("ADMIN_MAIL", $admin->email);

//GestionErreur("dev");
//echo "<pre>";

include(APPLI_SRC.'/bdd.php');
include(APPLI_SRC."/fonctions.php");

// header('Content-Type: text/html; charset=iso-8859-1');
header('Content-Type: text/html; charset=utf-8');


