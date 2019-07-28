<?php

namespace inc;

use \Inc\ContactForm;

class Controller {
	const LANDING_PAGE_VIEW = "views/landing.php";
	const REQUEST_POST = "POST";

	// Controller constructor
	public function __construct($config) {
		if($_SERVER['REQUEST_METHOD'] === self::REQUEST_POST) {
			return $this->validate();
		}

		require_once(self::LANDING_PAGE_VIEW);
	}

	// Validate contact form
	private function validate() {
		$contactForm = new ContactForm($_POST);

		// validate
		$contactForm->validate();

		// insert into database
		if(empty($contactForm->getErrors())) {
			$contactForm->save();
		}

		// return errors
		die(json_encode($contactForm->getErrors()));
	}
}