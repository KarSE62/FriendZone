<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PostModel;
use App\Models\UserModel;
use App\Models\CommentModel;
use App\Models\ParticModel;
use App\Models\NotificationModel;
use App\Models\CategoryModel;
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
        $notificat = [
            'notificateDetail' => "ได้มีแสดงความคิดเห็นต่อโพสต์ประกาศกิจกรรม",
            'statusNotic' => 0,
            'userId' => $this->request->getVar('myUserId')
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
            $datapost['partsProfile'] = $modelPart->viewProfilePartic();
            $modelNotic = new NotificationModel();
            $datapost['notics'] = $modelNotic->viewNotification();
            $AddNotificat = $modelNotic->insertNotification($notificat);
            $modelCategory = new CategoryModel();
            $datapost['categorys'] = $modelCategory->showCategory();
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
            $datapost['partsProfile'] = $modelPart->viewProfilePartic();
            $modelNotic = new NotificationModel();
            $datapost['notics'] = $modelNotic->viewNotification();
            $modelCategory = new CategoryModel();
            $datapost['categorys'] = $modelCategory->showCategory();
            $session->setFlashdata('Success', 'ลบคอมเม้นท์สำเร็จ!!');
            echo view('showdata', $datapost);
            return redirect()->to('/showdata');
        }
        
    }

    public function editComment()
    {
        $session = session();
        $model = new CommentModel();
        $userId = $session->get("userId");
        $comment = [
            'commentDetail' => $this->request->getVar('Comment'),
            'userId' => $userId,
            'postId' => $this->request->getVar('postId'),
        ];
        $commentId = [
            'commentId' => $this->request->getVar('commentId'),
        ];
        //var_dump($Comment,$CommentId);
        $editComment = $model->updateComment($comment, $commentId);
        if($editComment){
            $model = new UserModel();
            $numprovince = $session->get("province");
            $datapost['province'] = $model->getProvince($numprovince);
            $modelpost = new PostModel();
            $datapost['posts'] = $modelpost->viewPost();
            $modelCom = new CommentModel();
            $datapost['comments'] = $modelCom->viewComment();
            $modelPart = new ParticModel();
            $datapost['parts'] = $modelPart->viewPartic();
            $datapost['partsProfile'] = $modelPart->viewProfilePartic();
            $modelNotic = new NotificationModel();
            $datapost['notics'] = $modelNotic->viewNotification();
            $modelCategory = new CategoryModel();
            $datapost['categorys'] = $modelCategory->showCategory();
            $session->setFlashdata('Success', 'แก้ไขคอมเม้นท์สำเร็จ!!');
            echo view('showdata', $datapost);
            return redirect()->to('/showdata');
        }

        
    }
}
