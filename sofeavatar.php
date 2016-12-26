<?php
header("Content-type: image/png");
if (isset($_GET['dodownload']) OR isset($_GET['doDownload'])) $_GET['download'] = "true";
if(isset($_GET['download'])) {
  $download = strtolower($_GET['download']);
  if ($download== "1" OR $download == "true" OR $download == "do"){
    header('Set-Cookie: fileDownload=true; path=/');
    header('Content-Disposition: attachment; filename="sofe_'.$_GET["hex"].'_'.$_GET["bghex"].'_'.$_GET['rot'].'.png"');
  }
}

function hexrgb($hex) {
  $hex = str_replace("#", "", $hex);
  if(strlen($hex) == 3) {
    $r = hexdec(substr($hex,0,1).substr($hex,0,1));
    $g = hexdec(substr($hex,1,1).substr($hex,1,1));
    $b = hexdec(substr($hex,2,1).substr($hex,2,1));
  } else {
    $r = hexdec(substr($hex,0,2));
    $g = hexdec(substr($hex,2,2));
    $b = hexdec(substr($hex,4,2));
  }
  return array("r" => $r, "g" => $g, "b" => $b);
}

if(isset($_GET["hex"])){
  $rgb = hexrgb($_GET["hex"]);
}else{
  $rgb = array("r" => $_GET["r"], "g" => $_GET["g"], "b" => $_GET["b"]);
}

if(isset($_GET["bghex"]) or isset($_GET["bgr"]) or isset($_GET["bgg"]) or isset($_GET["bgb"])){
  if(isset($_GET["bghex"])){
    $bgcol = hexrgb($_GET["bghex"]);
  }else{
    $bgcol = array("r" => $_GET["bgr"], "g" => $_GET["bgg"], "b" => $_GET["bgb"]);
  }
}else{
  $bgcol = hexrgb("eeeeee");
}

$img = imagecreatetruecolor(120, 120);
$bg = imagecolorallocate($img, $bgcol["r"], $bgcol["g"], $bgcol["b"]);
$color = imagecolorallocate($img, $rgb["r"], $rgb["g"], $rgb["b"]);

imagefill($img, 0, 0, $bg);

imagefilledrectangle($img, 10, 10, 50, 50, $color);
imagefilledrectangle($img, 70, 10, 110, 50, $color);

imagefilledrectangle($img, 30, 70, 50, 90, $color);
imagefilledrectangle($img, 70, 70, 90, 90, $color);

imagefilledrectangle($img, 10, 90, 110, 110, $color);
if(isset($_GET['rot'])) $rot = $_GET['rot']; else $rot = 0;
if(!ctype_digit($rot)) $rot = 0;

if ($rot == 0) imagepng($img);
else {
  $rotated = imagerotate($img, $rot, $bg);
  imagepng($rotated);
  imagedestroy($rotated);
}

imagedestroy($img);

?>
