<?php

namespace Services\Register;
use Services\Validation as Validation_Service;
 
class Validation extends Validation_Service {
 
	/**
	 * publish
	 *
	 * @throws ValidateException
	 * @return void
	 */
	public function register()
	{

	    $this->rules = array(
	        'username' => array('required', 'unique:users,username'),
	        'email'    => array('required', 'email', 'unique:users,email'),
	        'password' => array('required', 'min:7')
	    );

		$this->validate();
	}
 
}