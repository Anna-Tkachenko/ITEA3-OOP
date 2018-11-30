<?php
/**
 * Created by PhpStorm.
 * User: tkachenko
 * Date: 11/29/18
 * Time: 9:43 PM
 */

require_once __DIR__ . '/EmployeeInterface.php';

final class Boss
{
    /**
     * @var EmployeeInterface[]
     */
    private $employees = [];

    public function addEmployee(EmployeeInterface $employee)
    {
        $this->employees[] = $employee;
    }

    public function startWork()
    {
        foreach ($this->employees as $employee) {
            $employee->work();
        }

        // TODO: delay logic. For example: \sleep(4);

        foreach ($this->employees as $employee) {
            if ($employee instanceof HumanEmployee) {
                $employee->eat();
            }
        }
    }

}