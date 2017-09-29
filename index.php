<?php
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Registration');
$app->initLayout('Centered');
$button = $app->add('Steam');
$button->set('Кнопка');
$button->icon = 'book';
$button->link('https://store.steampowered.com/');
