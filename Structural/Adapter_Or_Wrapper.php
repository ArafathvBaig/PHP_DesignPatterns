<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Classes to Compute Adapter Design Problem
 */
class Student
{
    private $studentName;
    private $registration;

    public function __construct($name, $number)
    {
        $this->studentName = $name;
        $this->registration = $number;
    }

    /**
     * Function to print the Student Details
     * Non-Parameterized Function
     */
    public function getStudentDetails()
    {
        echo "Student Name:: " . $this->studentName;
        echo "\nRegistration Number:: " . $this->registration;
    }
}
class University
{
    protected $student;
    public function __construct($student)
    {
        $this->student = $student;
    }
    public function getDetails()
    {
        $this->student->getStudentDetails();
    }
}

$university = new University(new Student("Arafath Baig", 11601937));
$university->getDetails();
