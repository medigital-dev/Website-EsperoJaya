<?php

namespace App\Controllers;

use App\Models\EventModel;
use App\Models\FeedbackModel;
use App\Models\FileModel;
use App\Models\PostFileModel;
use App\Models\PostModel;
use CodeIgniter\API\ResponseTrait;

class Home extends BaseController
{
    use ResponseTrait;

    protected $mFeedback;

    public function __construct()
    {
        $this->mFeedback = new FeedbackModel();
    }

    public function index()
    {
        $mPost = new PostModel();
        $mPostFile = new PostFileModel();
        $mEvent = new EventModel();
        $mFile = new FileModel();

        $dataPosts = $dataEvents = [];

        $dataPost = $mPost->orderBy('created_at', 'DESC')->findAll(6);
        $dataEvent = $mEvent->where('date', date('Y-m-d', time()))->findAll();
        $dataFeedback = $this->mFeedback->orderBy('created_at', 'DESC')->where('is_active', 1)->findAll(12);

        foreach ($dataPost as $row) {
            $href = base_url($row['slug']);
            $mPostFile->join('file', 'post_file.file_id = file.file_id');
            $mPostFile->where('type', 'image');
            $sampul = $mPostFile->where('post_id', $row['post_id'])->first();
            if ($sampul) {
                $bgImage = base_url($sampul['url']);
            } else {
                $bgImage = base_url('assets/images/brand/posts.png');
            }
            $createdDate = date_create_from_format('Y-m-d H:i:s', $row['created_at']);
            $title = $row['title'];

            $send = [
                'href' => $href,
                'image' => $bgImage,
                'date' => $createdDate,
                'title' => $title
            ];
            array_push($dataPosts, $send);
        }

        foreach ($dataEvent as $row) {
            $date = date_create_from_format('Y-m-d', $row['date']);
            $send = [
                'date' => $date,
                'time' => $row['time'] . ' WIB',
                'title' => $row['title'],
                'subtitle' => $row['subtitle']
            ];
            array_push($dataEvents, $send);
        }

        $dataPage = [
            'site' => [
                'pageTitle' => '',
                'menuTitle' => '',
                'tagline' => '',
                'icon' => [
                    'filename' => '',
                    'url' => ''
                ],
            ],
            'socialMedia' => [],
            'data' => [
                'posts' => $dataPosts,
                'events' => $dataEvents,
                'feedbacks' => $dataFeedback,
            ]
        ];
        return view('website/homepage', $dataPage);
    }

    public function setFeedback()
    {
        helper('text');

        $name = $this->request->getVar('name');

        $set = [
            'feedback_id' => random_string('md5'),
            'name' => ($name == '') ? 'Anonymous' : $name,
            'content' => $this->request->getVar('content'),
            'is_active' => 1
        ];

        if ($this->mFeedback->save($set)) {
            $json = [
                'status' => true,
                'code' => 200,
                'message' => 'success'
            ];
        } else {
            $json = [
                'status' => true,
                'code' => 400,
                'message' => $this->mFeedback->errors()
            ];
        }

        return $this->respond(json_encode($json));
    }
}
