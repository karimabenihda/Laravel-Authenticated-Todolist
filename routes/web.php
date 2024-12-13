<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\tasksController;
use App\Models\Post;


Route::get('/',function(){
    $posts=[];
    if(auth()->check()){
        $posts=auth()->user()->userTasks()->latest()->get();

    }
    // $posts=Post::where('user_id',auth()->id())->get();
    return view('home',['posts'=>$posts]);
});

Route::get('/signin',function(){
    return view('signin');
});
Route::get('/', [productController::class, 'home']);

Route::post('/logout',[productController::class,'logout']);
Route::post('/register',[productController::class,'register']);
Route::post('/login',[productController::class,'login']);
Route::post('/createTask',[tasksController::class,'createTask']);
Route::get('/edit_task/{post}',[tasksController::class,'showEditScreen']);
Route::put('/edit_task/{post}',[tasksController::class,'updatedtask']);
Route::delete('/delete_task/{post}', [tasksController::class, 'deleteTask']);

//Route::post('/signin',[productController::class,'login']);

