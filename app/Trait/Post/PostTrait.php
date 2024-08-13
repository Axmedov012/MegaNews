<?php
namespace App\Trait\Post;
trait PostTrait
{
    public function success($data, $message = null)
    {
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => $message
        ]);
    }

    public function error($data, $message = null)
    {
        return response()->json([
            'success' => false,

            'message' => $message
        ]);
    }

    public function photoError()
    {
        return response()->json('rasm yuklash shart');
    }


    public function deletePost($message = null)
    {
        return response()->json([
            'success' => true,
            'message' => $message
        ]);
    }

    public function showPost($data)
    {
        return response()->json(['data' => $data]);
    }
}
