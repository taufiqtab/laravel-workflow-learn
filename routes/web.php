<?php

use App\Http\Controllers\WorkflowController;
use Illuminate\Support\Facades\Route;
use Workflow\WorkflowStub;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/workflow', [WorkflowController::class, 'index']);

Route::get('/verify-workflow/{idx}', function ($idx) {
    $workflow = WorkflowStub::load($idx);
    $workflow->verify();
    return response()->json('ok');
})->name('verify-workflow');


