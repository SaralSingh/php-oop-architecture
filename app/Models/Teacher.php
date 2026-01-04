<?php

class Teacher
{
    public static function all()
    {
        $data = [
            ['id' => 1,  'name' => 'Vikas',    'role' => 'Admin'],
            ['id' => 2,  'name' => 'Raunak',   'role' => 'Editor'],
            ['id' => 3,  'name' => 'Riya',    'role' => 'User'],
            ['id' => 4,  'name' => 'Siddharth', 'role' => 'User'],
            ['id' => 5,  'name' => 'Priya',   'role' => 'Moderator'],
            ['id' => 6,  'name' => 'Vikram',  'role' => 'Editor'],
            ['id' => 7,  'name' => 'Anjali',  'role' => 'User'],
            ['id' => 8,  'name' => 'Karan',   'role' => 'Admin'],
            ['id' => 9,  'name' => 'Isha',    'role' => 'User'],
            ['id' => 10, 'name' => 'Arjun',   'role' => 'Developer'],
        ];

        return $data;
    }
}
