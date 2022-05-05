<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PostModel;
use App\Models\UserModel;
use App\Models\CommentModel;
use App\Models\ParticModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\HTTP\RequestTrait;
use CodeIgniter\API\ResponseTrait;

class CommentController extends ResourceController
{
    use RequestTrait;
    public function insertComment()
    {
        $session = session();
        $userId = $session->get("userId");
        $statusUser = $session->get("statusUser");
        $Comment = [
            'commentDetail' => $this->request->getVar('Comment'),
            'userId' => $userId,
            'postId' => $this->request->getVar('postId'),

        ];
        $model = new CommentModel();
        $Add = $model->insertComment($Comment);
        if ($Add) {
            $model = new UserModel();
            $numprovince = $session->get("province");
            $datapost['province'] = $model->getProvince($numprovince);
            $modelpost = new PostModel();
            $datapost['posts'] = $modelpost->viewPost();
            $modelCom = new CommentModel();
            $datapost['comments'] = $modelCom->viewComment();
            $modelPart = new ParticModel();
            $datapost['parts'] = $modelPart->viewPartic();
            $session->setFlashdata('Success', 'สร้างความคิดเห็นสำเร็จ');
            echo view('showdata', $datapost);
            return redirect()->to('/showdata');
        }
    }

    public function deleteComment($commentId = null)
    {
        $session = session();
        $model = new CommentModel();
        $deletedCommnet = $model->deleteComment($commentId);
        if ($deletedCommnet) {
            $model = new UserModel();
            $numprovince = $session->get("province");
            $datapost['province'] = $model->getProvince($numprovince);
            $modelpost = new PostModel();
            $datapost['posts'] = $modelpost->viewPost();
            $modelCom = new CommentModel();
            $datapost['comments'] = $modelCom->viewComment();
            $modelPart = new ParticModel();
            $datapost['parts'] = $modelPart->viewPartic();
            $session->setFlashdata('Success', 'ลบคอมเม้นท์สำเร็จ!!');
            echo view('showdata', $datapost);
            return redirect()->to('/showdata');
        }
        
    }
}
