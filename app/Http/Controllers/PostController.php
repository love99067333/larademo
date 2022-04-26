<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //    
    protected $postService;
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        return $this->postService->find([])->get();
    }

    public function store(Request $request)
    {
        return $this->postService->create(
            $request->only(array('title', 'content'))
        );
    }

    public function show($id)
    {
        $this->postService->addView($id);
        return $this->postService->find(['id' => $id])->first() ?? 'post not found';
    }

    public function destroy($id)
    {
        return $this->postService->delete(array('id' => $id));
    }
}
