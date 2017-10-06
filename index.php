<?php
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Registration');
$app->initLayout('Centered');
/*$button = $app->add('Button');
$button->set('Steam');
$button->icon = 'shopping bag';
$button->set(['primary' => true]);
$button->link('https://store.steampowered.com/');
$button->color('black');*/
Class Car {
  public $model;
  public $speed;
  public $color = 'white' ;
  constant WHEELS = 4;
  public function DisMeter($time) {
    $distance= $this->speed * time;
    return distance;
  }
  public function WheelCount() {
    return self::WHEELS ;
  }
}
