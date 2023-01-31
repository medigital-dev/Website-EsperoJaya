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
        // helper('text');
        // $this->mPost->save([
        //     'post_id' => random_string('md5'),
        //     'title' => random_string('alpha'),
        //     'slug' => random_string('alnum', 6),
        //     'content' => random_string('alpha', 30),
        //     'author' => 'mesaidlg',
        //     'status' => 'active'
        // ]);
        $dataPage = [
            'title' => 'Posts',
            'data' => [
                'posts' => $this->mPost->findAll(),
            ],
        ];
        return view('cms-panel/post', $dataPage);
    }
}
