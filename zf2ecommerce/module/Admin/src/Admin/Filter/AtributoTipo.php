<?php

namespace Admin\Filter;

use Zend\InputFilter\InputFilter;

class AtributoTipo extends InputFilter
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
			'name' => 'tipo_selecao',
			'required' => true,
			'filters' => array(
				array('name' => 'StringTrim'),
				array('name' => 'StripTags')
			)
		));

	}
}