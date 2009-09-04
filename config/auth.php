<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Auth library configuration.
 */

/**
 * Driver to use for authentication. By default, File and ORM are available.
 */
$config['driver'] = 'ORM';

/**
 * Type of hash to use for passwords. Any algorithm supported by the hash function
 * can be used here. Note that the length of your password is determined by the
 * hash type + the number of salt characters. You can also set this to 'none' if
 * you don't want the password to be hashed.
 * @see http://php.net/hash
 * @see http://php.net/hash_algos
 */
$config['hash_method'] = 'sha1';

/**
 * What field you want to use for the 'login name', you can use either 'email' or 'username'
 * with the default ORM driver.
 */
$config['login_key'] = 'username';

/**
 * Defines the hash offsets to insert the salt at. The password hash length
 * will be increased by the total number of offsets. Note that the salt values
 * must be in ascending order and the largest value can't be greater than your hash length.
 */
$config['salt_pattern'] = '1, 3, 5, 9, 14, 15, 20, 21, 28, 30';

/**
 * Set the auto-login (remember me) cookie lifetime, in seconds. The default
 * lifetime is two weeks.
 */
$config['lifetime'] = 1209600;

/**
 * Set the session key that will be used to store the current user.
 */
$config['session_key'] = 'auth_user';

/**
 * Usernames (keys) and hashed passwords (values) used by the File driver.
 * Default admin password is "admin". You are encouraged to change this.
 */
$config['users'] = array
(
	// 'admin' => 'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02',
);

return $config;