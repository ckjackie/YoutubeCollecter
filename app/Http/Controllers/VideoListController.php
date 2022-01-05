<?php

namespace App\Http\Controllers;

use App\Models\VideoList;
use Illuminate\Http\Request;

class VideoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videolist = VideoList::all();
        return view("videolist", compact("videolist"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $req)
    {
        $videolist = new VideoList;
        $videolist->name = $req->name;
        $videolist->count = $req->count;
        $videolist->user_id = $req->user_id;
        $videolist->save();
        return redirect("/videolist/");
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = VideoList::create($request->all());
        return redirect("/videolist/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VideoList  $videoList
     * @return \Illuminate\Http\Response
     */
    public function list($id)
    {
        //
        $data = Videos::all();
        $target = $data.video_list_id == $id;
        //$id = $target->id;
        //return view("list", compact("id"));
        return view("list", compact("id"));
    }

/*
     public function index(){
        $data = Video::all();
        return view("list", compact("data"));
    }

    public function show($id){
        //return "Your video id is $id!";
        $target = Video::find($id);
        $vid = $target->vid;
        return view("show", compact("vid"));
    }
*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VideoList  $videoList
     * @return \Illuminate\Http\Response
     */
    public function edit(VideoList $videoList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VideoList  $videoList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VideoList $videoList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VideoList  $videoList
     * @return \Illuminate\Http\Response
     */
    public function destroy(VideoList $videoList)
    {
        //
    }
}
