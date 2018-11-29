#!/usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: tkachenko
 * Date: 11/29/18
 * Time: 7:49 PM
 */
require_once  __DIR__ . '/../src/console_helper.php';
require_once  __DIR__ . '/../src/Person.php';
require_once  __DIR__ . '/../src/Exceptions/PersonAgeValidationException.php';

$john = new Person('john','john@example.com');
$john->setAge(25);
writeln($john->getUsername());

$alisa = new Person('alisa','alisa@example.com');
$alisa->setAge(30);
writeln($alisa->getUsername());

$mark = new Person('mark','mark1930@example.com');

try {
    $mark->setAge(63);
} catch (PersonAgeValidationException $e){
    writeln('[ERROR] ' . $e->getMessage());
}

writeln($mark->getAge());

writeln('Max age:' . Person::getOldest());

writeln($mark);

writeln($mark->username);

var_dump(isset($mark->username));

unset($mark->username);
writeln($mark->getUsername());