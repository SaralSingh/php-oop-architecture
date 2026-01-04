<?php
class TeacherController{

    public function index()
    {
        $teachers = Teacher::all();

        require
        dirname(__DIR__,2).'/resources/views/teachers.php';
    }


}