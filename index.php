<?php
require __DIR__.'/app/Contracts/Nameable.php';
require __DIR__ . '/app/Services/School.php';
require __DIR__ . '/app/DataProviders/Student.php';
require __DIR__ . '/app/DataProviders/Teacher.php';
require __DIR__ . '/app/DataProviders/Book.php';


$school = new School();

echo '<h1>Students Names</h1>';
$school->DisplayNames(new Student());

echo '<h1>Teacher Names</h1>';
$school->DisplayNames(new Teacher());

echo '<h1>Book Names</h1>';
$school->DisplayNames(new Teacher());