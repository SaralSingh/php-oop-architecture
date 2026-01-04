<?php

return [
    '/'=> function()
    {
        require dirname(__DIR__).'/resources/views/home.php';
    },
    '/students'=>function(){
         (new StudentController())->index();
    },
    '404' => function()
    {
        require dirname(__DIR__).'/resources/views/errors/404.php';
    }

];