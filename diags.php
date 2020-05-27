<?php

/*
	1 Diagnostics réglementaires
	2 Autres diagnostics
	3 Rénovation énergétique
	4 Pages annexes
*/

// expertises-immobilieres => reservé pour les actualité

$diags = array(
	1=>array('typediag'=>0,'name'=>'Diagnostic immobilier','title'=>'Diagnostic immobilier','id'=>1,'url'=>false),
	2=>array('typediag'=>1,'name'=>'Diagnostic termites','title'=>'Termites','id'=>2,'url'=>array('diagnostic-immobilier-','expert-immobilier-')),
	3=>array('typediag'=>1,'name'=>'Mesurage loi Carrez','title'=>'Loi Carrez','id'=>3,'url'=>array('diagnostics-immobiliers-','expertise-immobiliere-')),
	4=>array('typediag'=>2,'name'=>'Etat des lieux','title'=>'Etat des lieux','id'=>4,'url'=>array('diagnostic-immobilier-','expert-immobilier-')),
	5=>array('typediag'=>1,'name'=>'Diagnostic gaz','title'=>'Gaz','id'=>5,'url'=>array('diagnostic-immobilier-','diagnostiqueur-immobilier-')),
	6=>array('typediag'=>1,'name'=>'Expertise plomb','title'=>'Plomb','id'=>6,'url'=>array('diagnostic-immobilier-','diagnostiqueur-immobilier-')),
	7=>array('typediag'=>3,'name'=>'Thermographie','title'=>'Thermographie','id'=>7,'url'=>array('thermographie-','thermographie-')),
	8=>array('typediag'=>1,'name'=>'Diagnostic amiante','title'=>'Amiante','id'=>8,'url'=>array('diagnostic-amiante-','amiante-')),
	9=>array('typediag'=>1,'name'=>'Diagnostic électricité','title'=>'Electricité','id'=>9,'url'=>array('diagnostic-immobilier-','diagnostiqueurs-immobiliers-')),
	10=>array('typediag'=>1,'name'=>'Performance énergétique','title'=>'DPE','id'=>10,'url'=>array('DPE-')),
	11=>array('typediag'=>1,'name'=>'Etat des risques naturels','title'=>'Etat des risques naturels','id'=>11,'url'=>array('diagnostic-immobilier-','expertise-immobiliere-')),
	12=>array('typediag'=>2,'name'=>'Sécurité piscine','title'=>'Sécurité piscine','id'=>12,'url'=>array('diagnostic-immobilier-','expert-immobilier-')),
	13=>array('typediag'=>0,'name'=>'Mentions légales','title'=>'Mentions légales','id'=>13,'url'=>array('diagnostic-immobilier-','experts-immobiliers-')),
	14=>array('typediag'=>2,'name'=>'Mise en copropriété','title'=>'Copropriété','id'=>14,'url'=>array('diagnostic-immobilier-','expert-immobilier-')),
	15=>array('typediag'=>4,'name'=>'Obligations vendeurs','title'=>'Obligations vendeurs','id'=>15,'url'=>array('diagnostic-vente-','diagnostic-immobilier-')),
	16=>array('typediag'=>4,'name'=>'Obligations bailleurs','title'=>'Obligations bailleurs','id'=>16,'url'=>array('diagnostic-location-','diagnostic-immobilier-')),
	17=>array('typediag'=>4,'name'=>'Obligations syndic','title'=>'Obligations syndic','id'=>17,'url'=>array('obligations-diagnostics-','diagnostic-immobilier-')),
	18=>array('typediag'=>2,'name'=>'Assainissement non collectif','title'=>'Assainissement','id'=>18,'url'=>array('diagnostic-immobilier-','experts-immobiliers-')),
	19=>array('typediag'=>2,'name'=>'Assainissement collectif','title'=>'Assainissement','id'=>19,'url'=>array('diagnostic-immobilier-','expertise-immobiliere-')),
	20=>array('typediag'=>2,'name'=>'Accessibilité handicapé','title'=>'Accessibilité handicapé','id'=>20,'url'=>array('diagnostic-immobilier-','expertise-immobiliere-')),
	21=>array('typediag'=>3,'name'=>'Conseils éco énergie','title'=>'Eco énergie','id'=>21,'url'=>array('renovation-energetique-','infiltrometrie-')),
	22=>array('typediag'=>2,'name'=>'Eco PTZ','title'=>'PTZ','id'=>22,'url'=>array('infiltrometrie-','thermographie-')),
	23=>array('typediag'=>2,'name'=>'Audit énergétique','title'=>'Audit énergétique','id'=>23,'url'=>array('audit-energetique-','thermographie-')),
	24=>array('typediag'=>2,'name'=>'Audit thermique','title'=>'Audit thermique','id'=>24,'url'=>array('audit-thermique-','infiltrometrie-')),
	25=>array('typediag'=>2,'name'=>'Etude thermique','title'=>'Etude thermique','id'=>25,'url'=>array('etude-thermique-','thermographie-')),
	26=>array('typediag'=>2,'name'=>'Avant travaux / démolition','title'=>'Avant travaux / démolition','id'=>26,'url'=>array('diagnostic-immobilier-','expert-immobilier-')),
	27=>array('typediag'=>2,'name'=>'Avant travaux','title'=>'Avant travaux','id'=>27,'url'=>array('diagnostic-immobilier-','expertise-immobiliere-')),
	28=>array('typediag'=>2,'name'=>'Avant démolition','title'=>'Avant démolition','id'=>28,'url'=>array('diagnostic-immobilier-','diagnostiqueurs-immobiliers-')),
	29=>array('typediag'=>2,'name'=>'Diagnostic Internet','title'=>'DPI','id'=>29,'url'=>array('diagnostic-immobilier-','diagnostiqueurs-immobiliers-')),
	30=>array('typediag'=>3,'name'=>'Services','title'=>'Services','id'=>30,'url'=>array('diagnostics-immobiliers-','diagnostiqueurs-immobiliers-')),
	31=>array('typediag'=>2,'name'=>'Diagnostic SRU','title'=>'Diagnostic SRU','id'=>31,'url'=>array('diagnostics-immobiliers-','expertise-immobiliere-')),
	32=>array('typediag'=>3,'name'=>'RT 2012','title'=>'RT 2012','id'=>32,'url'=>array('thermographie-','infiltrometrie-')),
	33=>array('typediag'=>2,'name'=>'DPE projeté','title'=>'DPE','id'=>33,'url'=>array('DPE-','DPE-')),
	34=>array('typediag'=>2,'name'=>'DPE volontaire','title'=>'DPE','id'=>34,'url'=>array('DPE-','DPE-')),
	35=>array('typediag'=>3,'name'=>'Rénovation énergétique','title'=>'Rénovation énergétique','id'=>35,'url'=>array('renovation-energetique-','renovation-energetique-')),
	36=>array('typediag'=>3,'name'=>'Infiltrométrie','title'=>'Infiltrométrie','id'=>36,'url'=>array('infiltrometrie-')),
	50=>array('typediag'=>0,'name'=>'Autres','title'=>'Expertise immobilière','id'=>50,'url'=>array('diagnostics-immobiliers-','expertise-immobiliere-','diagnostic-immobilier-','expert-immobilier-'))
);

