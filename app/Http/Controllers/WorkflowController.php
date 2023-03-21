<?php
namespace App\Http\Controllers;

use App\Workflows\MyFirstWorkflow;
use Illuminate\Http\Request;
use Workflow\WorkflowStub;


class WorkflowController extends Controller
{
    public function index(){
        $workflow = WorkflowStub::make(MyFirstWorkflow::class);
        $workflow->start('Testing Tralala'); 

        return response()->json([
            'workflow_id' => $workflow->id(),
        ]);
       // while ($workflow->running());
        //$output = $workflow->output();
        //dd($output);
    }
}
