<?php

class School
{
    public function DisplayNames(Nameable $collection)
    {
        echo '<ul>';
        foreach ($collection->getNames() as $name) {
            echo '<li>' . $name . '</li>';
        }
        echo '</ul>';
    }
}
