<?php
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Game');
$app->initLayout('Centered');
if(isset($_GET['max'])) {

  $max = $_GET['max'];
  $min = $_GET['min'];
  $number=round(($max+$min)/2);
  $label = $app->add(['Label','Твоё число больше '.$number.' ?']);
  if(isset($_GET['greater'])) {
    $min=$number;
  }
  if(isset($_GET['less'])) {
    $max=$number;
  }
} else {
  $max=1;
  $min=100;
  $number=round(($max+$min)/2);
}




$button = $app->add(['Button','Больше!']);
$button->link(['index', 'max'=>$max, 'min'=>$min, 'greater'=>TRUE]);

$button2 = $app->add(['Button','Да, это мое число!']);


$button3 = $app->add(['Button','Меньше!']);
$button->link(['index', 'max'=>$max, 'min'=>$min, 'less'=>TRUE]);
