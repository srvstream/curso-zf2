<?php

namespace Admin\Filter;

use Zend\InputFilter\InputFilter;

class Caracteristica extends InputFilter
{
	public function __construct()
	{
		$this->add(array(
			'name' => 'nome',
			'required' => true,
			'filters' => array(
				array('name' => 'StringTrim'),
				array('name' => 'StripTags')
			)
		));

		$this->add(array(
			'name' => 'valor',
			'required' => true,
			'filters' => array(
				array('name' => 'StringTrim'),
				array('name' => 'StripTags')
			)
		));

		$this->add(array(
			'name' => 'status',
			'required' => true,
			'filters' => array(
				array('name' => 'StringTrim'),
				array('name' => 'StripTags')
			)
		));

	}
}