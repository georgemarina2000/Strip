<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use App\Models\Comment;
use App\Models\Permission;
use App\Models\Post;
use App\Models\Role;
use Illuminate\Http\Request;
class RelationController extends Controller
{
    public function one2one(){

       // $address = User::find(1)->address;
       $address = Address::find(1)->user;
return response()->json($address);


    }

    public function one2many(){

       // $comments = Post::find(1)->comments;
       $comments = Comment::find(1)->post;
 return response()->json($comments);
     }

     public function filter(){
     $post = Post::find(7);
     // with fillter
//$comments = $post->comments()->where('body','rafah') ->get();
//get all comments
//$comments = $post->comments()->get();
//get the post with all his comments
$comments=Post::with('comments')->get();
return response()->json($comments);
     }

     public function delete(){
//delete one to many relationship
     $post = Post::find(1);
     $post->delete();
      //$post->comments()->delete();
      return response()->json('deleted');
    }
    public function add(){

$post=Post::create(['title'=>'new title']);
$id=$post->id;
//$comment=new Comment;
Comment::create([
    'body'=>'new comment to post',
    'post_id'=>$post->id
]);
//$comment->body='new comment to post';
//$post->comments()->save($comment);
return response()->json('okk');

    }



    public function many2many(){

        // $permission = Role::find(1)->permission;
         $permission=Role::with('permission')->get();
  return response()->json($permission);
      }

      public function delete2(){


        $role = Role::find(1);
$per=new Permission;
        $role->permission()->detach(1);
        return response()->json('okk');


      }


      public function add2(){

        $role=Role::create(['name'=>'super admin']);
        $per=Permission::create(['job'=>'check admins']);
        $role->permission()->attach($per);
        return response()->json('add ok');

      }

      public function showColumn(){
      $roles = Role::find(1);

foreach ($roles->roles as $role) {
    echo $role->pivot->created_at;

}
}



}
