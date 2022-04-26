<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    /**
     * @var Post
     */
    protected $post;

    /**
     * PostRepository constructor
     * 
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    } 

    /**
     * 取得 Post
     * 
     * @param $params :: 查詢條件
     *
     */
    public function find($params = [])
    {
        foreach($params as $key => $value){
            $this->post = $this->post->where($key, $value);
        }
        return $this->post; 
    }

    public function create($params = []) : Post
    {
        return $this->post->create($params);
    }

    public function delete($id)
    {
        $this->post->delete($id);
    }
}