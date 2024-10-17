<?php

class Empleado{

private $name;
protected $salary;

private $joindate;

private $endDate;

public function __construct($name, $salary, $joindate) {
    $this->name = $name;
    $this->salary = $salary;
    $this->joindate = $joindate;
}
public function endContract($date) {
    $this->endDate = $date;
    $this->salary=0;}

public function calculateSalary(): float
{return $this->salary;}



}