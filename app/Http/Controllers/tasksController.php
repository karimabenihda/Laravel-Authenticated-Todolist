<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class tasksController extends Controller
{


public function deleteTask(Post $post){
    if (auth()->user()->id ===$post['user_id']){
       $post->delete();
        }
        return redirect('/');
}

public function showEditScreen(Post $post){
    if (auth()->user()->id !==$post['user_id']){
    return redirect('/');
    }
    return view('edit',['post'=>$post]);
}

public function updatedtask(Post $post ,Request $request){
    if (auth()->user()->id !==$post['user_id']){
        return redirect('/');
            }
            $incommingFields=$request->validate([
'title'=>'required',
'body'=>'required'
            ]);
            $incommingFields['title']=strip_tags($incommingFields['title']);
            $incommingFields['body']=strip_tags($incommingFields['body']);

            $post->update($incommingFields);
            return redirect('/');
}

public function createTask(Request $request){
    $incommingFields=$request->validate([
        'title'=>'required',
        'body'=>'required'
    ]);
$incommingFields['title']=strip_tags($incommingFields['title']);
$incommingFields['body']=strip_tags($incommingFields['body']);
$incommingFields['user_id']=auth()->id();
Post::create($incommingFields);

return redirect('/');

}


}
