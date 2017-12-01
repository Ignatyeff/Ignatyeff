<?php
require 'vendor/autoload.php';
$app=new \atk4\ui\App('Registration');
$app->initLayout('Centered');
$button = $app->layout->add(['Button', '1']);
$button->link(['index(1)', 'number'=>'1', 'button'=>'red']);


$button2 = $app->layout->add(['Button', '2']);
$button2->link(['index(1)', 'number'=>'2', 'button'=>'red']);


$button3 = $app->layout->add(['Button', '3']);
$button3->link(['index(1)', 'number'=>'3', 'button'=>'red']);


























































/*$button = $app->layout->add(['Button', 'HELLO']);
$button->addClass('mini');
$button2 = $app->layout->add(['Button', 'BYE']);
$button2->addClass('black');
$button2->link(['index(1)', 'language'=>'abc', 'Country'=>'Russia']);
$button3 = $app->layout->add(['Button', 'WHATEVER']);
$button3->addClass('big orange');
$button3 = $app->layout->add(['Button', 'LINK TO TXT FILE']);
$button3->link('my_document.txt');/*
