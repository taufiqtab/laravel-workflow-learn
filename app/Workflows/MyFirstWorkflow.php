<?php

namespace App\Workflows;

use App\Activities\DoSomething;
use App\Activities\DoSomething2;
use Workflow\ActivityStub;
use Workflow\Workflow;



class MyFirstWorkflow extends Workflow
{
    public function execute($word)
    {
        $result = yield ActivityStub::make(DoSomething::class, $word);
        //something
        $result = yield ActivityStub::make(DoSomething2::class, $result);

        return $result;
    }
}