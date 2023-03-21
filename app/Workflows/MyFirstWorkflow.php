<?php

namespace App\Workflows;

// use App\Activities\DoSomething;
use App\Activities\DoSomething2;
use Workflow\SignalMethod;
use Workflow\ActivityStub;
use Workflow\Workflow;
use Workflow\WorkflowStub;


class MyFirstWorkflow extends Workflow
{

    private bool $verified = false;

    #[SignalMethod]
    public function verify()
    {
        $this->verified = true;
    }

    public function execute($word)
    {
        return [
            yield ActivityStub::make('App\Activities\DoSomething'::class, $word),
            yield ActivityStub::make(DoSomething2::class, $word),
            yield WorkflowStub::await(fn () => $this->verified),
            yield ActivityStub::make('App\Activities\DoSomething'::class, $word),
            yield ActivityStub::make(DoSomething2::class, $word),
        ];

        // $result = yield ActivityStub::make(DoSomething::class, $word);
        // //something
        // yield WorkflowStub::await(fn () => $this->verified);
        
        // $result = yield ActivityStub::make(DoSomething2::class, $result);
        

        return $result;
    }
}