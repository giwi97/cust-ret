<?php

use App\Models\Upcoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UpcomingResource;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//All Upcoming Task

Route::get("/upcoming", function(){
    $upcoming = Upcoming::all();

    return UpcomingResource::collection($upcoming);
});

//Add new task

Route::post("/upcoming", function (Request $request) {
    return Upcoming::create([
        'title' => $request->title,
        'taskId' => $request->taskId,
        'waiting' => $request->waiting
    ]);
});

//Delete task 

Route::delete("/upcoming/{taskId}", function($taskId) {
    DB::table('upcomings')->where('taskId', $taskId)->delete():

    return 204;
});

//add daily task

Route::post('/dailytask', function(Request $request){

    return Today::create([
        'id' => $request->id,
        'title' => $request->title,
        'taskId' => $request->taskId
    ]);

});
