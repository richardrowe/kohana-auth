<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Role_Users extends ORM {
	protected $belongs_to = array('user' => array(), 'role' => array());
}