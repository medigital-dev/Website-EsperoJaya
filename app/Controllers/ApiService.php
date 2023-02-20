<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class ApiService extends BaseController
{
    use ResponseTrait;

    public function index()
    {

        $table = $this->request->getGet('table');
        if (!$model = $this->cekModel($table)) {
            return $this->failNotFound('Table Not Found, please check documentations', 400);;
        }
        $limit = $this->request->getGet('limit');

        return $this->respond($model->orderBy('created_at', 'DESC')->findAll($limit == null ? 0 : $limit), 200);
    }

    public function cekModel($table)
    {
        switch ($table) {
            case 'post':
                return new \App\Models\PostModel();
                break;

            case 'postImage':
                return new \App\Models\PostImageModel();
                break;

            case 'page':
                return new \App\Models\PageModel();
                break;

            case 'event':
                return new \App\Models\EventModel();
                break;

            case 'feedback':
                return new \App\Models\FeedbackModel();
                break;

                // case 'menu':
                //     return new \App\Models\PostImageModel();
                //     break;

            default:
                return false;
                break;
        }
    }

    public function create()
    {
        helper('text');
        $table = $this->request->getGet('table');
        $name_id = $table . '_id';
        $model = $this->cekModel($table);
        if (!$model) {
            return $this->failNotFound('Tabel tidak ditemukan, silahkan cek dokumentasi!', 400);
        }

        $data = $this->request->getJSON();
        do {
            $data->$name_id = random_string('alnum');
        } while ($model->where($name_id, $data->$name_id)->findAll());

        if (!$model->save($data)) {
            return $this->fail('Error' . $model->errors());
        }
        return $this->respondCreated($data, 'Data berhasil ditambahkan');
    }
}
