<?php

/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 01.11.2018
 * Time: 19:15
 */
class UserController extends Controller
{
	public function actionIndex() {

		$model = new User();
		include ROOT . 'application/views/user/index.php';
	}

}