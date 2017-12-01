<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('index');
$app->initLayout('Centered');
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=accounts;host=localhost','root','');
class User extends \atk4\data\Model {
  public $table = 'dates';
  function init() {
  	parent::init();
  	$this->addField('name');
  	$this->addField('surname');
  	$this->addField('phone_number',['default'=>'00371']);
    $this->addField('email');
    $this->addField('password',['type'=>'password']);
    $this->addField('birthday',['type'=>'date']);
    $this->addField('notes',['type'=>'text']);
  }
}
$form = $app->layout->add('Form');
$form->setModel(new User($db));
$form->onSubmit(function($form) {
	//$form->model->save();
	//return $form->success('Record updated');
  session_start();
  $_SESSION['name'] = $form->model['name'];
  $_SESSION['surname'] = $form->model['surname'];
  $_SESSION['phone_number'] = $form->model['phone_number'];
  $_SESSION['email'] = $form->model['email'];
  $_SESSION['notes'] = $form->model['notes'];
  return new \atk4\ui\jsExpression('document.location = "task.php" ');
});
$crud = $app->layout->add('CRUD');
$crud->setModel(new User($db));
$crud->addQuickSearch(['name','surname']);
/*$a = [];

    $m_register = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));

    $m_register->addField('name');



    $f = $app->add(new \atk4\ui\Form(['segment'=>TRUE]));

    $f->setModel($m_register);



	 $f->onSubmit(function ($f) {

        if ($f->model['name'] == '') {

            return $f->error('name', ".!.");

        } else {

			$s = $f->model['name'];

			$_SESSION['name'] = $f->model['name'];

			return new \atk4\ui\jsExpression('document.location = "task.php" ');



		}

    });
session_start();*/
