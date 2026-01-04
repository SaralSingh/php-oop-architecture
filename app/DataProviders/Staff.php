<?php

class Staff implements Nameable
{
    public function getNames(): array
    {
        $staffNames = [
            'Rahul Sharma',
            'Anita Verma',
            'Amit Singh',
            'Pooja Gupta',
            'Suresh Kumar'
        ];
        return $staffNames;
    }
}
