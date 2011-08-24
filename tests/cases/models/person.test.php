<?php
/* Person Test cases generated on: 2011-08-24 14:04:37 : 1314209077*/
App::import('Model', 'People.Person');

class PersonTestCase extends CakeTestCase {
	var $fixtures = array('');

	function startTest() {
		$this->Person =& ClassRegistry::init('Person');
	}

	function endTest() {
		unset($this->Person);
		ClassRegistry::flush();
	}

}
