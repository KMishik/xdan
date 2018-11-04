<?php

/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 01.11.2018
 * Time: 19:18
 */
class Model
{

	private $data = array();

	public function __get($name) {

		return isset($this->data[$name]) ? $this->data[$name] : null;
	}

	public function
}