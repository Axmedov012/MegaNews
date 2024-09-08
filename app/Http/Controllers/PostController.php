<?php
namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Repositories\PostRepository;
use App\Trait\Post\PostTrait;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    use PostTrait;
    public function __construct(protected PostRepository $postRepository)
    {

    }
    public function index()
    {
       $posts = $this->postRepository->getAll();
       return PostResource::collection($posts);
    }

    public function store(StorePostRequest $request)
    {
        $posts =  $request->validated();
        $post = $this->postRepository->create([
            'user_id'=>auth()->id(),
            'category_id'=>$posts['category_id'],
            'title'=> $posts['title'],
            'description'=> $posts['description'],
            'tag_id'=>  $posts['tag_id'],
        ]);
        return $this->success(new PostResource($post),'Post muvaffaqiyatli qo\'shildi');
    }
    public function show(Post $post)
    {
        return new PostResource($post);
     /*   $show = $this->postRepository->getById($id);
        return $this->showPost($show);*/
    }
    public function destroy(Post $post)
    {
        Storage::delete($post->photos()->pluck('path')->toArray()); // file o'chirish
        $post->photos()->delete();
        $post->delete();

       return $this->deletePost('Post o\'chirildi');
    }
}
