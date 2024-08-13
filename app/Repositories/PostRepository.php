<?php
namespace App\Repositories;

use App\Http\Resources\PostResource;
use App\Interfaces\PostInterface;
use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
class PostRepository implements PostInterface
{
    public function getAll(int $page = 10): Paginator
    {
        return Post::paginate($page);
    }

    public function getById(int $id): Post
    {
        return Post::findOrFail ($id);
    }

    public function create(array $data)
    {
        $post = Post::create($data);
        return $post;
    }

    public function delete(int $id)
    {
        $delete = Post::destroy($id);
        return $delete;
    }
}
