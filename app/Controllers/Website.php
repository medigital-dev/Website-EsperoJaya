<?php

namespace App\Controllers;

use App\Models\FileModel;
use App\Models\PageModel;
use App\Models\PostFileModel;
use App\Models\PostModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Website extends BaseController
{
    public function route($slug)
    {
        $mPost = new PostModel();
        $mPage = new PageModel();
        $mPostFile = new PostFileModel();
        $mPostFile->join('file', 'post_file.file_id = file.file_id');
        $mFiles = new FileModel();

        $dataPost = $mPost->where('slug', $slug)->first();
        $dataPage = $mPage->where('slug', $slug)->first();

        if ($dataPost) {
            $data = [
                'data' => $dataPost,
                'files' => $mPostFile->where('post_id', $dataPost['post_id'])->findAll()
            ];
            return view('website/post_view', $data);
        }
        if ($dataPage) {
            $data = [
                'data' => $dataPage,
            ];
            return view('website/page_view', $data);
        }
        throw new PageNotFoundException();
    }
}
