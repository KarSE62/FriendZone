<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PostModel;
use App\Models\UserModel;
use App\Models\CommentModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\RequestTrait;
use CodeIgniter\API\ResponseTrait;

class PostController extends ResourceController
{
    use RequestTrait;
    public function index()
    {
        helper(['form']);
        echo view('createPost');
    }

    public function viewPost()
    {
        $modelPost = new PostModel();
        $modelCom = new CommentModel();
        $data['posts'] = $modelPost->viewPost();
        $data['comments'] = $modelCom ->viewComment();
        //var_dump($data);
        return view('home', $data);
    }

    public function createpost()
    {
        $session = session();
        $userId = $session->get("userId");
        $statusPost = "1";
        $model = new PostModel();
        $dataPost = [
            'postTitle' => $this->request->getVar('postTitle'),
            'categoryId' => $this->request->getVar('categoryId'),
            'imagePost' => $this->request->getVar('imagePost'),
            'detailPost' => $this->request->getVar('detailPost'),
            'note' => $this->request->getVar('note'),
            'num_people' => $this->request->getVar('num_people'),
            'expenses' => $this->request->getVar('expenses'),
            'province' => $this->request->getVar('province'),
            'district' => $this->request->getVar('district'),
            'subDistrict' => $this->request->getVar('subDistrict'),
            'date_start' => $this->request->getVar('date_start'),
            'date_end' => $this->request->getVar('date_end'),
            'userId' => $this->request->getVar('userId'),
            'statusPost' => $statusPost,
            'userId' => $userId,
        ];
        //var_dump($dataPost);
        $post = $model->createpost($dataPost);
        if ($post) {
            $model = new UserModel();
            $numprovince = $session->get("province");
            $datapost['province'] = $model->getProvince($numprovince);
            $modelpost = new PostModel();
            $datapost['posts'] = $modelpost->viewPost();
            echo view('showdata', $datapost);
            return redirect()->to('/showdata');
        }
    }
}
