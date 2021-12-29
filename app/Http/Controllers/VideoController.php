<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
     public function index(){
     	$data = Video::all();
        //$user = Auth::user();
        return view("index", compact("data"));
    }

    public function show($id){
    	//return "Your video id is $id!";
    	$target = Video::find($id);
    	$vid = $target->vid;
    	return view("show", compact("vid"));
    }

    public function add(Request $req){
        $video = new Video;
        $video->title = $req->title;
        $video->vid = $req->vid;
        $video->save();
        return redirect("/");
    }

    public function delete($id){
    	//Video::where("id", $id)->delete();
    	Video::destroy($id);
    	return redirect("/");
    }
}
