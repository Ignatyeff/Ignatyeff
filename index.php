<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('index');
$app->initLayout('Centered');
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=accounts;host=localhost','root','');
class User extends \atk4\data\Model {
  public $table = 'Dates';
function init() {
	parent::init();
	$this->addField('name');
	$this->addField('surname');
	$this->addField('phone_number',['default'=>'+371']);
  $this->addField('email');
  $this->addField('password',['type'=>'password']);
  $this->addField('birthday',['type'=>'date']);
  $this->addField('notes',['type'=>'text']);
}
}

$form = $app->layout->add('Form'); // создание формы
$form->setModel(new User($db)); // подключение формы к модели и соединение с базой данных

$form->onSubmit(function($form) { // функция срабатывающая при нажатии кнопки SAVE
	$form->model->save(); // запись всех данных в нужную таблицу
	return $form->success('Record updated'); // информация, что всё удачно записалось

});
