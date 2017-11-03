<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('index');
$app->initLayout('Centered');
if(isset($_GET['Нет'])){
if($min==$max){
$label=$app->add(['Label','УНТЕРМЕНШ']);
$label->addClass('massive red');  
}
  $max = $_GET['max'];
  $min = $_GET['min'];
  $med=round(($max+$min)/2);
}else{
  $max=100;
  $min=1;
  $med=round(($max+$min)/2);
}

$label=$app ->add(['Label','Твоё число больше'.$med.' ?']);

$button1=$app->add(['Button','ДА']);
$button1->link(['index(lul)','max'=>$max,'min'=>$med,'Да'=>'null']);

$button2=$app->add(['Button','НЕТ']);
$button2->link(['index(lul)','max'=>$med,'min'=>$min, 'Нет'=>'null']);

$button3=$app->add(['Button','О ДА']);
$button3->link(['pustoj','med'=>$med]);
