<?php
 
  /******************************************************************
  CAPTCHA Class,
  Adaptation d'un classe de Pascal Rehfeldt <Pascal@Pascal-Rehfeldt.com>
  sous license GNU GPL
  Adapter par iDo.
  Utilisation, 
  Lors de l'instantiation de la classe les paramtres a fournir sont :
     *   La taile du captcha (6 par defaut)
     *   Le type d'image (png par defaut)
     *   Les lettres (si vide, elle sont tiré au hasard)
     *   La police (ARIAL.TFF par defaut)
     *   La taille de police (19 par defaut)
  L'image est automatique renvoyé vers le navigateur.
  L'appel de la procédure $captcha->GetCaptchaString(); permet de stocker en variable la chaine généré aléatoirement.	 
 
   * GNU General Public License (Version 2, June 1991)
   *
   * This program is free software; you can redistribute
   * it and/or modify it under the terms of the GNU
   * General Public License as published by the Free
   * Software Foundation; either version 2 of the License,
   * or (at your option) any later version.
   *
   * This program is distributed in the hope that it will
   * be useful, but WITHOUT ANY WARRANTY; without even the
   * implied warranty of MERCHANTABILITY or FITNESS FOR A
   * PARTICULAR PURPOSE. See the GNU General Public License
   * for more details.
  ******************************************************************/
 
class captcha {
    var $Length;
    var $CaptchaString;
    var $ImageType;
    var $Font;
    var $CharSize;
    var $nlignes = 7;
 
    function captcha ($length = 6, $type = 'png', $letter = '',$font="ARIAL.TTF",$CharSize=19) {
      $this->Length    = $length;
      $this->ImageType = $type;
      $this->Font      = $font;
      $this->CharSize = $CharSize;
      if ($letter == '') {
        $this->StringGen();
      } else {
        $this->Length        = strlen($letter);
        $this->CaptchaString = $letter;
      }
 
      $this->MakeCaptcha();
	  $this->SendHeader();
	  $this->ShowImage();
    }
 
    function StringGen () {
		$CharPool = array ('Z','I','J','L','O','S','V','A','B','C','D','E','F','G','H','K','M','N','P','Q','R','T','W','U','Y');
		$PoolLength = count($CharPool) - 1;
 
		for ($i = 0; $i < $this->Length; $i++) {
			$this->CaptchaString .= $CharPool[mt_rand(0, $PoolLength)];
		}
    }
	function brouillage(){
		//On ajoute "$nlignes" lignes
		$x = $this->Length*30+10;
		$y = 40;
		for($i=1;$i<=$this->nlignes;$i++){
			imagesetthickness($this->image,rand(1,2));//On specifie lepaisseur de la ligne
			imageline($this->image,rand(0,$x),rand(0,$y),rand(0,$x),rand(0,$y), imagecolorallocate($this->image, rand(0,100), rand(0,100), rand(0,100)));//On ajoute la ligne
		}		
	}
    function MakeCaptcha () {
		$dimensions = imagettfbbox($this->CharSize, -4, $this->Font, $this->CaptchaString);
		$imageheight = $dimensions[1] - $dimensions[7] + 15;
		$imagelength = $dimensions[2] - $dimensions[0] + 15;
 
		$image       = imagecreate($imagelength, $imageheight);
		$bgcolor     = imagecolorallocate($image, 222, 222, 222);
		$stringcolor = imagecolorallocate($image, 0, 0, 0);
		$linecolor   = imagecolorallocate($image, 0, 0, 0);
 
		imagettftext($image, $this->CharSize, -4, 5, $this->CharSize + 5,
                   $stringcolor,
                   $this->Font,
                   $this->CaptchaString);
		$this->image=$image;
		$this->brouillage();
	}
 
	function SendHeader () {
      switch ($this->ImageType) {
        case 'jpeg': header('Content-type: image/jpeg'); break;
        case 'png':  header('Content-type: image/png');  break;
        default:     header('Content-type: image/png');  break;
      }
    }
 
	Function ShowImage() {
		switch ($this->ImageType) {
			case 'jpeg': imagejpeg($this->image); break;
			case 'png':  imagepng($this->image);  break;
			default:     imagepng($this->image);  break;
		}
	}
    function GetCaptchaString () {
      return $this->CaptchaString;
    }
}

session_start();
$captcha = new captcha(5,'png','','fonts/ARBLANCA.ttf',25);
$_SESSION['captcha'] = $captcha->CaptchaString;

