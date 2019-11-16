<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\CV;
use App\Models\Post;
use Illuminate\Database\QueryException;

class PostsRepository extends GeneralRepository
{
    public function index()
    {
        try {
            return Post::paginate(10);
        } catch (QueryException $exception) {
            $this->handleException($exception, "", 1);
        }
    }

    public function create()
    {
        return Category::all();
    }
    

    public function store(array $pos, string $fileNameToStore)
    {
        $response = [
            'status' => false
        ];

        try {
            $post = new Post();
            $post->title = $pos['title'];
            $post->slug = $pos['slug'];
            $post->subtitle = $pos['subtitle'];
            $post->content = $pos['content'];
            $post->published_at = $pos['published_at'];
            $post->image = $fileNameToStore;
            $post->category_id = $pos['category'];
            $post->save();
            $response['status'] = true;
        } catch (QueryException $exception) {
            $this->handleException($exception, "", 1);
        }
        return $response;
    }

    public function show(int $id)
    {
        try {
            return Post::find($id);
        } catch (QueryException $exception) {
            $this->handleException($exception, "", 1);
        }
    }

    public function delete(int $id)
    {
        try {
            $deleted = Post::destroy($id);
            $response['status'] = $deleted;
        } catch (QueryException $exception) {
            $this->handleException($exception, "", 1);
        }
        return $response;
    }
}