<?php

namespace App\Controllers;

use App\Models\PostsModel;

class Post extends BaseController
{
    protected $mPost;

    public function __construct()
    {
        $this->mPost = new PostsModel();
    }

    public function index()
    {
        $dataPage = [
            'title' => 'Posts',
            'data' => [
                'posts' => $this->mPost->findAll(),
            ],
        ];
        return view('cms-panel/post', $dataPage);
    }
}
