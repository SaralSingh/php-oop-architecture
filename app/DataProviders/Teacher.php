<?php

class Teacher implements Nameable
{

    public function getNames() : array
    {
        $teachers = [
            'Dr. Sunita Mehra',
            'Prof. Rajesh Khanna',
            'Mr. Manoj Tripathi',
            'Ms. Kavita Srivastava'
        ];
        return $teachers;
    }
}
