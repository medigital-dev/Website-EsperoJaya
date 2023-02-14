<?php

namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\API\ResponseTrait;

class Post extends BaseController
{
    protected $mPost;
    use ResponseTrait;

    public function __construct()
    {
        $this->mPost = new PostModel();
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

    public function setPost()
    {
        helper('text');
        $postId = random_string('md5');
        $data = $this->request->getPost();
        $data['post_id'] = $postId;
        if (!$this->mPost->save($data)) {
            return $this->fail('Postingan gagal ditambahkan! ' . $this->mPost->errors());
        }
        $response = [
            'status' => 200,
            'code' => '',
            'messages' => 'Postingan berhasil ditambahkan.',
            'result' => $data
        ];
        return $this->respond($response);
    }
}
