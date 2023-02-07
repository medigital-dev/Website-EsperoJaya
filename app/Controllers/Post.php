<?php

namespace App\Controllers;

use App\Models\PostsModel;
use CodeIgniter\API\ResponseTrait;

class Post extends BaseController
{
    protected $mPost;
    use ResponseTrait;

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

    public function cekSlug()
    {
        $slug = $this->request->getVar('slug');
        return $this->respond($this->mPost->where('slug', $slug)->findAll());
    }
}
