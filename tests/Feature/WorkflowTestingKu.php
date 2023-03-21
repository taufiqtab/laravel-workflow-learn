<?php

namespace Tests\Feature;

use App\Activities\DoSomething;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WorkflowTestingKu extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_workflow_ku(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $printObj = new \App\Actions\PrintText();
        $word = $printObj->action("I Love You 3000");
        dd($word);

        //$activityOne = new DoSomething();
    }
}
