<?php
class Student implements Nameable
{
    public function getNames(): array
    {
        $students = [
            'Rahul Verma',
            'Kunal Singh',
            'Piyush Mishra',
            'Aditya Sharma',
            'Nikhil Gupta',
            'Vikas Yadav'
        ];
        return $students;
    }
}

