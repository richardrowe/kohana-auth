<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Auth_Role_User extends ORM {
	protected $belongs_to = array('user' => array(), 'role' => array());
}