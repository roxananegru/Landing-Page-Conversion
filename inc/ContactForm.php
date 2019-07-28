<?php

namespace inc;

use inc\Form;
use inc\DB;

class ContactForm extends Form {
	protected $name;
	protected $email;
	protected $company;
	protected $phone;
	protected $subject;
	protected $message;

	const SQL = "INSERT INTO contact (name, email, company, phone, subject, message)
		VALUES (?, ?, ?, ?, ?, ?);";

	// validate form
	public function validate() {
		// validate name
		$this->validateText('name', 5);

		// validate email
		$this->validateEmail();

		// validate subject
		$this->validateText('subject', 5);

		// validate message
		$this->validateText('message', 7);

		// validate company
		if(!empty($this->company)) {
			$this->validateText('company', 5);
		}

		// validate phone
		if(!empty($this->phone)) {
			$this->validatePhone();
		}
	}

	public function save() {
		$connection = DB::get()->getConnection();

		if($stmt = $connection->prepare(self::SQL)) {
			$stmt = $connection->prepare(self::SQL);
			
			$stmt->bind_param(
				'ssssss', 
				$this->name, 
				$this->email, 
				$this->company, 
				$this->phone, 
				$this->subject, 
				$this->message
			);

			$stmt->execute();

			if(!empty($stmt->error)) {
				return false;
			}

			$stmt->close();

			return true;
		}

		return false;
	}
}