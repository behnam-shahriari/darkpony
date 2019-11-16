<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\AppController;
use App\Repositories\CategoriesRepository;
use App\Repositories\PostsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends AppController
{

    /**
     * @var PostsRepository
     */
    private $repository;
    /**
     * @var CategoriesRepository
     */
    private $categoriesRepository;

    public function __construct(PostsRepository $repository, CategoriesRepository $categoriesRepository)
    {

        $this->repository = $repository;
        $this->categoriesRepository = $categoriesRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->repository->index();
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->repository->create();
        return view('posts.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validatePost($request);

        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $response = $this->repository->store($request->input(), $fileNameToStore);
        if($response['status'] == true) {
            return redirect('/posts')->with('success', 'Post Created');;
        } else{
            return redirect('/posts/create')->with('error', 'Post not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = $this->repository->show($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->repository->show($id);
        $categories = $this->categoriesRepository->index();
        return view('posts.edit', compact('post', $post, 'categories', $categories ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validatePost($request);

        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();

            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('image')->getClientOriginalExtension();

            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);

        }

        $post = $this->repository->show($id);
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->subtitle = $request->input('subtitle');
        $post->content = $request->input('content');
        $post->published_at = $request->input('published_at');
        if ($request->hasFile('image')) {
            $post->image = $fileNameToStore;
        }
        $post->category_id = $request->input('category');

        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|integer|exists:posts,id'
        ]);
        $result = $this->repository->delete($request['id']);
        if($result == true) {
            return redirect('/posts')->with('success', 'Post Removed');
        } else {
            return redirect('/posts')->with('error', 'Post not removed');
        }



//
//        $post = $this->repository->show($id);
//        if ($post->image != 'noimage.jpg') {
//            Storage::delete('public/images/' . $post->image);
//        }
//
//        $post->delete();
//        return redirect('/posts')->with('success', 'Post Removed');
    }

    public function delete($id)
    {
        $post = $this->repository->show($id);
        return view('posts.delete')->with('post', $post);
    }

    private function validatePost(Request $request)
    {
        return $this->validate($request, [
            'title' => 'required|string|min:3',
            'slug' => 'required|string|min:3',
            'subtitle' => 'required|string|min:3',
            'content' => 'required|string|min:3',
            'published_at' => 'required|date',
            'image' => 'image|nullable|max:1999',
            'category' => 'required|integer',
        ]);
    }
}
