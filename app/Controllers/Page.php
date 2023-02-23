<?php

namespace App\Controllers;

use App\Models\PageModel;
use CodeIgniter\API\ResponseTrait;

class Page extends BaseController
{
    protected $mPage;
    use ResponseTrait;

    public function __construct()
    {
        $this->mPage = new PageModel();
    }

    public function cekSlug()
    {
        $slug = $this->request->getVar('slug');
        return $this->respond($this->mPage->where('slug', $slug)->findAll());
    }
}
