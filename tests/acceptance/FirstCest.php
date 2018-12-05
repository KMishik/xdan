<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
      $I->wantTo('Test GLOBAL RU TAXI.');
    }

    // tests
    public function firstPageAccessable(AcceptanceTester $I)
    {
      $I->amOnPage('/');
      $I->see('Авторизоваться');
      $I->see('Логин');
      $I->see('Пароль');
/*
      $I->fillField('LoginForm[username]','skoder@ya.ru');
      $I->fillField('LoginForm[password]','12345');
      $I->click(['name' => 'login-button']);
      */
      $I->submitForm('#login-form', array('LoginForm' => array(
        'username' => 'skoder@ya.ru',
        'password' => '12345',
      )));
      $I->see('Rutaxi CRM');

    }
}
