<?php
// ========== Inheretence ==========

class Processor
{
    public $test;
}

class Computer extends Processor
{
    public $cpu;
    public $ram = '2GB';
    public $storage;
    public $motherboard;
    public $powersupply;

    public function start_cpu()
    {
        echo "CPU is starting.. <br>";
    }
}

class ATM extends Computer
{
    public $money_storage;
    public $card_reader;

    public function draw_money()
    {
        echo "You withdraw 500JOD";
    }
}

class Laptop extends Computer
{
    public $foldable_screen;
    public $touch_pad;
    public $ram = "8GB";
}

$arab_bank_atm = new ATM();
// $arab_bank_atm->start_cpu();

// var_dump(new Computer);
// var_dump(new ATM);
// var_dump(new Laptop);


// ========== Access Modifiers ==========
// Puble => Protected => Private

class A
{
    public function public_method()
    {
        echo "Hi from public method <br>";
    }

    protected function protected_method()
    {
        echo "Hi from protected method <br>";
        $this->private_method();
    }

    private function private_method()
    {
        echo "Hi from private method <br>";
    }
}

class B extends A
{
    public function say_hi()
    {
        echo "Hi from class B! <br>";
        $this->protected_method();
        // $this->private_method(); // Error
    }
}

$obj = new B();
// $obj->say_hi();
// $obj->public_method();
// $obj->protected_method(); // Error
// $obj->private_method(); // Error


class Course
{
    protected $students = array();
    private $course_name;
    public $syllabus;

    public function __construct($name)
    {
        $this->course_name = $name;
    }

    public function add_student($student_name)
    {
        $this->students[] = $student_name;
    }

    public function get_course_name()
    {
        echo $this->course_name;
    }
}

class PHP extends Course
{
    public $php_distinct_students = array();
    public function add_php_distinct_student($student_name)
    {
        if (in_array($student_name, $this->students)) {
            $this->php_distinct_students[] = $student_name;
        }
    }
}

$session = new PHP("C92");

$session->add_student('Khalid');
$session->add_student('Roy');

$session->get_course_name();

$session->add_php_distinct_student('Khalid');
$session->add_php_distinct_student('Ahmad');

var_dump($session);
