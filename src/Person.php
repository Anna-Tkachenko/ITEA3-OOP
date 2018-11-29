<?php
/**
 * Created by PhpStorm.
 * User: tkachenko
 * Date: 11/29/18
 * Time: 7:47 PM
 */

class Person
{
    public $username;
    public $email;
    public $age;

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }
}
