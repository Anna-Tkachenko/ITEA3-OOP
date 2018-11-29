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

$john = new Person();
$john->username = 'john';
writeln($john->username);


$alisa = new Person();
$alisa->username = 'alisa123';
writeln($alisa->username);

