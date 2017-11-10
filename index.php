<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('index');
$app->initLayout('Centered');
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=Accounts;host=localhost','root','');
class User extends \atk4\data\Model {
  public $table = 'Dates';
function init() {
	parent::init();
	$this->addField('email');
	$this->addField('login(username)');
	$this->addField('password');
  $this->addField('creation_date',['type'=>'date']);
  $this->addField('account_money',['type'=>'money']);
}
}
