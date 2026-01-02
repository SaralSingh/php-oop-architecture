<?php
class Book implements Nameable
{
    public function getNames(): array
    {
        $books = [
            'The Alchemist',
            'Atomic Habits',
            'Rich Dad Poor Dad',
            'Think and Grow Rich',
            'The Power of Habit',
            'Deep Work'
        ];
        return $books;
        // throw new \Exception('Not implemented');
    }
}
