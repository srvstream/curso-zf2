<?php

namespace Admin\Filter;

use Zend\InputFilter\InputFilter;

class PagamentoStatus extends InputFilter
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
		
	}
}