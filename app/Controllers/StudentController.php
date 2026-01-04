<?php

class StudentController
{
    public function index()
    {
        // 👇 direct MODEL se data
        $students = Student::all();

        // 👇 data VIEW ko
        require dirname(__DIR__, 2) . '/resources/views/students.php';
    }
}
