<?php
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Registration');
$app->initLayout('Centered');
$button = $app->layout->add(['Button', 'HELLO']);
$button->addClass('mini');
$button2 = $app->layout->add(['Button', 'BYE']);
$button2->addClass('black');
$button2->link(['index(1)', 'language'=>'ru', 'Country'=>'Russia']);
$button3 = $app->layout->add(['Button', 'WHATEWER']);
$button3->addClass('big orange');
$button3 = $app->layout->add(['Button', 'LINK TO TXT FILE']);
$button3->link('my_document.txt');
