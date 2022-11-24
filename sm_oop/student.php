<?php
require_once './db.php';

class Student
{
    protected $db;
    public function __construct()
    {
        $this->db = new DB();
    }

    public function create($student_information)
    {
        $validation = $this->validate_student_information($student_information);
        if ($validation != true)
            return $validation;

        $name = $student_information['name'];
        $dob = $student_information['dob'];
        $phone = $student_information['phone'];
        $email = $student_information['email'];
        $gender = $student_information['gender'];

        $this->db->submit_query("INSERT INTO students (name, dob, phone, email, gender) VALUES ('$name','$dob','$phone','$email','$gender')");
    }

    public function get_students(): array
    {
        $students = array();
        $result = $this->db->submit_query("SELECT * FROM students");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
                $students[] = $row;
            }
        }

        return $students;
    }

    protected function validate_student_information($student_information)
    {
        // Validation
        if (empty($student_information))
            return "Empty student information";
        if (!isset($student_information['name']))
            return "Name is required";
        if (!isset($student_information['gender']))
            return "Gender is required";
        if ($student_information['gender'] != "male" && $student_information['gender'] != "female")
            return "Gender should be male or female";

        return true;
    }
}
