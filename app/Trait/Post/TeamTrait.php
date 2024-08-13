<?php
namespace App\Trait\Post;
trait TeamTrait
{
    public function success ($data,$message = null)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data
        ]);
    }

    public function delete($message = null)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
        ]);
    }
}
