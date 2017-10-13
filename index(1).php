<?php
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Registration');
$app->initLayout('Centered');
$c = $_GET['button'];
$button=$app->add('Button');
$button->set(''.$c);




















































/*$Label=$app->add('Label');
$Label->set('Что-то');
$Text=$app->add('Text');
$Text->set('То-то');
$Message=$app->add('Message');
$Message->set('Дарова');
$button = $app->add('Button');
$button->set('Steam');
$button->icon = 'shopping bag';
$button->set(['primary' => true]);
$img = 'https://www.audi.co.uk/content/dam/audi/production/RestOfSite/ExploreModels/Finance/1x1_finance_calculator.jpg';
$button = $app->add(['Label', 'hello', 'image'=>$img]);
$button->set(['massive'=>true]);
$icon = $app->add(['Image', $img, 'disabled']);
$c = $_GET['language'];
$Text=$app->add('Text');
$Text->set(''.$c);/*

































/*$button = $app->add('Button');
$button->set('Steam');
$button->icon = 'shopping bag';
$button->set(['primary' => true]);
$button->link('https://store.steampowered.com/');
Class Cat {
  public $age;
  public $gender;
  public $name;
  public $color = 'color' ;
  const legs = 4;
  public function DateOfBird($year) {
    $age1= $year - $this->age;
    return $age1;
  }
  public function WheelCount() {
    return self::WHEELS ;
  }
}*/
