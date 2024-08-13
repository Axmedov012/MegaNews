<?php

namespace App\Http\Controllers;

use App\Http\Resources\VideoPostResource;
use App\Models\VideoPost;
use App\Http\Requests\StoreVideoPostRequest;
use App\Http\Requests\UpdateVideoPostRequest;

class VideoPostController extends Controller
{

    public function index()
    {
        $video = VideoPost::all();
        return VideoPostResource::collection($video);
    }

    public function store(StoreVideoPostRequest $request)
    {
      $videos =   $request->validated();
        if ($request->hasFile('video')) {
            $videoName = $request->file('video')->getClientOriginalName();
            $pathVideo = $request->file('video')->storeAs('public/videos', $videoName);
             if ($request->hasFile('photo')) {
                $photoName = $request->file('photo')->getClientOriginalName();
                $pathPhoto = $request->file('photo')->storeAs('public/videoPostPhoto', $photoName);
            }
        }
        $video = VideoPost::create([
            'user_id'=>1,
            'tag_id'=>1,
            'title'=>$videos['title'],
            'description'=>$videos['description'],
            'video'=>$videoName,
            'photo' =>$photoName,
        ]);

        return response()->json([
            'message'=>'success',
            'data'=>new VideoPostResource($video)
        ]);
    }


    public function show(VideoPost $videoPost)
    {
        //
    }

    public function update(UpdateVideoPostRequest $request, VideoPost $videoPost)
    {
        //
    }
    public function destroy(VideoPost $videoPost)
    {
        //
    }
}
