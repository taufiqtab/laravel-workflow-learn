<?php

namespace App\Activities;

use Workflow\Activity;

class DoSomething extends Activity
{
    public function execute($word)
    {
        return "Hello {$word} Activity 1";
    }
}