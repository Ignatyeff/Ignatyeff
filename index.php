<?php
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Registration');
$app->initLayout('Centered');
$button = $app->add('Button');
$button->set('Steam');
$button->icon = 'shopping bag';
$button->set(['primary' => true]);
$button->link('https://store.steampowered.com/');
