<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
     public function index(){
     	$data = Video::all();
        return view("index", compact("data"));
    }

    public function show($id){
        //return "Your video id is $id!";
        $data = Video::all();
        $target = Video::find($id);
        $title = $target->title;
        $vid = $target->vid;
        $comm = Comment::all();
        return view("show", compact("id","vid","data","comm","title"));
    }

    public function add(Request $req){
        $video = new Video;
        $video->title = $req->title;
        $video->vid = $req->vid;
        $video->save();
        return redirect("/");
    }

    public function addcom($id, Request $req){
        $target = Video::find($id);
        $vid = $target->vid;
        $comment = new Comment;
        $comment->content = $req->com;
        $comment->video_id = $vid;
        $comment->save();
        return redirect("/show/$id/");
    }

    public function delete($id){
        //Video::where("id", $id)->delete();
        Video::destroy($id);
        return redirect("/");
    }
}
