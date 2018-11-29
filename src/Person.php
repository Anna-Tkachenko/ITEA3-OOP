<?php
/**
 * Created by PhpStorm.
 * User: tkachenko
 * Date: 11/29/18
 * Time: 7:47 PM
 */

class Person
{
    const MAX_POSSIBLE_AGE = 50;

    private static $maxAge = 0;

    private $username;
    private $email;
    private $age;

    public static function getOldest()
    {
        return self::$maxAge;
    }

    public function __construct($username,$email)
    {
        $this->username=$username;
        $this->email=$email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        echo "[DEBUG]" . $this->username . \PHP_EOL;

        if ($age > self::MAX_POSSIBLE_AGE) {
            echo "Cannot create person with provided age" . $age . \PHP_EOL;

            return;
        }

        $this->age = $age;

        if ($age > self::$maxAge){
            self::$maxAge = $age;
        }
    }
}
