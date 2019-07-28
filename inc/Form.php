<?php

namespace inc;

use inc\DB;

abstract class Form {
	// Form construct
	public function __construct(array $data) {
		foreach($data as $key => $value) {
			// verify if property exists
			if(property_exists($this, $key)) {
				$this->{$key} = $this->sanitize($value);
			}
		}
	}

	// form errors
	private $errors = [];

	// validate form
	public abstract function validate();

	// save form
	public abstract function save();

	// get errors
	public function getErrors() : array {
		return $this->errors;
	}

	// sanitize value
	protected function sanitize($value) : string {
		$connection = DB::get()->getConnection();

		return $connection->real_escape_string(htmlspecialchars(strip_tags($value)));
	}

	// validate text
	protected function validateText(string $key, int $minChars) {
		if($this->verifyMinCharacters($this->{$key}, $minChars) === false) {
			$this->errors[$key] = true;
		}
	}

	// validate email
	protected function validateEmail() {
		if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
		    $this->errors['email'] = true;
		}
	}

	// validate phone
	protected function validatePhone() {
		if(preg_match("/^0[0-9]{9}$/", $this->phone) == false) {
		  	$this->errors['phone'] = true;
		}
	}

	// verify min characters
	protected function verifyMinCharacters(string $value,int $minChars) {
		return strlen($value) >= $minChars;
	}
}