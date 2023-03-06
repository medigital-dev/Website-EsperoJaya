<?php

namespace App\Controllers;

use App\Models\PostFileModel;
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
                'posts' => $this->mPost->orderBy('created_at', 'DESC')->findAll(),
            ],
        ];
        return view('cms-panel/post', $dataPage);
    }

    public function cekSlug()
    {
        $slug = $this->request->getVar('slug');
        return $this->respond($this->mPost->where('slug', $slug)->findAll());
    }

    public function setPostImage()
    {
        $data = $this->request->getPost();
        $model = new PostFileModel();
        if (!$model->save($data)) {
            return $this->fail('Postingan gagal ditambahkan! ' . $model->errors());
        }
    }

    public function set()
    {
        helper('text');
        $postId = random_string('alnum');
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

    public function toggleActive($id)
    {
        $dataPost = $this->mPost->where('post_id', $id)->first();
        if (!$dataPost) {
            return $this->failNotFound('Postingan tidak ditemukan!');
        }
        $status = ($dataPost['status'] >= 1 ? 0 : 1);

        if (!$this->mPost->where('id', $dataPost['id'])->set('status', $status)->update()) {
            return $this->fail('Postingan gagal ditambahkan! ' . $this->mPost->errors());
        }
        $response = [
            'status' => 200,
            'code' => '',
            'messages' => 'Postingan berhasil ' . ($status == 1 ? 'diaktifkan!' : 'diarsipkan!'),
            'result' => $dataPost
        ];
        return $this->respond($response);
    }

    public function deletePost($id)
    {
        $dataPost = $this->mPost->where('post_id', $id)->first();
        if (!$dataPost) {
            return $this->failNotFound('Postingan tidak ditemukan!');
        }

        if (!$this->mPost->delete($dataPost['id'])) {
            return $this->fail('Postingan gagal dihapus! ' . $this->mPost->errors());
        }

        $response = [
            'status' => 200,
            'code' => '',
            'messages' => 'Postingan berhasil dihapus!',
            'result' => $dataPost
        ];
        return $this->respond($response);
    }

    public function getActive()
    {
        $dataPost = $this->mPost->findAll();
        $send = [];
        $i = 1;
        foreach ($dataPost as $row) {
            $data = [
                'no' => $i,
                'id' => '<code>' . $row['post_id'] . '</code>',
                'judul' => '<h5>' . $row['title'] . '</h5><span class="text-muted small"><i class="fas fa-history mr-1"></i>' . date_create_from_format('Y-m-d H:i:s', $row['updated_at'])->format('d-m-Y') . '</span>',
                'author' => $row['author'],
                'status' => '<label class="custom-toggle"><input type="checkbox" ' . ($row['status'] == 1 ? 'checked' : '') . ' class="btn-switch" value="' . $row['post_id'] . '" onchange="postStatusSwitch(`' . $row['post_id'] . '`)"><span class="custom-toggle-slider rounded-circle btn-switch"></span></label>',
                'action' => '
                <div class="btn-group shadow" role="group" aria-label="First group">
                    <a href="' . $row['slug'] . '" class="btn btn-secondary btn-sm" title="Lihat postingan" target="_blank"><i class="fas fa-eye"></i></a>
                    <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></button>
                </div>
                '
            ];
            array_push($send, $data);
            $i++;
        }
        return $this->respond($send);
    }
}
