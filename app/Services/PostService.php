<?php

namespace App\Services;

use App\Repositories\PostRepository;
use Carbon\Carbon;

class PostService
{

    /**
     * @var PostRepository
     */
    protected $postRepo;

    /**
     * PostService constructor
     * 
     * @param PostRepository $postRepo
     */
    public function __construct(PostRepository $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    /**
     * 取得 Post
     * 
     * @param $params :: 查詢條件
     *
     */
    public function find($params)
    {
        return $this->postRepo->find($params);
    }

    /**
     * 建立 Post
     * 
     * @param $params :: 條件
     *
     */
    public function create($params)
    {
        return $this->postRepo->create($params);
    }

    /**
     * 軟刪除 Post
     * 
     * @param $params :: 條件
     *
     */
    public function delete($params)
    {
        if (!$this->find($params)->first()) return 'post not exist';
        $this->postRepo->delete($params['id']);
        return $this->find($params)->first() ? 'fail' : 'success';
    }

    /**
     * Post 增加post觀看數
     * 
     * @param $id :: 文章id
     *
     */
    public function addView($id)
    {
        $post = $this->postRepo->find(array('id' => $id));
        $post->increment('views');
    }
}
