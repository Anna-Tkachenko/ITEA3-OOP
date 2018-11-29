<?php
/**
 * Created by PhpStorm.
 * User: tkachenko
 * Date: 11/29/18
 * Time: 9:37 PM
 */

interface EmployeeInterface
{
    public function work();

    public function pause($minutes);
}