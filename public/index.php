<?php
require dirname(__DIR__). '/app/vendor/autoload.php';

$school = new School();

echo '<h1>Students Names</h1>';
$school->DisplayNames(new Student());

echo '<h1>Teacher Names</h1>';
$school->DisplayNames(new Teacher());

echo '<h1>Book Names</h1>';
$school->DisplayNames(new Book());

echo '<h1>Staff Names</h1>';
$school->DisplayNames(new Staff());

