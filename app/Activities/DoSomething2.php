<?php

namespace App\Activities;

use Workflow\Activity;

class DoSomething2 extends Activity
{
    public function execute($word)
    {
        return "{$word}, and welcome to the second activity 2";
    }
}