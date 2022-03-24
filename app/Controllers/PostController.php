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
        $datapost['posts'] = $modelPost->viewPost();
        $datapost['comments'] = $modelCom->viewComment();
        //var_dump($data);
        return view('home', $datapost);
    }

    public function createpost()
    {
        $session = session();
        $userId = $session->get("userId");
        $statusUser = $session->get("statusUser");
        if ($statusUser == "1") {
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
                $modelCom = new CommentModel();
                $datapost['comments'] = $modelCom->viewComment();
                $session->setFlashdata('Success', 'สร้างโพสต์ประกาศกิจกรรมสำเร็จ');
                echo view('showdata', $datapost);
                return redirect()->to('/showdata');
            }
        } else if ($statusUser == "0" || $statusUser == "2") {
            $model = new UserModel();
            $numprovince = $session->get("province");
            $datapost['province'] = $model->getProvince($numprovince);
            $modelpost = new PostModel();
            $datapost['posts'] = $modelpost->viewPost();
            $modelCom = new CommentModel();
            $datapost['comments'] = $modelCom->viewComment();
            $session->setFlashdata('Err', 'ไม่สามารถสร้างโพสต์ได้กรุณารอการยืนยันตัวตน');
            //var_dump(session()->getFlashdata('Err'));
            echo view('showdata', $datapost);
            return redirect()->to('/showdata');
        }
    }

    public function deletePost($id = null)
    {
        $session = session();
        $model = new PostModel();
        $deleted = $model->deletePost($id);
        if ($deleted) {
            $model = new UserModel();
            $numprovince = $session->get("province");
            $datapost['province'] = $model->getProvince($numprovince);
            $modelpost = new PostModel();
            $datapost['posts'] = $modelpost->viewPost();
            $modelCom = new CommentModel();
            $datapost['comments'] = $modelCom->viewComment();
            echo view('showdata', $datapost);
            return redirect()->to('/showdata');
        }
    }

    public function showDetailPost($id = null)
    {
        helper(['form']);
        echo view('FormEditPost');
    }

    public function editPost($id)
    {
        $session = session();
        //$id = 35;
        $model = new PostModel();
        $datapost['posts'] = $model->viewsinglepost($id);
        $model = new UserModel();
        $numprovince = $session->get("province");
        $datapost['province'] = $model->getProvince($numprovince);
        //var_dump($datapost);
        echo view('FormEditPost', $datapost);
    }

    public function editPostSave()
    {
        $model = new PostModel();
        $id = [
            'postId' => $this->request->getVar('postId'),
        ];
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
        ];
        //var_dump($dataPost);
        $save = $model->updatepost($dataPost, $id);
        if ($save) {
            $session = session();
            $model = new UserModel();
            $numprovince = $session->get("province");
            $datapost['province'] = $model->getProvince($numprovince);
            $modelpost = new PostModel();
            $datapost['posts'] = $modelpost->viewPost();
            $modelCom = new CommentModel();
            $datapost['comments'] = $modelCom->viewComment();
            echo view('showdata', $datapost);
            return redirect()->to('/showdata');
        }
    }
}
