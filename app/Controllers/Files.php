<?php

namespace App\Controllers;

use App\Models\FileModel;
use CodeIgniter\API\ResponseTrait;

class Files extends BaseController
{
    use ResponseTrait;

    public function upload()
    {
        helper('text');
        $model = new FileModel();
        $fileUpload = $this->request->getFile('file');
        if (!$fileUpload->hasMoved()) {
            $newFileName = $fileUpload->getRandomName();
            $fileUpload->move('assets/uploads', $newFileName);
            $mimeType = $fileUpload->getClientMimeType();
            $mimeType = explode('/', $mimeType);
            do {
                $file_id = random_string('alnum');
            } while ($model->where('file_id', $file_id)->findAll());

            $data = [
                'file_id' => $file_id,
                'filename' => $newFileName,
                'title' => $fileUpload->getClientName(),
                'type' => $mimeType[0],
                'url' => 'assets/uploads/' . $fileUpload->getName()
            ];
            if (!$model->save($data)) {
                return $this->fail('Database Error: ' . $model->errors());
            }
            return $this->respond($data);
        }
    }
}
