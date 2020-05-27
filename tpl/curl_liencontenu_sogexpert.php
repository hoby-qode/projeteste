<?php

function lien_contenu($contenu,$infos=false,$debug=false,$headerfooter=false){
    if(defined("CLEF_PUBLIQUE_LIENCONTENU"))
        $_POST['token_auth'] = md5(CLEF_PUBLIQUE_LIENCONTENU);
    // Au départ on recupere juste les formulaires

    if(!isset($_POST['CALLER_SITEURL'])){
        // pour rdv diag il y avait SITE_WEB_USER de récupéré dans lien_contenu coté sogexpert mais je ne le retrouve pas
       $_POST['CALLER_SITEURL'] = $_SERVER['SERVER_NAME'];
    }

    if (hadOption('URL_SOGEXPERT')) {
        $url_curl = URL_SOGEXPERT . '/lien_contenu';
    } else {
        $url_curl = SITE_URL . '/sogexpert/lien_contenu';
        $pos1 = stripos($url_curl, "https");
        if ($pos1 === false) {
            $url_curl = str_replace("http", "https", $url_curl);
        }
    }
    // lien_contenu = erp || rdv_diag || rt
    if(!is_array($infos)){
        $infos = ($infos!=false)?('&infos='.$infos):('');
    }else{
        $infos = ($infos!=false)?('&infos='.json_encode($infos)):('');
    }
    $debug = ($debug!=false)?('&debug'):('');
    $headerfooter = ($headerfooter!=false)?('&headerfooter'):('');

    //$url_curl .= '?contenu=' . $contenu.(isset($_GET['infos'])?"&infos=".$_GET['infos']:"").(isset($_GET['debug'])?'&debug':'').(isset($_GET['headerfooter'])?"&headerfooter":"");
    $url_curl .= '?contenu=' . $contenu.$infos.$debug.$headerfooter;
    return sendCurl($url_curl);
}

if (isset($_GET['lien_contenu'])) {
    $lien_contenu = lien_contenu($_GET['lien_contenu'],(isset($_GET['infos'])?$_GET['infos']:false),isset($_GET['debug']),isset($_GET['headerfooter']));

    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        // Si c'est de l'AJAX
        echo $lien_contenu;
        die;
    }else{
        $retourLienContenu = json_decode($lien_contenu);
        if(isset($retourLienContenu->force_url_redirect)){
            header('Location:'.$retourLienContenu->force_url_redirect);
            die;
        }
    }
}

if (isset($_SESSION['post'])) {
    $_POST = $_SESSION['post'];
    unset($_SESSION['post']);
}