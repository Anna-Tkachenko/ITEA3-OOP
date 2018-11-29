<?php
/**
 * Created by PhpStorm.
 * User: tkachenko
 * Date: 11/29/18
 * Time: 9:38 PM
 */
require_once  __DIR__ . '/EmployeeInterface.php';

final class Employee implements EmployeeInterface
{

    public function work()
    {
       echo \sprintf("[%s] is working\n", \spl_object_id($this));
    }

    public function pause($minutes)
    {
      echo \sprintf("[%s] paused work for %d minutes", \spl_object_id($this), $minutes);
    }
}