<?php

namespace App\Controllers;

use App\Models\PageModel;
use App\Models\PostFileModel;
use App\Models\PostModel;
use CodeIgniter\API\ResponseTrait;

class Post extends BaseController
{
    protected $mPost;
    protected $mPostFile;
    use ResponseTrait;

    public function __construct()
    {
        $this->mPost = new PostModel();
        $this->mPostFile = new PostFileModel();
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

    public function cekSlug($slug)
    {
        $mPage = new PageModel();
        $dataPost = $this->mPost->where('slug', $slug)->first();
        $dataPage = $mPage->where('slug', $slug)->first();
        $response = [
            'status' => 200,
            'code' => 200,
            'message' => 'Data ditemukan.',
        ];

        if ($dataPage) {
            $response['result'] = $dataPage;
            return $this->respond($response);
        } else if ($dataPost) {
            $response['result'] = $dataPost;
            return $this->respond($response);
        }

        $response = [
            'status' => 404,
            'code' => 404,
            'messages' => [
                'error' => 'Data tidak ditemukan'
            ]
        ];
        return $this->respond($response);
    }

    public function setPostImage()
    {
        $data = $this->request->getPost();
        if (!$this->mPostFile->save($data)) {
            return $this->fail('Postingan gagal ditambahkan! ' . $this->mPostFile->errors());
        }
    }

    public function set()
    {
        $data = $this->request->getPost();
        if (!isset($data['id'])) {
            helper('text');
            do {
                $data['post_id'] = random_string('alnum');
            } while ($this->mPost->where('post_id', $data['post_id'])->findAll());
        }

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
        $dataPost = $this->mPost->orderBy('created_at', 'DESC')->findAll();
        $send = [];
        $i = 1;
        foreach ($dataPost as $row) {
            $files = $this->mPostFile->where('post_id', $row['post_id'])->findAll();
            $data = [
                'no' => $i,
                'id' => '<code>' . $row['post_id'] . '</code>',
                'judul' => '<h5>' . $row['title'] . '</h5>
                <span class="badge badge-primary" title="Terakhir diperbaharui"><i class="fas fa-history mr-1"></i>' . date_create_from_format('Y-m-d H:i:s', $row['updated_at'])->format('d-m-Y H:i:s') . '</span>
                <span class="badge badge-success" title="' . count($files) . ' Lampiran"><i class="fas fa-file mr-1"></i>' . count($files) . '</span>
                ',
                'author' => $row['author'],
                'status' => '<label class="custom-toggle"><input type="checkbox" ' . ($row['status'] == 1 ? 'checked' : '') . ' class="btn-switch" value="' . $row['post_id'] . '" onchange="postStatusSwitch(`' . $row['post_id'] . '`)"><span class="custom-toggle-slider rounded-circle btn-switch"></span></label>',
                'action' => '
                <div class="btn-group shadow" role="group" aria-label="First group">
                    <a href="' . $row['slug'] . '" class="btn btn-secondary btn-sm" title="Lihat postingan" target="_blank"><i class="fas fa-eye"></i></a>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="editPost(`' . $row['post_id'] . '`)"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="deletePost(`' . $row['post_id'] . '`)"><i class="far fa-trash-alt"></i></button>
                </div>'
            ];
            array_push($send, $data);
            $i++;
        }
        return $this->respond($send);
    }

    public function get($postid)
    {
        $dataPost = $this->mPost->where('post_id', $postid)->first();
        if (!$dataPost) {
            return $this->failNotFound('Postingan tidak ditemukan!');
        }
        $this->mPostFile->join('file', 'post_file.file_id = file.file_id');
        $files = $this->mPostFile->where('post_id', $postid)->findAll();

        $response = [
            'status' => 200,
            'code' => '',
            'messages' => 'Data ditemukan!',
            'result' => [
                'dataPost' => $dataPost,
                'files' => $files
            ]
        ];
        return $this->respond($response);
    }

    public function removePostFile($id)
    {
        if (!$dataFile = $this->mPostFile->where('file_id', $id)->first()) {
            return $this->failNotFound('File tidak ditemukan!');
        }
        if (!$this->mPostFile->where('file_id', $id)->delete()) {
            return $this->fail('Error: ' . $this->mPostFile->errors());
        }
        $response = [
            'status' => 200,
            'code' => '',
            'messages' => 'File berhasil dihapus.',
            'result' => [
                'data' => $dataFile
            ]
        ];
        return $this->respond($response);
    }
}
