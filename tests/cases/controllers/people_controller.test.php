<?php
/* People Test cases generated on: 2011-08-24 14:05:49 : 1314209149*/
App::import('Controller', 'People.People');

class TestPeopleController extends PeopleController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PeopleControllerTestCase extends CakeTestCase {
	var $fixtures = array('');

	function startTest() {
		$this->People =& new TestPeopleController();
		$this->People->constructClasses();
	}

	function endTest() {
		unset($this->People);
		ClassRegistry::flush();
	}

}
